<?php

namespace Classes\Main;

class AdminView extends AdminModel
{
    use Validator;

    protected $admin = array();

    public function __construct()
    {
        $admin = $this->getAdmin();
        $this->admin = (object)$admin;
    }

    // public function validate_admin_email($email)
    // {   
    //     $valid_email = $this->validateEmail($email);
    //     return $valid_email;

    // //    $result_email_validation = $this->validateEmail($email);
    // //    if ($result_email_validation == false){
    // //        return "Email is not valid";
    // //     } else {
            
    // //         return "Email is valid";
    // //     }
    // }

    public function getAdminId()
    {
        foreach($this->admin as $key => $value) {
            $firstadmin =  $admin[$key] = (object)$value;
        }
        return $firstadmin->admin_id;
    }

    public function verifyAdmin($email, $password)
    {
        foreach($this->admin as $key => $value) {
            $firstadmin =  $admin[$key] = (object)$value;
        }
        if ($firstadmin->admin_email == $email && $firstadmin->admin_password == $password){
            return true; //vodim ga na stranicu welcome
        } else {
            return false;
        }
    }
   
}