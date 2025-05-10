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
    protected $fillable = [
        'event_id', 'organization_id', 'name', 'description', 'start_date', 'end_date',
        'location', 'min_quantity', 'max_quantity', 'quantity_now', 'status', 'approved', 'image'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->event_id)) {
                $model->event_id = (string) Str::uuid();
            }
        });
    }
    // Thêm $casts để tự động chuyển đổi ngày giờ thành Carbon
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

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
}
