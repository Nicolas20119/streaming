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
<<<<<<< HEAD
        'roles_id',
        'password',
=======
        'password',
        'roles_id',
>>>>>>> fa88292eb4e2c198bf278ffc9049c6428e355619
>>>>>>> 2df5dcc83bbe4e58df42774ec95cb6f798708ab7
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
