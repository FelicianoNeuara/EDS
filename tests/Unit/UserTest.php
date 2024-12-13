<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_user_name_is_set_correctly()
    {
        $user = new \App\Models\User();
        $user->name = 'John Doe';

        $this->assertEquals('John Doe', $user->name);
    }
}
