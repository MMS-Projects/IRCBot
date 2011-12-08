<?php

require_once dirname(__FILE__) . '/../../src/Types/Channel.php';

/**
 * Test class for IRCBot_Types_Channel.
 * Generated by PHPUnit on 2011-12-06 at 21:35:58.
 */
class IRCBot_Types_ChannelTest extends PHPUnit_Framework_TestCase {

    /**
     * @var IRCBot_Types_Channel
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new IRCBot_Types_Channel;
        $this->object->nicklist['TestUser1'] = CHAN_MODE_OP;
        $this->object->nicklist['TestUser2'] = 0;
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
    public function testIsOp() {
        $this->assertTrue($this->object->isOp('TestUser1'));
        $this->assertFalse($this->object->isOp('TestUser2'));
    }

}

?>
