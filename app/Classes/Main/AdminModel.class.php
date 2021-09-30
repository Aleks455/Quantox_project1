<?php

namespace Classes\Main;

class AdminModel extends Model
{  
    protected function getAdmin()
    {
        $query = "SELECT * FROM `administrator`";
        $query_result = $this->makeSelectQuery($query);
        return $query_result;
    }

}