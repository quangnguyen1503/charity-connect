<?php

namespace App\Http\Controllers;
use App\Services\EventService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{
    //
    protected $eventService;
    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    // lấy danh sách event chưa được duy
    



    // duyệt event
    public function approve($id){
        $result = $this->eventService->approve($id);
        return response()->json([
            'success'=>true,
            'message'=>$result ? 'Duyệt sự kiện thành công.' : 'Duyệt sự kiện thất bại.'
        ]);
    }

    public function index(){
        $events = $this->eventService->getApprove();
        return view('admin.events.content', compact('events'));
        // return $events;
    }

    public function getPendingEvents(){
        $events = $this->eventService->getPendingEvents();

        return view('admin.events.content', compact('events'));
    }

    public function getRejected(){
        $events = $this->eventService->getRejected();
        return view('admin.events.content', compact('events'));
    }

    // lấy thông tin chi tiết event user 
    public function profile($id){
        $event = $this->eventService->getEventById($id);
        return $event;
    }
}
