<?php

class M_Profileedit extends Model
{
    protected $table = 'user_form';

    public function profileedit($data){
    

        $id = $data['id'];
        $result=$this->connection();
        $sql = "select * from $this->table where id='".$id."'";
        $query=$result->query($sql);
        while($row = $query->fetch_array()){
            $email= $row['email'];
            $name = $row['name'];
            $NIC = $row['NIC'];
            $vno = $row['vno'];
            $vno1 = $row['vno1'];
            $vno2 = $row['vno2'];
            $sNo = $row['sNo'];
            $phone = $row['phone'];
            $password = $row['password'];
        }

        $arr=array(
            'id' => $id,
            'email'=>$email,
            'name'=>$name,
            'NIC'=>$NIC,
            'vno'=> $vno,
            'vno1'=> $vno1,
            'vno2'=> $vno2,
            'sNo'=> $sNo,
            'phone'=> $phone,
            'password'=> $password,
        );
        return $arr;
              
            }
           
          }
          
    






