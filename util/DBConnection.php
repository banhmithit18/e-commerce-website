<?php
    function OpenConnection(){
        try{
            $serverName = "(local)";
            $connectionInfo = array("Database"=>"demo","UID"=>"sa","PWD"=>"123456"); // remember to change database name
            $conn = sqlsrv_connect($serverName, $connectionInfo);
            if ($conn)
            {
                //echo "Connection established";
                return $conn;
            }
            else
            {
                echo "Connection could not be established.</br>";
                die(print_r(sqlsrv_errors(),true));
            }

        }catch(Exception $e)
        {
            echo "Error";
        }return null;
    }
function Create($item ){
    try{
        $conn = OpenConnection();
        $tableName = get_class($item); // get class name
        $query = "INSERT INTO $tableName (";
        $fields  = get_object_vars($item);
        $class = new ReflectionClass($tableName);
        $properties = $class->getProperties(); // get class properties
        foreach ($properties as $property) {
            // skip inherited properties
            if ($property->getDeclaringClass()->getName() !== $class->getName()) {
              continue;
            }
    
            $classProperties[] = $property->getName();
          }
        
        foreach($classProperties as $columnitem)
        {
            $query .= $columnitem .",";

        }
        $query = substr($query,0,strlen($query)-1);
        $query .= ") VALUES(";
        foreach($fields as $fileditem)
        {
            if (is_string($fileditem))
            {
                $query .= "'$fileditem'".",";
            }
            else
            {
                $query .= $fileditem.",";
            }
        }
        $query = substr($query,0, strlen($query) -1);
        $query .= ")";
        $check = sqlsrv_query($conn,$query);
        if ($check == 0)
        {
            echo "that bai";
        }
        else{
            echo "thanh cong";
        }

    }
    catch (Exception $e)
    {
        echo("Error");
    }
}

 

   
 ?>