<?php
class M_complain_reply extends Model{
    protected $table='complain';

    public function complain($data){
        $result=$this->connection();
        $sql="select * from $this->table where com_id  = '$data'";
        $query=$result->query($sql);
        $row = $query->fetch_array();
        return $row;

    }
    public function register($data){
        $result=$this->connection();
        $response=$data['response'];
        $status=$data['status'];
        // date_default_timezone_set('Asia/Kolkata');
        // $date = date('Y-m-d');
        $fullid=$data['id'];
        $id=substr($fullid,3);
    
        if ($response){
            $sql="UPDATE $this->table SET response='".$response."',status='Replied' WHERE com_id ='".$id."'"; 
        }
        else{
            $sql="UPDATE $this->table SET status='".$status."' WHERE com_id ='".$id."'"; 
        }
        $query=$result->query($sql);
        
    }
}