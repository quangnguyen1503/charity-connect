<?php 
namespace App\Repositories\Repository;

use App\Repositories\Contracts\ManagementActionsRepositoryInterface;
use App\Repositories\Contracts\BaseRepositoryInterface;
use App\Repositories\Contracts\TopVoluntterRepositoryInterface;

interface VolunteerRepositoryInterface extends BaseRepositoryInterface, ManagementActionsRepositoryInterface, TopVoluntterRepositoryInterface
{
    public function getAll();
    public function findById(string $id);
    public function getPending();
    public function getApproved();
    public function getRejected();
    public function approve(string $id);
    public function reject(string $id);
    public function getTopVolunteersLastQuarter(int $limit = 3);
}