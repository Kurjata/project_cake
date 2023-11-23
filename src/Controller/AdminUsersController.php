<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AdminUsers Controller
 *
 */
class AdminUsersController extends AppController
{
    public function index()
    {
        var_dump('list users in admin');
        die();
    }

    public function show($arg1)
    {
        var_dump('show user with admin'.$arg1);
        die();
    }
}
