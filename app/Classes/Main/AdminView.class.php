<?php

namespace Classes\Main;

class AdminView extends AdminModel
{
    use ValidatorTrait;

    protected $admin = array();

    public function __construct()
    {
        $admin = $this->getAdmin();
        $this->admin = (object)$admin;
    }

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
            return true;
        } else {
            return false;
        }
    }
}