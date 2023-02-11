<?php

class M_Complaint extends Model
{
    protected $table = 'user_form';
    protected $table1='comp';
    protected $table2 = 'ordert';
    
    public function complaint($data){
    

        $id = $data['id'];
        $result=$this->connection();
        $sql = "select * from $this->table where id='".$id."'";
        $query=$result->query($sql);
        while($row = $query->fetch_array()){
            $id= $row['id'];
            $email = $row['email'];
           
          
        }

        $arr=array(
            'id' => $id,
            'email'=>$email,
          
          
        );
        return $arr;
    }
              
            


    public function add($data){
        $result1=$this->connection();
        $id =$data ['id'];
        $email =$data ['email'];
        $Oid =$data ['Oid'];
        $complaint =$data ['complaint'];
      
  

        echo $id;
        echo $vno;
        echo $vtype;
        echo $ftype;
        echo $amount;
        echo $pmethod;

         $sql = "INSERT INTO $this->table1 (id,email,Oid,complaint) VALUES('$id','$email','$Oid','$complaint')";
         $query3 = $result1->query($sql); 

         if($query3){
           
            return 1;
         }else{
            return 5;
         }
      }
           }
          
          
    






