<?php

class User
{
    private array $users = array();
    private $roles = ['admin', 'member', 'manager', 'other'];

    function __construct($name, $role)
    {
        $user = [ 'name' => $name, 'role' => $role];
    }

    public function getRole($username)
    {
        foreach($this->users as $user) {
            if ($user['name'] == $username);
            return $user['role'];
        }
    }
}