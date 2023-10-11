<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'email',
        'email_verified_at',
<<<<<<< HEAD
        'roles_id',
        'password',
=======
        'password',
        'roles_id',
>>>>>>> fa88292eb4e2c198bf278ffc9049c6428e355619
        'remember_token'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return User::class;
    }
}
