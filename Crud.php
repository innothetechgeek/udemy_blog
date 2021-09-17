<?php

include_once "DbConfig.php";

class Crud{

    private $conn;

    public function __construct(){

        $this->conn = getdbconnection();    

    }

    public function create($data_array, $table){

        $columns = implode(',', array_keys($data_array)); 
        $place_holders = ':'.implode(',:', array_keys($data_array));

        $sql  = "INSERT INTO $table ($columns) VALUES ($place_holders)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data_array);
        return $this->conn->lastInsertId();             

    }

    public function read($sql_query){


        $sql_place_holders = preg_replace(["/ = '.*?'/",'/ = [0-9]+/'], '=?', $sql_query);
        

        $stmt = $this->conn->prepare($sql_query);

        preg_match_all("/'(.*?)'|(\d+)/",    $sql_query,$data_array,PREG_PATTERN_ORDER);
        $data_array  = array_map('trim', $data_array[0],array("'", "'"));

        $stmt->execute($data_array);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function update($data_array,$table,$id,$primary_column=''){

       
        $place_holders = '';
        foreach($data_array as $field => $value){

            $place_holders .=  "$field=:$field,";

        }

        $place_holders =  trim($place_holders,',');

        $primary_column  = $primary_column ? $primary_column: 'id';

        $sql_query = "Update $table SET $place_holders WHERE $primary_column = $id";
        
        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute($data_array);



    }

    public function delete($sql_query){

        $stmt = $this->conn->prepare($sql_query);
        $stmt->execute();
    
    }









}