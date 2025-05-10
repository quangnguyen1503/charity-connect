<?php

namespace App\Repositories\Eloquent;

use App\Models\Event;
use App\Repositories\Contracts\EventRepositoryInterface;

class EventRepository implements EventRepositoryInterface
{
    protected $model;

    public function __construct(Event $model)
    {
        $this->model = $model;
    }

    public function create(array $data): Event
    {
        return $this->model->create($data);
    }


    public function getAll(){
        return Event::orderBy('created_at', 'desc')->paginate(2);
        
    }
    public function findById(string $id)
    {
        return Event::with('organization:organization_id,fullname')
        ->findOrFail($id)
       ;

    }
    public function getPending()
    {
        return Event::with('organization:organization_id,fullname')
        ->where('approved', 'pending')->paginate(2);

    }
    public function getApproved()
    {
        return Event::with('organization:organization_id,fullname')
        ->orwhere('approved', 'approved')->paginate(2);
    }
    public function getRejected()
    {
        return Event::with('organization:organization_id,fullname')
        ->where('approved', 'rejected')->paginate(2);
    }
    public function approve(string $id)
    {
        $Event = Event::findOrFail($id);
        $Event->approved = 'approved';
        $Event->save();
        return $Event;
    }
    public function reject(string $id)
    {
        $Event = Event::findOrFail($id);
        $Event->approved = 'rejected';
        $Event->save();
        return $Event;
    }
 
}
