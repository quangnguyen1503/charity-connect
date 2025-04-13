<?php

namespace App\Services;

use App\Models\Volunteer;
use App\Repositories\Eloquent\VolunteerRepository;

class VolunteerService
{
    protected $volunteerRepo;

    public function __construct(VolunteerRepository $volunteerRepo)
    {
        $this->volunteerRepo = $volunteerRepo;
    }
    // lấy thông tin profile của tình nguyện viên
    public function getProfile(string $id)
    {
        return $this->volunteerRepo->findById($id);
    }
}
