<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function test_post()
    {

        $response = $this->post('/reservation',[

      'user_id' => '1',
      'shop_id' => '2',
      'num_of_users' => '4',
      'start_at' => '2022-10-1-09:00',
        ]);

        $response->assertRedirect('/done');
    }
}
