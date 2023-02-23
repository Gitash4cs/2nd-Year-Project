<?php

class M_Orderticketvehicle extends Model
{
    protected $table = 'porder';
    protected $table1='ordert';

    public function orderticketvehicle($data){
    

        $id = $data['id'];
        $result=$this->connection();
        $sql = "select * from $this->table  where id='".$id."' ORDER BY Oid DESC LIMIT 1";
        $query=$result->query($sql);
        while($row = $query->fetch_array()){
            $Oid= $row['Oid'];
            $id= $row['id'];
            $email= $row['email'];
            $VMno= $row['VMno'];
            $vtype = $row['vtype'];
            $ftype = $row['ftype'];
            $amount= $row['amount'];
            $balance= $row['balance'];
            $pmethod= $row['pmethod'];
          
        }

        $arr=array(
            'email' => $email,
            'VMno' => $VMno,
            'vtype'=>$vtype,
            'ftype'=>$ftype,
            'amount'=>$amount,
            'pmethod'=>$pmethod,
            'Oid' => $Oid,
            
            'id'=>$id,
            'balance'=>$balance,
          
        );
        return $arr;
    }


    public function add($data){
        $result1=$this->connection();
        $id =$data ['id'];
        $Oid =$data ['Oid'];
        $email =$data ['email'];
        $vno =$data ['vno'];
        $vtype =$data ['vtype'];
        $ftype =$data ['ftype'];
        $amount =$data ['amount'];
        $price =$data ['price'];
        $pmethod =$data ['pmethod'];
        $balance =$data ['balance'];
        $nbalance =$data ['nbalance'];
        $cdate =$data ['cdate'];
        $ndate =$data ['ndate'];
        $status =$data ['status'];

         $sql = "INSERT INTO $this->table1 (Oid,id,email,VMno,vtype,ftype,amount,price,pmethod,balance,nbalance,cdate,ndate,status) VALUES('$Oid','$id','$email','$vno','$vtype','$ftype','$amount','$price','$pmethod','$balance','$nbalance','$cdate','$ndate','$status')";
         $query3 = $result1->query($sql); 

         if($query3){
            if($pmethod=="Card"){
                return 1;
            }
            else{
                return 3;
            }
           
            
         }else{
            return 5;
         }
      } 
            


           }
          
          
    






