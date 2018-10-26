<?php
/**
 * Created by PhpStorm.
 * User: mahdy
 * Date: 10/26/18
 * Time: 1:29 PM
 */

class ValidatePassword
{
    const MIN_LENGTH = 6;
    const MAX_LENGTH = 20;

    public function validLength($password)
    {
        $passwordLength = strlen($password);
        return $passwordLength >= self::MIN_LENGTH && $passwordLength <= self::MAX_LENGTH;
    }
}