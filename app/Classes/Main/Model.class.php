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

        //Should I use query exception?
        // Important! You don't have to check the result of execute() (as it is often shown in low-quality tutorials). Such a condition will make no sense, as in case of error, a PDOException will be thrown and the script execution will be terminated, which means such a condition will never reach the else part.
        // Neither a try ... catch operator should be used, unless you have a specific scenario to handle the error, such as a transaction rollback shown below. Please see the article about error reporting for the details.
        
    }

    protected function makeQuery($query, $data = '')
    {
        $sql = ($query);
        $stmt = $this->connect()->prepare($sql);
        if($data){
            $stmt->execute($data);  
        } else{
            $stmt->execute();  
        }
    }
}


?>