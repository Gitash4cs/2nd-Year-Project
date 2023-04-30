<?php

class M_view_customer extends Model{

    protected $table = 'user_form';

    public function customer_list(){
        $result = $this->connection();
        
        $sql="select * from user_form";
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