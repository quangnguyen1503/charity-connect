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
    // lấy thông tin profile của tổ chức
    public function profile(string $id)
    {
        try {
            $organization = $this->organizationService->getProfile($id);

            return response()->json([
                'success' => true,
                'data' => $organization
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Organization not found'
            ], 404);
        }
    }
    // lấy danh sách tổ chức đang chờ duyệt
    public function pending()
    {
        $pendingOrgs = $this->organizationService->getPendingOrganizations();

        return response()->json([
            'success' => true,
            'data' => $pendingOrgs
        ]);
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
}
