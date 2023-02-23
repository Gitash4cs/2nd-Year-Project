<?php

class M_Orderv1 extends Model
{

    protected $table='ordert';

    public function orderv1($data){
    

        $id = $data['id'];
        $result=$this->connection();
        $sql = "select * from $this->table where id='".$id."'";
        $query=$result->query($sql);
        while($row = $query->fetch_array()){
        
            $vtype = $row['vtype'];
            $ftype = $row['ftype'];
            $id= $row['id'];
            $Oid= $row['Oid'];
          
        }

        $arr=array(
         
            'vtype'=>$vtype,
            'ftype'=>$ftype,
        
            
            'id'=>$id,
            'Oid'=>$Oid,
          
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
                $balance =$data ['balance'];
                $pmethod =$data ['pmethod'];

                echo $id;
                echo $vno;
                echo $vtype;
                echo $ftype;
                echo $amount;
                echo $pmethod;
    
                 $sql = "INSERT INTO $this->table1 (id,VMno,vtype,ftype,amount,balance,pmethod) VALUES('$id','$vno','$vtype','$ftype','$amount','$balancee','$pmethod')";
                 $query3 = $result1->query($sql); 
        
                 if($query3){
                   
                    return 1;
                 }else{
                    return 5;
                 }
              }
           }
          
          
    






