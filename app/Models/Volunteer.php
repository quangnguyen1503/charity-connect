<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Volunteer extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'volunteer_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function events()
    {
        return $this->belongsToMany(Event::class, 'volunteer_event', 'volunteer_id', 'event_id')
            ->withPivot('status')
            ->withTimestamps();
    }

    public function notifications()
    {
        return $this->belongsToMany(Notification::class, 'notification_volunteer', 'volunteer_id', 'notification_id')
            ->withTimestamps();
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'volunteer_id', 'volunteer_id');
    }
}
