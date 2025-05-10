<?php
namespace App\Repositories\Eloquent;

use App\Models\Organization;
use App\Repositories\Repository\OrganizationRepositoryInterface;
class OrganizationRepository implements OrganizationRepositoryInterface
{
    public function findById(string $id)
    {
        return Organization::findOrFail($id);

    
    }

    public function getAll()
    {
        return Organization::orderBy('created_at', 'desc')->paginate(10);
    }
    public function getPending()
    {
        return Organization::where('approved', 'pending')->paginate(1);
    }
    public function getApproved()
    {
        return Organization::where('approved', 'approved')->paginate(1);
    }
    public function getRejected()
    {
        return Organization::where('approved', 'rejected')->paginate(1);
    }
    public function reject(string $id)
    {
        $organization = Organization::findOrFail($id);
        $organization->approved = 'rejected';
        $organization->save();
        return $organization;
    }
    public function approve(string $id)
    {
        $organization = Organization::findOrFail($id);
        $organization->approved = 'approved';
        $organization->save();
        return $organization;
    }
}
