<?php

class PrevNextSiblingExtensionTest extends SapphireTest {

    protected static $fixture_file = 'PrevNextSiblingExtensionTest.yml';

	public function testNextSibling() {
		$child1 = $this->objFromFixture('Page', 'child01');
        $child2 = $this->objFromFixture('Page', 'child02');
        $child3 = $this->objFromFixture('Page', 'child03');
        $this->assertNull($child3->NextSibling());
        $this->assertEquals($child2, $child1->NextSibling());
        $this->assertEquals($child3, $child2->NextSibling());
	}

	public function testPreviousSibling() {
		$child1 = $this->objFromFixture('Page', 'child01');
        $this->assertNull($child1->PreviousSibling());
        $child2 = $this->objFromFixture('Page', 'child02');
        $this->assertEquals($child1, $child2->PreviousSibling());
        $child3 = $this->objFromFixture('Page', 'child03');
        $this->assertEquals($child2, $child3->PreviousSibling());
	}

}
