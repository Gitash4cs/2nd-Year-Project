<?php

class M_Change_password extends Model
{
    protected $table = 'pumper';
    public function change($data){
        $result=$this->connection();
        $pump_id = $_SESSION['pumper_id'];
        $current = $data['current_password'];
        $new = $data['new_password'];
        $confirm = $data['confirm_password'];
        
        $sql="select * from $this->table where id = '".$pump_id."'";
        $query = $result->query($sql);
        while($row = $query->fetch_array()){
            $original_password=$row['password'];
        }
            $verify=password_verify($current,$original_password);
            if(!$verify){
                $error="Existing Password is not match!";
                return $error;

            }
            else{
                if($new==$confirm){
                    $password = password_hash($new,PASSWORD_DEFAULT);
                    $sql="update $this->table set password ='".$password."' where id = '".$pump_id."'";
                    $query=$result->query($sql);
                    $error="Successfully Changed the password";
                    return $error;
                }
                else{
                    $error="Password didn't matched!";
                    return $error;
                }
            }

    }
}