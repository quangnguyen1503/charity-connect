<?php 
// app/Repositories/Eloquent/VolunteerRepository.php
namespace App\Repositories\Eloquent;

use App\Models\Volunteer;
use App\Repositories\Contracts\BaseRepositoryInterface;

class VolunteerRepository implements BaseRepositoryInterface
{
    public function findById(string $id)
    {
        return Volunteer::findOrFail($id);
    }
}
