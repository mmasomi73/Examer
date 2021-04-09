<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class RegisterationTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function can_see_registration_page()
    {
        $this->get(route('register'))->assertSeeLivewire('auth.register');
    }

    /** @test **/
    public function can_register()
    {
        Livewire::test('auth.register')
            ->set('name', 'aida')
            ->set('email', 'aida@aida.ir')
            ->set('password', 'secret')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertRedirect(route('index'));

        $this->assertTrue(User::whereEmail('aida@aida.ir')->exists());
        $this->assertEquals("aida@aida.ir", auth()->user()->email);
    }

    /** @test **/
    public function name_is_required()
    {
        Livewire::test('auth.register')
            ->set('name', '')
            ->set('email', 'aida@aida.ie')
            ->set('password', 'secret')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['name' => "required"]);
    }

    /** @test **/
    public function email_is_required()
    {
        Livewire::test('auth.register')
            ->set('name', 'aida')
            ->set('email', '')
            ->set('password', 'secret')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['email' => "required"]);
    }

    /** @test **/
    public function email_is_valid_email()
    {
        Livewire::test('auth.register')
            ->set('name', 'aida')
            ->set('email', 'aida')
            ->set('password', 'secret')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['email' => "email"]);
    }

    /** @test **/
    public function email_hasnt_been_taken_already()
    {
        User::create([
            "name"=>"aida",
            "email"=>"aida@aida.ir",
            "password"=>"secret",
        ]);
        Livewire::test('auth.register')
            ->set('name', 'aida')
            ->set('email', 'aida@aida.ir')
            ->set('password', 'secret')
            ->set('passwordConfirmation', 'secret')
            ->call('register')
            ->assertHasErrors(['email' => "unique"]);
    }

    /** @test **/
    public function password_is_required()
    {
        Livewire::test('auth.register')
            ->set('name', 'aida')
            ->set('email', 'aida@aida.ir')
            ->set('password', '')
            ->set('passwordConfirmation', '')
            ->call('register')
            ->assertHasErrors(['password' => "required"]);
    }

    /** @test **/
    public function password_has_min_length()
    {
        Livewire::test('auth.register')
            ->set('name', 'aida')
            ->set('email', 'aida@aida.ir')
            ->set('password', 'sec')
            ->set('passwordConfirmation', 'sec')
            ->call('register')
            ->assertHasErrors(['password' => "min"]);
    }

    /** @test **/
    public function password_has_confirmed()
    {
        Livewire::test('auth.register')
            ->set('name', 'aida')
            ->set('email', 'aida@aida.ir')
            ->set('password', 'secret')
            ->set('passwordConfirmation', 'not-secret')
            ->call('register')
            ->assertHasErrors(['password' => "same"]);
    }
}
