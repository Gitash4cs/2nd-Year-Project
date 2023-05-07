<?php

class M_view_pumper extends Model{

    protected $table = 'pumper';

    public function pumper_list(){
        $result = $this->connection();
        
        $sql="select * from pumper";
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

    public function pump_remove($email){
        $result = $this->connection();
        
        $sql="UPDATE `total_user` SET `status` = 0 WHERE `total_user`.`email` = '$email';";
        $query = $result->query($sql);

        $sql="UPDATE `pumper` SET `status` = '0' WHERE `email` = '$email';";
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