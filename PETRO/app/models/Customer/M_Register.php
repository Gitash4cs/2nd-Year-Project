<?php

class M_Register extends Model
{
    protected $table='user_form';

   protected $table1 = 'total_user';
    public function register($data){

        $fname = $data ['fname'];
        $lname = $data ['lname'];
        $NIC =$data['NIC'];
        $email =$data['email'];
        $phone =$data ['phone'];
        $vno =$data ['vno'];
        $vtype =$data ['vtype'];
        $ftype =$data ['ftype'];
        
        $sNo =$data ['sNo'];
        $type =$data ['type'];
        $ftype2 =$data ['ftype2'];
        
        $pass =$data ['pass'];
        $cpass =$data ['cpass'];


     $result = $this->connection();
    $select =  "SELECT * FROM $this->table WHERE email = '".$email."' OR NIC='".$NIC."' OR phone='".$phone."'";
    $query1 = $result->query($select);
    
    $select2 =  "SELECT * FROM $this->table  WHERE vno = '".$vno."' OR vno1='".$vno."' OR vno2='".$vno."'";
    $query2 = $result->query($select2);
    

    if($query1->num_rows>0){
        return 2;

   }
   if($query2->num_rows>0){
    
      return 3;
    }
    else{
      if($pass != $cpass){
        return 4;
      }
      else{
         $password=password_hash($pass,PASSWORD_BCRYPT);
         $insert = "INSERT INTO $this->table (fname,lname,NIC, email,phone,vno,vtype,ftype,sNo,type,ftype2, password) VALUES('$fname','$lname','$NIC', '$email','$phone','$vno','$vtype','$ftype','$sNo','$type','$ftype2', '$password')";
         $query3 = $result->query($insert); 
         $sql = "insert into $this->table1 (email,password,role,status)values('$email','$password','customer',1)";
         $connect = $result->query($sql);

         if($query3){
           
            return 1;
         }else{
            return 5;
         }
      }
   }
    }
}