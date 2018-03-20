<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Drustva;

class CreateDrustvaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $dr = new Drustva();
        $dr->name = 'test';
        $dr->save();
        $this->assertEquals($dr->name,'test');
        $dr1 = Drustva::find($dr->id);
        $this->assertInstanceOf(Drustva::class,$dr1);
        Drustva::destroy($dr1->id);
    }
}
