<?php

namespace App\Providers\User;

use App\Http\Controllers\Api\UsersController;
use Illuminate\Support\ServiceProvider;

class UserService extends ServiceProvider
{
    public $userController;

    public function __construct(UsersController $usersController)
    {
        $this->userController = $usersController;
    }

    public function addUser($user)
    {
        return $this->userController->store($user);
    }

    /**
     * Register services.
     */
    public function register(): void
    {
//
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
