<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VolunteerService;
class VolunteerController extends Controller
{
    protected $volunteerService;

    public function __construct(VolunteerService $volunteerService)
    {
        $this->volunteerService = $volunteerService;
    }

    public function profile($id)
    {
        $volunteer = $this->volunteerService->getProfile($id);

        return view('volunteer.profile', compact('volunteer'));
    }

    public function topVolunteersLastQuarter()
    {
        $volunteers = $this->volunteerService->getTopVolunteersLastQuarter();

        return response()->json([
            'success' => true,
            'data' => $volunteers
        ]);
    }

}
