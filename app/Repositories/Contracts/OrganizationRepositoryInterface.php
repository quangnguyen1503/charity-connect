<?php 
namespace App\Repositories\Contracts;

interface OrganizationRepositoryInterface
{
    public function findById(string $id);
}
