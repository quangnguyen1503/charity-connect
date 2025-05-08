<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;
    protected $primaryKey = 'event_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_id', 'organization_id');
    }

    public function volunteers()
    {
        return $this->belongsToMany(Volunteer::class, 'volunteer_event', 'event_id', 'volunteer_id')
            ->withPivot('status')
            ->withTimestamps();
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'event_id', 'event_id');
    }
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'event_id', 'event_id');
    }

    protected static function booted()
    {
        static::creating(function ($event) {
            if (empty($event->event_id)) {
                $event->event_id = (string) Str::uuid();
            }
        });
    }


}
