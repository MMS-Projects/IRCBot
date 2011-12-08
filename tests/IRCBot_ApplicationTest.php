<?php

require_once dirname(__FILE__) . '/../src/Application.php';

/**
 * Test class for IRCBot_Application.
 * Generated by PHPUnit on 2011-12-06 at 21:39:20.
 */
class IRCBot_ApplicationTest extends PHPUnit_Framework_TestCase {

    /**
     * @var IRCBot_Application
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = IRCBot_Application::getInstance();
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
    public function testGetInstance() {
        $this->assertInstanceOf('IRCBot_Application', $this->object);
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetEventHandler() {
        $this->assertInstanceOf('IRCBot_Handlers_Events',
            $this->object->getEventHandler());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetModuleHandler() {
        $this->assertInstanceOf('IRCBot_Handlers_Modules',
            $this->object->getModuleHandler());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetBotHandler() {
        $this->assertInstanceOf('IRCBot_Handlers_Bots',
            $this->object->getBotHandler());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetSocketHandler() {
        $this->assertInstanceOf('IRCBot_Handlers_Sockets',
            $this->object->getSocketHandler());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetQueueHandler() {
        $this->assertInstanceOf('IRCBot_Handlers_Sockets',
            $this->object->getSocketHandler());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetCommandParser() {
        $this->assertInstanceOf('IRCBot_Parsers_Commands',
            $this->object->getCommandParser());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetResponseHandler() {
        $this->assertInstanceOf('IRCBot_Handlers_Responses',
            $this->object->getResponseHandler());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetUserCommandHandler() {
        $this->assertInstanceOf('IRCBot_Handlers_UserCommands',
            $this->object->getUserCommandHandler());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetIdentifierHandler() {
        $this->assertInstanceOf('IRCBot_Handlers_Identifiers',
            $this->object->getIdentifierHandler());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetChannelHandler() {
        $this->assertInstanceOf('IRCBot_Handlers_Channels',
            $this->object->getChannelHandler());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetNetworkHandler() {
        $this->assertInstanceOf('IRCBot_Handlers_Networks',
            $this->object->getNetworkHandler());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetLoop() {
        $this->assertInstanceOf('IRCBot_Loop',
            $this->object->getLoop());
    }

    /**
     * @covers {className}::{origMethodName}
     */
    public function testGetDebugger() {
        $this->assertInstanceOf('IRCBot_Debugger',
            $this->object->getDebugger());
    }

}

?>
