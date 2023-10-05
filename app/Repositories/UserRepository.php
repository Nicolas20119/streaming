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
        'password',
<<<<<<< HEAD
        'roles_id',
=======
>>>>>>> f3987a5228b103f97d303cd47fdf76728d155f0d
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
