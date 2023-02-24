<?php

class M_View_dis extends Model
{
    protected $table='distribution_manager';

    public function records(){
        $result=$this->connection();
        $sql="select *from $this->table where status = 1";
        $query=$result->query($sql);
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