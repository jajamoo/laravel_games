<?php


namespace Tests\Unit;


use Tests\TestCase;

class GamesControllerTest extends TestCase
{
    public function testCreateAction()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
