<?php

namespace Classes\Main;

trait Validator
{

    protected function validateEmail($email){

        $validEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        $validEmail = filter_var($validEmail, FILTER_VALIDATE_EMAIL);

        // if (!filter_var($validEmail, FILTER_VALIDATE_EMAIL)){
        //     return false;
        // } else {
        return $validEmail;
    // }
    }



    public function getEmail($email) {
        return $email;
    }

    // protected function setValidEmail() {
    //     if ($this->validateEmail()) {
    //         $this->validEmail = $this->validateEmail();
    //     }
    // }

  

    // public function getPassword(){

    // }
}
