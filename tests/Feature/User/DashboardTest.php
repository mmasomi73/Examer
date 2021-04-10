<?php

namespace Tests\Feature\User;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function authorized_people_can_see_dashboard_page()
    {
        $user =  $user = User::factory()->make();

        $this->actingAs($user)->get(route('dashboard'))->assertSeeLivewire('user.dashboard');
    }

    /** @test **/
    public function unauthorized_people_cant_see_dashboard_page()
    {
        $this->get(route('dashboard'))->assertRedirect(route('auth.login'));
    }
}
