<?php

class M_View_pumper_Profile extends Model
{
    protected $table = 'pumper';    // table for pumper

    public function profile($data){
    

        $id = $data;
        $result=$this->connection();
        $sql = "select * from $this->table where id='".$id."'";
        $query=$result->query($sql);
        while($row = $query->fetch_array()){
            $email= $row['email'];
            $fname = $row['first_name'];
            $lname = $row['last_name'];
            $NIC = $row['nic'];
            $phone = $row['phone_no'];
            $gender = $row['gender'];
            $id  = $row['id'];
        }

        $arr=array(
            'id' => $id,
            'email'=>$email,
            'fname'=>$fname,
            'lname'=>$lname,
            'NIC'=>$NIC,
            'phone'=> $phone,
            'gender'=> $gender,
            
        );
        return $arr;
              
            }
           


}
          
    






