<?php
namespace App\Repositories\Eloquent;

use App\Models\Organization;
use App\Repositories\Contracts\OrganizationRepositoryInterface;

class OrganizationRepository implements OrganizationRepositoryInterface
{
    public function findById(string $id)
    {
        return Organization::findOrFail($id);
    }
}
