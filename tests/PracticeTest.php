<?php

class PracticeTest extends TestCase
{ 
    public function testStuff()
    {
        $names = ['Dylan', 'Taylor', 'Troll'];

        $this->assertContains('Troll', $names, "TROLL!");
    }

    public function testTest()
    {
        $actual = link_me_to('dogs/1', 'Show Dog');
        $expect = "<a href='http://localhost/dogs/1'>Show Dog</a>";

        $this->assertEquals($expect, $actual);
    }
}
