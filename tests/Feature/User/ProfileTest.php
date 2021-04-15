<?php

namespace Tests\Feature\User;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
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
            'birthday'=>'2020/02/04',
            'about'=>'bar'
        ])->create();

        Livewire::actingAs($user)->test('user.profile')
            ->set([
                'name'=>'new-john',
                'username'=>'new_john06',
                'birthday'=>'2000/02/02',
                'about'=>'new-bar'
            ])
            ->call('update');

        $user->refresh();
        $this->assertEquals('new-john', $user->name);
        $this->assertEquals('new_john06', $user->username);
        $this->assertEquals('2000/02/02',optional($user->birthday)->format("Y/m/d"));
        $this->assertEquals('new-bar', $user->about);
    }

    /** @test **/
    public function profile_info_is_pre_populated()
    {
        $user = User::factory([
            'name'=>'john',
            'username'=>'john06',
            'birthday'=>'2020/02/04',
            'about'=>'bar'
        ])->create();

        Livewire::actingAs($user)->test('user.profile')
            ->assertSet('name', 'john')
            ->assertSet('username', 'john06')
            ->assertSet('birthday', '2020/02/04')
            ->assertSet('about', 'bar');
    }

    /** @test **/
    public function can_upload_avatar()
    {
        $user = User::factory([
            'name'=>'john',
            'username'=>'john06',
            'birthday'=>'2020/02/04',
            'about'=>'bar'
        ])->create();

        $filename = UploadedFile::fake()->image('avatar.jpg');
        Storage::fake('avatars');

        Livewire::actingAs($user)->test('user.profile')
            ->set([
                'name'=>'new-john',
                'username'=>'new_john06',
                'birthday'=>'2000/02/02',
                'avatar'=>$filename,
                'about'=>'new-bar'
            ])
            ->call('update');

        $user->refresh();
        $this->assertEquals('new-john', $user->name);
        $this->assertEquals('new_john06', $user->username);
        $this->assertEquals('2000/02/02',optional($user->birthday)->format("Y/m/d"));
        $this->assertEquals('new-bar', $user->about);
        $this->assertNotNull( $user->avatar);
        Storage::disk('avatars')->assertExists($user->avatar);
    }

    /** @test **/
    public function uploaded_avatar_is_image()
    {
        $user = User::factory([
            'name'=>'john',
            'username'=>'john06',
            'birthday'=>'2020/02/04',
            'about'=>'bar'
        ])->create();

        Storage::fake('avatars');
        $filename = UploadedFile::fake()->create('document.pdf', 100);

        Livewire::actingAs($user)->test('user.profile')
            ->set([
                'name'=>'new-john',
                'username'=>'new_john06',
                'birthday'=>'2000/02/02',
                'avatar'=>$filename,
                'about'=>'new-bar'
            ])
            ->call('update')
            ->assertHasErrors(['avatar'=>'image']);

    }

    /** @test **/
    public function uploaded_avatar_less_than_2meg()
    {
        $user = User::factory([
            'name'=>'john',
            'username'=>'john06',
            'birthday'=>'2020/02/04',
            'about'=>'bar'
        ])->create();

        $filename = UploadedFile::fake()->image('avatar.jpg')->size(2050);
        Storage::fake('avatars');

        Livewire::actingAs($user)->test('user.profile')
            ->set([
                'name'=>'new-john',
                'username'=>'new_john06',
                'birthday'=>'2000/02/02',
                'avatar'=>$filename,
                'about'=>'new-bar'
            ])
            ->call('update')
            ->assertHasErrors(['avatar'=>'max']);
    }

}
