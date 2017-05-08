<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

//TODO Napravi test i funkciju za djeljenje i pazi na div zero

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
    public function zbroj($a=3,$b=5){
       return $a+$b;
    }
    public function testFunkcZbroj(){
        $this->assertEquals(17, $this->zbroj(8,9),'Zbroj je 17 što je ok');
        $this->assertNotEquals(19, $this->zbroj(8,9),'zbroj ne moze biti 19');
    }
    public function mnozi($a=5, $b=8){
        return $a*$b;
    }
       public function testFunkcMnozi(){
        $this->assertEquals(30, $this->mnozi(5,6),'Umnozak je 30 što je ok');
        $this->assertNotEquals(30, $this->mnozi(8,9),'umnozak ne moze biti 19');
    } 
}
