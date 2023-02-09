<?php

class M_assign_pumpper extends Model{

    protected $table = 'pumper';

    public function assign_pumpper(){
        $result = $this->connection();
        $sql="SELECT id from pumper";
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