<?php

namespace Tests\Feature\User;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function authorized_people_can_see_profile_page()
    {
        $user = User::factory()->make();

        $this->actingAs($user)->get(route('profile'))->assertSeeLivewire('user.profile');
    }
}