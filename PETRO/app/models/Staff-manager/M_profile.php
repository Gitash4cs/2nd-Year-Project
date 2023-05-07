<?php

class M_profile extends Model{

    protected $table = 'customer_manager';

    public function view_manager($data){
        $result = $this->connection();
        $manager_ID = $data['manager_ID'];
        $sql="select * from $this->table where customer_manager_id ='".$manager_ID."'";
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
}