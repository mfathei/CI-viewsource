<?php
/**
 * Created by PhpStorm.
 * User: mahdy
 * Date: 10/26/18
 * Time: 1:18 PM
 */

use PHPUnit\Framework\TestCase;

class ValidatePasswordTest extends TestCase
{
    public function testValidLength()
    {
        $validPass = new ValidatePassword();
        $this->assertFalse($validPass->validLength('1234'));
    }
}