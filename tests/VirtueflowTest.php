<?php
/**
 * Tests for VirtueFlow
 */

use PHPUnit\Framework\TestCase;
use Virtueflow\Virtueflow;

class VirtueflowTest extends TestCase {
    private Virtueflow $instance;

    protected function setUp(): void {
        $this->instance = new Virtueflow(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Virtueflow::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
