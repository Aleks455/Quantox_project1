<?php

namespace Classes\Main;

trait ValidatorTrait
{
    protected function checkIfValid($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        } else {
            return true;
        }
    }
}

