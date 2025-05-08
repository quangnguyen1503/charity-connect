<?php

namespace App\Services;


use App\Repositories\Eloquent\OrganizationRepository;

class OrganizationService
{
    protected $organizationRepo;

    public function __construct(OrganizationRepository $organizationRepo)
    {
        $this->organizationRepo = $organizationRepo;
    }

    // lấy thông tin profile của tổ chức
    public function getProfile(string $id)
    {
        return $this->organizationRepo->findById($id);
    }
    // lấy danh sách tổ chức đang chờ duyệt
    public function getPendingOrganizations()
    {
        return $this->organizationRepo->getPending();
    }
    // duyệt tổ chức
    public function approve(string $id): bool
    {
        return $this->organizationRepo->approve($id)->save();
    }
}
