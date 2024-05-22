<?php

namespace Evd;

use App\Models\User;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class FirstEvdTest extends TestCase
{
//    private $newObject
//    private MockObject $user;

    protected function setUp(): void
    {
//        parent::setUp();
//        $this->user = $this->createMock(User::class);

    }

    public function test_that_test_is_works()
    {
        $this->assertTrue(true);
    }

    public function test_that_test_is_works2()
    {
        $this->assertFalse(false);
    }
}
