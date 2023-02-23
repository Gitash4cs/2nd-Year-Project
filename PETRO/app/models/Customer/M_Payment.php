<?php

class M_Payment extends Model
{
    protected $table = 'porder';

    public function payment($data){
    

    

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
         
    } 