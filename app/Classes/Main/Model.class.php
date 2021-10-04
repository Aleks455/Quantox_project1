<?php

namespace Classes\Main;

class Model extends Dbh
{
    protected function makeSelectQuery($query, $param = "")
    {
        $sql = ($query);
        $stmt = $this->connect()->prepare($sql);
        if($param){
            $stmt->execute($param);  
        } else{
            $stmt->execute();  
        }
        $result = $stmt->fetchAll(); 
        return $result;
    }

    protected function makeQuery($query, $data = '')
    {
        $sql = ($query);
        $stmt = $this->connect()->prepare($sql);
        if($data){
            $stmt->execute($data);  
        } else {
            $stmt->execute();  
        }
    }
}
