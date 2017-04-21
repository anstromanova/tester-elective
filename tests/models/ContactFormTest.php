<?php
namespace anstromanova\testerelective\tests\models;

use anstromanova\testerelective\models\ContactForm;
use PHPUnit\Framework\TestCase;


class ContactFormTest extends TestCase
{
    public function testCreateObject()
    {
        $foo = new ContactForm();
        $this->assertObjectHasAttribute('name', $foo);
        $this->assertObjectHasAttribute('phone', $foo);
        $this->assertObjectHasAttribute('message', $foo);

        $foo->name = 'nastya';
        $foo->message = '7-777-77-77';
        $foo->phone = 'help';


        $this->assertTrue($foo->validate());

    }
}

