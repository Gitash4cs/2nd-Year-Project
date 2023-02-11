<?php

class M_complain extends Model{

    protected $table = 'complain';

    public function edit_complain(){
        $result = $this->connection();
        $sql="select * from complain";
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