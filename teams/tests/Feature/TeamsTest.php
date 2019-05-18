<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TeamsTest extends TestCase
{
	use RefreshDatabase;
    

    public function test_a_user_can_create_a_team()
    {

    	$this->actingAs(factory('App\User')->create());

    	$attributes = ['name'=>'Amal'];
    	
    	$this->post('/teams',$attributes);

    	$this->assertDatabaseHas('teams',$attributes);
    }

	public function test_guest_may_not_create_teams()
    {

    	$this->post('/teams')->assertRedirect('/login');

    }


}
