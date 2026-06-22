<?php
/**
 * Tests for ApexNode
 */

use PHPUnit\Framework\TestCase;
use Apexnode\Apexnode;

class ApexnodeTest extends TestCase {
    private Apexnode $instance;

    protected function setUp(): void {
        $this->instance = new Apexnode(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apexnode::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
