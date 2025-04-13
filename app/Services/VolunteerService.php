<?php

namespace App\Services;

use App\Models\Volunteer;
use App\Repositories\Contracts\VolunteerRepositoryInterface;

class VolunteerService
{
    protected $volunteerRepo;

    public function __construct(VolunteerRepositoryInterface $volunteerRepo)
    {
        $this->volunteerRepo = $volunteerRepo;
    }

    public function getProfile(string $id)
    {
        return $this->volunteerRepo->findById($id);
    }
}
