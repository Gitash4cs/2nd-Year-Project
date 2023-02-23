<?php

class M_Home extends Model
{
    protected $table = 'products';
    protected $table1='fuel_availability';

    public function products($data){
    

            $id = $data['id'];
            $result=$this->connection();
            $sql = "select * from $this->table ORDER BY p_id DESC limit 4";
            $query=$result->query($sql);
    
            $data=[
                'result'=>$query,
               
            ];
            return $data;
                  
        }



  
}