<?php

class M_Ordervehicle1 extends Model
{
    protected $table = 'user_form';
    protected $table1='porder';


    public function ordervehicle1($data){
    

        $id = $data['id'];
        $result=$this->connection();
        $sql = "select * from $this->table where id='".$id."'";
        $query=$result->query($sql);
        while($row = $query->fetch_array()){
            $vno= $row['vno'];
            $email= $row['email'];
            $vtype = $row['vtype'];
            $ftype = $row['ftype'];
            $id= $row['id'];
            $balance= $row['balance'];
          
        }

        $arr=array(
            'vno' => $vno,
            'vtype'=>$vtype,
            'ftype'=>$ftype,
            'email'=>$email,
        
            
            'id'=>$id,
            'balance'=>$balance,
          
        );
        return $arr;
    }
        
    

    
            

    public function add($data){
                $result1=$this->connection();
                $id =$data ['id'];
                $email =$data ['email'];
                $vno =$data ['vno'];
                $vtype =$data ['vtype'];
                $ftype =$data ['ftype'];
              
                $amount =$data ['amount'];
                $balance =$data ['balance'];
                $pmethod =$data ['pmethod'];

                echo $id;
                echo $vno;
                echo $vtype;
                echo $ftype;
                echo $amount;
                echo $pmethod;
    
                 $sql = "INSERT INTO $this->table1 (id,email,VMno,vtype,ftype,amount,balance,pmethod) VALUES('$id','$email','$vno','$vtype','$ftype','$amount','$balance','$pmethod')";
                 $query3 = $result1->query($sql); 
        
                 if($query3){
                   
                    return 1;
                 }else{
                    return 5;
                 }
              }
           }
          
          
    






