<?php

class M_pumper_registration extends Model{

    protected $table = 'pumper';

    
    public function submit_record($data){
        $result = $this->connection();
        
        //check both password are match
        if($data['password'] != $data['confirmPassword']){
            return false;
            
        }else{
            $hash = password_hash($data['password'],PASSWORD_DEFAULT);
            //update user record given data to the data base table
            $insert = "INSERT INTO pumper (id, first_name, last_name, nic, phone_no, gender, email, password) VALUES('".$data['id']."','".$data['first_name']."','".$data['last_name']."','".$data['nic']."','".$data['phone_no']."','".$data['gender']."','".$data['email']."','".$hash."')";
            //inster to total user table
            $insertlogin = "INSERT INTO total_user (email , password, role, status) VALUES('".$data['email']."','".$hash."','pumper',1)";
            $query = $result->query($insert);
            $query = $result->query($insertlogin);
            //redirect to the staff manager's page
            return true;
            
        };
        
    
    }
    
    public function user_exist($email){
        $result = $this->connection();
        //select records from table which is given email amd password
        $select = " SELECT * FROM pumper WHERE email = '$email' ";
        $query = $result->query($select);
        
        
        //check the given user account already has or not
        if(mysqli_num_rows($query) > 0){
            true;
        }
    }
    
}