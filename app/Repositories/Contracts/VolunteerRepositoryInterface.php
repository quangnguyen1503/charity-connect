<?php 
// app/Repositories/Contracts/VolunteerRepositoryInterface.php
namespace App\Repositories\Contracts;

interface VolunteerRepositoryInterface
{
    public function findById(string $id);
}
