<?php

require_once dirname(__FILE__) . '/../../src/Types/Queue.php';

/**
 * Test class for IRCBot_Types_Queue.
 * Generated by PHPUnit on 2011-12-06 at 21:35:58.
 */
class IRCBot_Types_QueueTest extends PHPUnit_Framework_TestCase {

    /**
     * @var IRCBot_Types_Queue
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new IRCBot_Types_Queue;
        $this->object->addEntry('test');
        $this->object->addEntry('test2');
        $this->object->addEntry('test3');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetFirstEntry() {
        $this->assertEquals('test', $this->object->getFirstEntry());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testDelFirstEntry() {
        $this->object->delFirstEntry();
        $this->assertEquals('test2', $this->object->getFirstEntry());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testShift() {
        $this->assertEquals('test', $this->object->shift());
        $this->assertEquals('test2', $this->object->shift());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testAddEntry() {
        $this->object->addEntry('aaaa');
        $this->assertEquals(4, $this->object->getEntryCount());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testAddEntries() {
        $this->object->addEntries(array('aaaa', 'aaaa'));
        $this->assertEquals(5, $this->object->getEntryCount());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetEntryCount() {
        $this->assertEquals(3, $this->object->getEntryCount());
    }

    /**
     * @covers {className}::{origMethodName}
     * @todo Implement testClean().
     */
    public function testClean() {
        $this->object->clean();
        $this->assertEquals(0, $this->object->getEntryCount());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testIsEmpty() {
        $this->assertFalse($this->object->isEmpty());
        $this->object->clean();
        $this->assertTrue($this->object->isEmpty());
    }

}

?>
