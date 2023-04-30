<?php

class M_View_customer_Profile extends Model
{
    protected $table = 'user_form';    //thisara's table for customer

    public function profile($data){
    

        $id = $data;
        $result=$this->connection();
        $sql = "select * from $this->table where id='".$id."'";
        $query=$result->query($sql);
        while($row = $query->fetch_array()){
            $email= $row['email'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $NIC = $row['NIC'];
            $vno = $row['vno'];
            $vno1 = $row['vno1'];
            $vno2 = $row['vno2'];
            $sNo = $row['sNo'];
            $phone = $row['phone'];
            $balance = $row['balance'];
            $password = $row['password'];
        }

        $arr=array(
            'id' => $id,
            'email'=>$email,
            'fname'=>$fname,
            'lname'=>$lname,
            'NIC'=>$NIC,
            'vno'=> $vno,
            'vno1'=> $vno1,
            'vno2'=> $vno2,
            'sNo'=> $sNo,
            'phone'=> $phone,
            'balance'=> $balance,
            'password'=> $password,
        );
        return $arr;
              
            }
           


}
          
    






