<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Services\EventService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    protected $eventService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    public function index()
    {
        $events = Event::all();
        return view('index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'start_date' => 'required|date|after_or_equal:today',
                'end_date' => 'nullable|date|after_or_equal:start_date',
                'location' => 'required|string|max:255',
                'min_quantity' => 'required|integer|min:1',
                'max_quantity' => 'required|integer|gte:min_quantity',
                'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            ]);

            $organizationId = Auth::user()->organization_id ?? '0c51f39e-2fa7-3fda-a3ad-ee985157e29f';

            $event = $this->eventService->createEvent(
                $validated,
                $organizationId,
                $request->file('image')
            );

            return redirect()->route('events.create')
                ->with('success', 'Sự kiện đã được đăng ký và đang chờ duyệt.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Lỗi validate khi tạo sự kiện: ' . json_encode($e->errors()));
            return back()->withInput()->with('error', 'Dữ liệu không hợp lệ: ' . implode(', ', $e->errors()[array_key_first($e->errors())]));
        } catch (\Exception $e) {
            Log::error('Lỗi khi tạo sự kiện: ' . $e->getMessage());
            if ($request->hasFile('image')) {
                Log::info('Tên file gốc: ' . $request->file('image')->getClientOriginalName());
            }
            return back()->withInput()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        Log::info('Nhận yêu cầu PUT /event/' . $event->event_id, $request->all());
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'start_date' => 'required|date|after_or_equal:today',
                'end_date' => 'nullable|date|after_or_equal:start_date',
                'location' => 'required|string|max:255',
                'min_quantity' => 'required|integer|min:1',
                'max_quantity' => 'required|integer|gte:min_quantity',
                'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            ]);

            $this->eventService->updateEvent(
                $event,
                $validated,
                $request->file('image')
            );

            return redirect()->route('events.edit', $event->event_id)
                ->with('success', 'Chiến dịch đã được cập nhật thành công.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Lỗi validate khi cập nhật sự kiện: ' . json_encode($e->errors()));
            return back()->withInput()->withErrors($e->errors())->with('error', 'Dữ liệu không hợp lệ.');
        } catch (\Exception $e) {
            Log::error('Lỗi khi cập nhật sự kiện: ' . $e->getMessage());
            if ($request->hasFile('image')) {
                Log::info('Tên file gốc: ' . $request->file('image')->getClientOriginalName());
            }
            return back()->withInput()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    public function show(Event $event)
    {
        $event->load('organization');
        return view('events.show', compact('event'));
        


    }

    public function register(Event $event, Request $request)
    {
        try {
            $volunteerId = Auth::user()->volunteer_id ?? '0c51f39e-2fa7-3fda-a3ad-ee985157e29f';
            $this->eventService->registerVolunteer($event, $volunteerId);

            return redirect()->route('events.show', $event->event_id)
                ->with('success', 'Đăng ký tham gia chiến dịch thành công!');

        } catch (\Exception $e) {
            Log::error('Lỗi khi đăng ký tham gia sự kiện: ' . $e->getMessage());
            return redirect()->route('events.show', $event->event_id)
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }

    public function destroy(Event $event, Request $request)
    {
        try {
            $organizationId = Auth::user()->organization_id ?? '0a95205f-1ca7-3ab3-a476-4af8897b61d7';
            
            // Kiểm tra quyền: Chỉ tổ chức tạo sự kiện mới được xóa
            if ($event->organization_id !== $organizationId) {
                return redirect()->route('events.show', $event->event_id)
                    ->with('error', 'Bạn không có quyền xóa sự kiện này.');
            }

            $this->eventService->deleteEvent($event);

            return redirect()->route('events.index')
                ->with('success', 'Sự kiện đã được xóa thành công!');

        } catch (\Exception $e) {
            Log::error('Lỗi khi xóa sự kiện: ' . $e->getMessage());
            return redirect()->route('events.show', $event->event_id)
                ->with('error', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }
}