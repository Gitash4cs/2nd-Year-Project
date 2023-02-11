<?php

class M_Mv extends Model
{
    protected $table = 'user_form';

    public function mv($data){
    

        $id = $data['id'];
    
        $result=$this->connection();
        $sql = "select * from $this->table where id='".$id."'";
        $query=$result->query($sql);
        while($row = $query->fetch_array()){
           
            $vno = $row['vno'];
            $vno1 = $row['vno1'];
            $vno2 = $row['vno2'];
            $sNo = $row['sNo'];
          
        }

        $arr=array(
       
            'vno'=> $vno,
            'vno1'=> $vno1,
            'vno2'=> $vno2,
            'sNo'=> $sNo,
         
        );
        return $arr;
              
            }
           
          }
          
    






