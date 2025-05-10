<?php

namespace App\Repositories\Contracts;

interface EventRepositoryInterface
{
    public function create(array $data): \App\Models\Event;
}