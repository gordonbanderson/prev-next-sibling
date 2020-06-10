<?php declare(strict_types = 1);

namespace WebOfTalent\PrevNextSibling\Tests;

use SilverStripe\Dev\SapphireTest;

class PrevNextSiblingExtensionTest extends SapphireTest
{

    protected static $fixture_file = 'tests/PrevNextSiblingExtensionTest.yml';

    public function testNextSibling(): void
    {
        $child1 = $this->objFromFixture('Page', 'child01');
        $child2 = $this->objFromFixture('Page', 'child02');
        $child3 = $this->objFromFixture('Page', 'child03');
        $this->assertNull($child3->NextSibling());
        $this->assertEquals($child2->ID, $child1->NextSibling()->ID);
        $this->assertEquals($child3->ID, $child2->NextSibling()->ID);
    }


    public function testPreviousSibling(): void
    {
        $child1 = $this->objFromFixture('Page', 'child01');
        $this->assertNull($child1->PreviousSibling());
        $child2 = $this->objFromFixture('Page', 'child02');
        $this->assertEquals($child1->ID, $child2->PreviousSibling()->ID);
        $child3 = $this->objFromFixture('Page', 'child03');
        $this->assertEquals($child2->ID, $child3->PreviousSibling()->ID);
    }
}
