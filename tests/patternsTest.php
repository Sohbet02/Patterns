<?php

namespace Upgrader\Patterns\Test;

use PHPUnit\Framework\TestCase;
use \Upgrader\Patterns\Registry;

class PatternsTest extends TestCase 
{
    /**
     * @covers Patterns
     */
    public function testPatternRegistry(): void
    {
        Registry::set('name', 'First product');  
        $this->assertSame('First product', Registry::get('name'));

        Registry::removeRegistry('name');

        $this->assertEmpty(Registry::get('name'));
    }
}