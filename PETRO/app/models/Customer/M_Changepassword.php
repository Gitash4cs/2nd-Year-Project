<?php

class M_Changepassword extends Model
{
    protected $table = 'user_form';
    public function change($data){
        $id = $_SESSION['id'];
        $current = $data['current_password'];
        $new = $data['new_password'];
        $confirm = $data['confirm_password'];
        $result=$this->connection();
        $sql="select * from $this->table where id = '".$id."'";
        $query = $result->query($sql);
        while($row = $query->fetch_array()){
            $original_password=$row['password'];
            $verify=password_verify($current,$original_password);
            if(!$verify){
                $error="Existing Password is not match!";
                return $error;

            }
            else{
                if($new==$confirm){
                    $password = password_hash($new,PASSWORD_DEFAULT);
                    $sql="update $this->table set password ='".$password."' where id = '".$id."'";
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
}