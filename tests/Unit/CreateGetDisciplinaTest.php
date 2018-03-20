<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Disciplina;

class CreateDisciplinaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
          $ds = new Disciplina();
          $ds->name = 'test';
          $ds->save();
          $this->assertEquals($ds->name,'test');
          $ds1 = Disciplina::find($ds->id);
          $this->assertInstanceOf(Disciplina::class,$ds1);
          Disciplina::destroy($ds1->id);
    }
}
