<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Organization extends Model
{
    use HasFactory;
    protected $primaryKey = 'organization_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function events()
    {
        return $this->hasMany(Event::class, 'organization_id', 'organization_id');
    }
}

