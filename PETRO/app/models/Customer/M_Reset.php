<?php

class M_Reset extends Model{
    protected $table = 'user_form';
    public function check($data){
        $Email = $data['Email'];
        $result = $this->connection();
        if($data['new']==$data['confirm']){
            $password = password_hash($data['new'],PASSWORD_BCRYPT);
            $sql="update $this->table set password ='".$password."' where Email = '".$Email."'";
            $query=$result->query($sql);
            return true;
        }
        else{
            return false;
        }
    }
}