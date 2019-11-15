<?php

class UserServiceTest extends \PHPUnit\Framework\TestCase
{
    public function testUserSerivce()
    {
        $userRepository = $this->createStub(UserRepository::class);
        $userRepository->method('getById')
            ->willReturn(['id' => 1, 'firstname' => 'Adrian', 'lastname' => 'Pietka']);

        $userService = new UserService($userRepository);
        $user = $userService->getUserById(1);

        $this->assertSame(1, $user->id());
        $this->assertSame('Adrian Pietka', $user->fullname());
    }
}