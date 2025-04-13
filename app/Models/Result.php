<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Result extends Model
{
    use HasFactory;
    protected $primaryKey = 'result_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function volunteer()
    {
        return $this->belongsTo(Volunteer::class, 'volunteer_id', 'volunteer_id');
    }
}

