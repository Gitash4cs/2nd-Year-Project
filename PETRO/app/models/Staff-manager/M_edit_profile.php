<?php

class M_edit_profile extends Model{

    protected $table = 'customer_manager';

    public function edit_manager($data){
        $result = $this->connection();
        $manager_ID = $data['manager_ID'];
        $sql="select * from $this->table where customer_manager_id='".$manager_ID."'";
        $query = $result->query($sql);
        if($query->num_rows>0){
            while($row = $query->fetch_array()){
                $id= $row['customer_manager_id'];
                $first_name = $row['First_name'];
                $last_name = $row['Last_name'];
                $nic = $row['NIC'];
                $gender = $row['gender'];
                $email  = $row['email'];
                $phone_no = $row['phone_number'];
               
            }
            $arr =array(
                'id'=> $id,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'nic' => $nic,
                'gender'=> $gender,
                'email'=>$email,
                'phone_no'=> $phone_no,
                'loading'=>'1',
                'err'=>'',
            );
            return $arr;

        }
        else{
            return false;
        }
    }

    
    public function submit_edit($data){
        $result = $this->connection();
        
        //check both password are match
        if($data['password'] != $data['editRetype_password']){
            return false;
            
        }else{
            //update user record given data to the data base table
            if(!empty($data['password'])){
                $insert = "Update customer_manager set First_name = '".$data['first_name']."', Last_name = '".$data['last_name']."', NIC = '".$data['nic']."', phone_number = '".$data['phone_no']."', gender ='".$data['gender']."', password = '".$data['password']."' where customer_manager_id = '".$_SESSION['manager_ID']."'";
            }else{
                $insert = "Update customer_manager set First_name = '".$data['first_name']."', Last_name = '".$data['last_name']."', NIC = '".$data['nic']."', phone_number = '".$data['phone_no']."', gender = '".$data['gender']."' where customer_manager_id = '".$_SESSION['manager_ID']."'";
            }
            $query = $result->query($insert);
            //redirect to the staff manager's page
            return true;
            
        };
        
    
    }    
    
}