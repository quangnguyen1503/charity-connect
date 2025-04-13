<?php 
namespace App\Repositories\Contracts;

interface ManagementActionsRepositoryInterface
{
   
    public function getPendingOrganizations();
    public function approve(string $id);
    // public function reject(string $id);
}
