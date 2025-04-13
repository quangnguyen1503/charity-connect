<?php
namespace App\Repositories\Eloquent;

use App\Models\Organization;
use App\Repositories\Contracts\BaseRepositoryInterface;
use App\Repositories\Contracts\ManagementActionsRepositoryInterface;

class OrganizationRepository implements BaseRepositoryInterface, ManagementActionsRepositoryInterface
{
    public function findById(string $id)
    {
        return Organization::findOrFail($id);

    }
    public function getPendingOrganizations()
    {
        return Organization::where('approved', 'pending')->paginate(1);
    }
    public function approve(string $id)
    {
        $organization = Organization::findOrFail($id);
        $organization->approved = 'approved';
        $organization->save();
        return $organization;
    }
}
