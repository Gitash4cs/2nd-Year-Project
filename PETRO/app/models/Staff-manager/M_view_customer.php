<?php

class M_view_customer extends Model{

    protected $table = 'customer';

    public function customer_list(){
        $result = $this->connection();
        
        $sql="select * from customer";
        $query = $result->query($sql);
        if($query->num_rows>0){
            $data=[
                'result'=>$query,
                'error'=>'',
            ];
            return $data;
        }
        else{
            return false;
        }
    }
    
}