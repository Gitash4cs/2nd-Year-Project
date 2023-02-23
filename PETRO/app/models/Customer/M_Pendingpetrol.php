<?php

class M_Pendingpetrol extends Model
{
    protected $table = 'ordert';
    public function pendingpetrol($data){
        $id = $_SESSION['id'];
        $result = $this->connection();
        $sql="select *from $this->table where id = '".$id."'";
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