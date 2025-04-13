<?php

namespace App\Services;

use App\Repositories\Contracts\OrganizationRepositoryInterface;

class OrganizationService
{
    protected $organizationRepo;

    public function __construct(OrganizationRepositoryInterface $organizationRepo)
    {
        $this->organizationRepo = $organizationRepo;
    }

    public function getProfile(string $id)
    {
        return $this->organizationRepo->findById($id);
    }
}
