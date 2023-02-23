<?php

class M_Ordermachine extends Model
{
    protected $table = 'user_form';
    protected $table1='porder';

    public function ordermachine($data){
    

        $id = $data['id'];
        $result=$this->connection();
        $sql = "select * from $this->table where id='".$id."'";
        $query=$result->query($sql);
        while($row = $query->fetch_array()){
            $sNo= $row['sNo'];
            $type = $row['type'];
            $ftype3 = $row['ftype3'];
            $id= $row['id'];
            $balance= $row['balance'];
          
        }

        $arr=array(
            'sNo' => $sNo,
            'type'=>$type,
            'ftype3'=>$ftype3,
        
            
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
          
          
    






