<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Volunteer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'volunteer_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['username', 'email', 'fullname', 'phone', 'address'];


    protected $hidden = [
        'password', 'remember_token',
    ];

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

    public function results()
    {
        return $this->hasMany(Result::class, 'volunteer_id', 'volunteer_id');
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'volunteer_id', 'volunteer_id');
    }
}
