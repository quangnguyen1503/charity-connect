<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function results()
    {
        return $this->hasOne(Result::class, 'event_id', 'event_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'event_id', 'event_id');
    }
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'event_id', 'event_id');
    }
}
