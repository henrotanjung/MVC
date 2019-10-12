<?php

class Model{
    private $insert;
    private $update;
    private $where;
    private $set;
    private $select;
    private $from;
    private $values;

    public function values($values){
        $this->values="$values";
        return $this;
    }

    public function insert($tblName){
        $this->insert="INSERT INTO $tblName";
        return this;
    }
    public function update($tblName){
        $this->update="UPDATE $tblName";
        return $this;
    }
    public function set($fieldsVals){
        $this->set="SET $fieldsVals";
        return $this;
    }    
    public function where($cond){
        $this->where="$cond";
        return $this;
    }
    public function select($fields){
        $this->select="SELECT $fields";
        return $this;
    }
    public function from($tblName){
        $this->from="FROM $tblName";
        return $this;
    }
}
?>
"update tblname->set(nama='henro',
    nama='henro')->where(id=id) 
    
    ";