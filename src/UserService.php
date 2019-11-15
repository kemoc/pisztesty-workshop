<?php

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUserById(int $id) : User
    {
        $user = $this->userRepository->getById($id);
        return new User($user['id'], $user['firstname'] . ' ' . $user['lastname']);
    }
}