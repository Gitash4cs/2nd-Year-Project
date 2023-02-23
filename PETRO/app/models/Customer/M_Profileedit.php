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
            $fname = $row['fname'];
            $lname = $row['lname'];
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
            'fname'=>$fname,
            'lname'=>$lname,
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



            
    public function add($data){
     
        $id = $_SESSION['id'];
        $result=$this->connection();
    
        $fname = $data['fname'];
        $lname = $data['lname'];
        $email = $data['email'];
        $NIC = $data['NIC'];
      
   
       
        $sql1= "UPDATE $this->table SET fname='$fname' WHERE id='".$id."'";
        $query1 = $result->query($sql1);


        if($query1){

            return true;
        }
        else{
            echo "vvvvvvvvv";
        }
    }
           
          }
          
    






