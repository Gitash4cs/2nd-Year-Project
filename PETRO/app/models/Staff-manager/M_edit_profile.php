<?php

class M_edit_profile extends Model{

    protected $table = 'manager';

    public function edit_manager($data){
        $result = $this->connection();
        $manager_ID = $data['manager_ID'];
        $sql="select * from $this->table where id='".$manager_ID."'";
        $query = $result->query($sql);
        if($query->num_rows>0){
            while($row = $query->fetch_array()){
                $id= $row['id'];
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $nic = $row['nic'];
                $type = $row['type'];
                $gender = $row['gender'];
                $email  = $row['email'];
                $phone_no = $row['phone_no'];
                $image  = $row['image'];
            }
            $arr =array(
                'id'=> $id,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'nic' => $nic,
                'type' =>$type,
                'gender'=> $gender,
                'email'=>$email,
                'phone_no'=> $phone_no,
                'image'=>$image,
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
                $insert = "Update manager set first_name = '".$data['first_name']."', last_name = '".$data['last_name']."', nic = '".$data['nic']."', phone_no = '".$data['phone_no']."', gender ='".$data['gender']."', password = '".$data['password']."' where id = '".$_SESSION['manager_ID']."'";
            }else{
                $insert = "Update manager set first_name = '".$data['first_name']."', last_name = '".$data['last_name']."', nic = '".$data['nic']."', phone_no = '".$data['phone_no']."', gender = '".$data['gender']."' where id = '".$_SESSION['manager_ID']."'";
            }
            $query = $result->query($insert);
            //redirect to the staff manager's page
            return true;
            
        };
        
    
    }    
    
}