<?php

class M_Ordervehicle2 extends Model
{
    protected $table = 'user_form';
    protected $table1='porder';

    public function ordervehicle2($data){
    

        $id = $data['id'];
        $result=$this->connection();
        $sql = "select * from $this->table where id='".$id."'";
        $query=$result->query($sql);
        while($row = $query->fetch_array()){
            $vno1= $row['vno1'];
            $vtype1 = $row['vtype1'];
            $ftype1 = $row['ftype1'];
            $id= $row['id'];
            $balance= $row['balance'];
          
        }

        $arr=array(
            'vno1' => $vno1,
            'vtype1'=>$vtype1,
            'ftype1'=>$ftype1,
            
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
          
          
    






