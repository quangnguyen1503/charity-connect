<?php

namespace App\Services;


use App\Repositories\Repository\OrganizationRepositoryInterface;
class OrganizationService
{
    protected $organizationRepo;

    public function __construct(OrganizationRepositoryInterface $organizationRepo)
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

    // lấy danh sách tổ chức đã duyệt
    public function getApprovedOrganizations()
    {
        return $this->organizationRepo->getApproved();
    }
    // duyệt tổ chức
    public function approve(string $id): bool
    {
        return $this->organizationRepo->approve($id)->save();
    }

    // lấy danh sách tổ chức đã bị từ chối
    public function getRejectedOrganizations()
    {
        return $this->organizationRepo->getRejected();
    }
}
