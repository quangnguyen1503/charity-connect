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
    
    public function pending(){

        $events = $this->eventService->getPendingEvents();

        return response()->json([
            'success' => true,
            'data' => $events
        ]);
    }


    // duyệt event
    public function approve($id){
        $result = $this->eventService->approve($id);
        return response()->json([
            'success'=>true,
            'message'=>$result ? 'Duyệt sự kiện thành công.' : 'Duyệt sự kiện thất bại.'
        ]);
    }

    public function index(){
        $events = $this->eventService->getAllEvents();
        return view('admin.events.content', compact('events'));
    }
}
