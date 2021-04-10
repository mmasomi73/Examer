<?php

namespace Tests\Feature\User;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
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

    /** @test **/
    public function unauthorized_people_cant_see_profile_page()
    {
        $this->get(route('profile'))->assertRedirect(route('auth.login'));
    }

    /** @test **/
    public function can_update_profile()
    {
        $user = User::factory([
            'name'=>'john',
            'username'=>'john06',
            'about'=>'bar'
        ])->create();

        Livewire::actingAs($user)->test('user.profile')
            ->set([
                'name'=>'john',
                'username'=>'john06',
                'about'=>'bar'
            ])
            ->call('update');

        $user->refresh();
        $this->assertEquals('john', $user->name);
    }

    /** @test **/
    public function profile_info_is_pre_populated()
    {
        $user = User::factory([
            'name'=>'john',
            'username'=>'john06',
            'about'=>'bar'
        ])->create();

        Livewire::actingAs($user)->test('user.profile')
            ->assertSet('name', 'john')
            ->assertSet('username', 'john06')
            ->assertSet('about', 'bar');
    }
}
