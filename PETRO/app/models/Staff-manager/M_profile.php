<?php

class M_profile extends Model{

    protected $table = 'manager';

    public function view_manager($data){
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
}