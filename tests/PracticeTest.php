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
    }
}
