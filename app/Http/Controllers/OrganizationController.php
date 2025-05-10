<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\OrganizationService;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OrganizationController extends Controller
{
    protected $organizationService;

    public function __construct(OrganizationService $organizationService)
    {
        $this->organizationService = $organizationService;
    }
    // lấy thông tin profile của tổ chức cho admin
    public function profile(string $id)
    {


        $organization = $this->organizationService->getProfile($id);

            return View('admin.organization.detail', compact('organization'));
            // return $organization;
    }

    // lấy thông tin profile của tổ chức cho user
    public function index (string $id)
    {
        $organization = $this->organizationService->getProfile($id);

            return View('organization.profile', compact('organization'));
    }
   
    // lấy danh sách tổ chức đang chờ duyệt
    public function getPending()
    {
        $organizations = $this->organizationService->getPendingOrganizations();

        return view('admin.organization.content', compact('organizations'));
    }

    // duyệt tổ chức
    public function approve($id)
    {
        $result = $this->organizationService->approve($id);

        return response()->json([
            'success' => $result,
            'message' => $result ? 'Duyệt tổ chức thành công.' : 'Duyệt tổ chức thất bại.'
        ]);
    }

    // lấy danh sách tổ chức đã duyệt
    public function getApproved()
    {
        $organizations = $this->organizationService->getApprovedOrganizations();

        return view('admin.organization.content', compact('organizations'));
    }

    // lấy danh sách tổ chức đã bị từ chối
    public function getRejected()
    {
        $organizations = $this->organizationService->getRejectedOrganizations();

        return view('admin.organization.content', compact('organizations'));
    }
}
