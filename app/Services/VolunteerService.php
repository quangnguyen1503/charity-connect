<?php

namespace App\Services;

use App\Repositories\Repository\VolunteerRepositoryInterface;
use App\Http\DTOs\Requests\TopVolunteerRequest;
use Carbon\Carbon;

class VolunteerService
{
    protected $volunteerRepo;

    public function __construct(VolunteerRepositoryInterface $volunteerRepo)
    {
        $this->volunteerRepo = $volunteerRepo;
    }
    // lấy thông tin profile của tình nguyện viên
    public function getProfile(string $id)
    {
        return $this->volunteerRepo->findById($id);
    }

    // lấy top tình nguyện viên trong quý vừa qua
    public function getTopVolunteersLastQuarter(int $limit = 3)
    {
        return $this->volunteerRepo->getTopVolunteersLastQuarter($limit);
    }

    
}
