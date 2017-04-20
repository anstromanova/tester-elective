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
    }
}

