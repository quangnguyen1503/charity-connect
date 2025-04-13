<?php 
// app/Repositories/Eloquent/VolunteerRepository.php
namespace App\Repositories\Eloquent;

use App\Models\Volunteer;
use App\Repositories\Contracts\VolunteerRepositoryInterface;

class VolunteerRepository implements VolunteerRepositoryInterface
{
    public function findById(string $id)
    {
        return Volunteer::findOrFail($id);
    }
}
