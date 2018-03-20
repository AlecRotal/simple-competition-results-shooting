<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Kategorija;

class CreateKategorijaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $ds = new Kategorija();
        $ds->name = 'test';
        $ds->save();
        $this->assertEquals($ds->name,'test');
        $ds1 = Kategorija::find($ds->id);
        $this->assertInstanceOf(Kategorija::class,$ds1);
        Kategorija::destroy($ds1->id);
    }
}
