<?php

namespace Tests\Feature;

use App\Services\UserServices;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
   private UserServices $userServices;
   protected function setUp():void
   {
       parent::setUp();

       $this->userServices = $this->app->make(UserServices::class);
   }

   public function testSample()
   {
       self::assertTrue(true);
   }

}
