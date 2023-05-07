<?php

class M_view_customer extends Model{

    protected $table = 'user_form';

    public function customer_list(){
        $result = $this->connection();
        $sql="select * from user_form inner join total_user on user_form.email = total_user.email";
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


    public function cust_remove($email){
        $result = $this->connection();
        
        $sql="UPDATE `total_user` SET `status` = '0' WHERE `total_user`.`email` = '$email';";

        $sql="UPDATE `total_user` SET `status` = '0' WHERE `total_user`.`email` = '$email';";
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