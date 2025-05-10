<?php

namespace App\Services;

use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Repositories\Repository\EventRepositoryInterface;

class EventService
{
        public function __construct(protected EventRepositoryInterface $eventRepo)
    {
        $this->eventRepo = $eventRepo;
    }
    public function createEvent(array $data, string $organizationId, $imageFile = null)
    {
        $event = new Event();
        $event->name = $data['name'];
        $event->description = $data['description'];
        $event->start_date = $data['start_date'];
        $event->end_date = $data['end_date'];
        $event->location = $data['location'];
        $event->min_quantity = $data['min_quantity'];
        $event->max_quantity = $data['max_quantity'];
        $event->quantity_now = 0;
        $event->status = 'active';
        $event->approved = 'pending';
        $event->organization_id = $organizationId;

        if ($imageFile) {
            // Tạo tên file duy nhất
            $imageName = time() . '_' . $imageFile->getClientOriginalName();
            // Lưu hình ảnh vào public/images/
            $imageFile->move(public_path('images'), $imageName);
            $event->image = $imageName; // Lưu tên file vào database
            Log::info('Hình ảnh được lưu tại: ' . public_path('images/' . $imageName));
        }

        $event->save();
        return $event;
    }

    public function updateEvent(Event $event, array $data, $imageFile = null)
    {
        $event->name = $data['name'];
        $event->description = $data['description'];
        $event->start_date = $data['start_date'];
        $event->end_date = $data['end_date'];
        $event->location = $data['location'];
        $event->min_quantity = $data['min_quantity'];
        $event->max_quantity = $data['max_quantity'];

        if ($imageFile) {
            // Xóa hình ảnh cũ nếu có
            if ($event->image && file_exists(public_path('images/' . $event->image))) {
                unlink(public_path('images/' . $event->image));
            }
            // Lưu hình ảnh mới vào public/images/
            $imageName = time() . '_' . $imageFile->getClientOriginalName();
            $imageFile->move(public_path('images'), $imageName);
            $event->image = $imageName;
            Log::info('Hình ảnh được cập nhật tại: ' . public_path('images/' . $imageName));
        }

        $event->save();
        return $event;
    }

    public function deleteEvent(Event $event)
    {
        // Xóa hình ảnh nếu có
        if ($event->image && file_exists(public_path('images/' . $event->image))) {
            unlink(public_path('images/' . $event->image));
            Log::info('Hình ảnh đã được xóa: ' . public_path('images/' . $event->image));
        }

        // Xóa các bản ghi liên quan trong bảng trung gian (nếu có)
        $event->volunteers()->detach();

        // Xóa sự kiện
        $event->delete();
        Log::info('Sự kiện đã được xóa: ' . $event->event_id);
    }

    public function registerVolunteer(Event $event, string $volunteerId)
    {
        if ($event->volunteers()->where('volunteer_id', $volunteerId)->exists()) {
            throw new \Exception('Bạn đã đăng ký sự kiện này.');
        }

        if ($event->quantity_now >= $event->max_quantity) {
            throw new \Exception('Sự kiện đã đủ số lượng tham gia.');
        }

        if ($event->status !== 'active' || $event->approved !== 'approved') {
            throw new \Exception('Sự kiện không khả dụng để đăng ký.');
        }

        $event->volunteers()->attach($volunteerId, ['registered_at' => now()]);
        $event->increment('quantity_now');
    }




   // lấy danh sách event chưa được duyệt
    public function getPendingEvents(){
        return $this->eventRepo->getPending();
    }

    // duyệt event 
    public function approve(string $id):bool{
        return $this->eventRepo->approve($id)->save();
    }

    // lấy danh sách event 
    public function getAllEvents(){
        return $this->eventRepo->getAll();
    }

    // lấy danh sách event đã được duyệt
    public function getApprove(){
        return $this->eventRepo->getApproved();
    }

    // lấy danh sách event đã bị từ chối
    public function getRejected(){
        return $this->eventRepo->getRejected();
    }
    // lấy thông tin chi tiết event
    public function getEventById($id){
        return $this->eventRepo->findById($id);
    }
}
