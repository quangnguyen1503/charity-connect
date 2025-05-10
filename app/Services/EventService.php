<?php

namespace App\Services;


use App\Repositories\Repository\EventRepositoryInterface;

class EventService
{
    

    public function __construct(protected EventRepositoryInterface $eventRepo)
    {
        $this->eventRepo = $eventRepo;
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
