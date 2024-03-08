<?php

/**
 * Example of class that does not follow the SRP (Single Responsibility Principle).
 */
final class UserController
{
    public function createUser($username, $password)
    {
        // Logic for creating a new user
    }

    public function updateUser($userId, $data)
    {
        // Logic for updating user information
    }

    public function deleteUser($userId)
    {
        // Logic for deleting a user
    }
}
