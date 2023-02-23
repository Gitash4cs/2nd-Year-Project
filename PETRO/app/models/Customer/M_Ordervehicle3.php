<?php

class M_Ordervehicle3 extends Model
{
    protected $table = 'user_form';
    protected $table1='porder';

    public function ordervehicle3($data){
    

        $id = $data['id'];
        $result=$this->connection();
        $sql = "select * from $this->table where id='".$id."'";
        $query=$result->query($sql);
        while($row = $query->fetch_array()){
            $vno2= $row['vno2'];
            $vtype2 = $row['vtype2'];
            $ftype2 = $row['ftype2'];
            $balance = $row['balance'];
            $id= $row['id'];
            
          
        }

        $arr=array(
            'vno2' => $vno2,
            'vtype2'=>$vtype2,
            'ftype2'=>$ftype2,
            
            
            'id'=>$id,
            'balance'=>$balance,
          
        );
        return $arr;
    }
              
            

    public function add($data){
                $result1=$this->connection();
                $id =$data ['id'];
                $vno =$data ['vno'];
                $vtype =$data ['vtype'];
                $ftype =$data ['ftype'];
                $balance =$data ['balance'];
                $amount =$data ['amount'];
                $pmethod =$data ['pmethod'];

                echo $id;
                echo $vno;
                echo $vtype;
                echo $ftype;
                echo $amount;
                echo $pmethod;
    
                 $sql = "INSERT INTO $this->table1 (id,VMno,vtype,ftype,amount,balance,pmethod) VALUES('$id','$vno','$vtype','$ftype','$amount','$balance','$pmethod')";
                 $query3 = $result1->query($sql); 
        
                 if($query3){
                   
                    return 1;
                 }else{
                    return 5;
                 }
              }
           }
          
          
    






