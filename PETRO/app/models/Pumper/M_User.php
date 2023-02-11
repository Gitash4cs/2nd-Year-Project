<?php


class M_User extends Model
{
    protected $table = 'ordert';
    protected $table1 = 'fuel_availability';
    public function load(){
        $result = $this->connection();
        $sql = "select *from $this->table1 where fuel_type='auto diesel'";
        $query = $result->query($sql);
        while($row = $query->fetch_array()){
            $price_auto = $row['price'];
            $remain_auto = $row['eligible_amount'];
        }
        $sql = "select *from $this->table1 where fuel_type='octane 92'";
        $query = $result->query($sql);
        while($row = $query->fetch_array()){
            $price_92 = $row['price'];
            $remain_92 = $row['eligible_amount'];
        }
        $sql = "select *from $this->table1 where fuel_type='octane 95'";
        $query = $result->query($sql);
        while($row = $query->fetch_array()){
            $price_95 = $row['price'];
            $remain_95 = $row['eligible_amount'];
        }
        $sql = "select *from $this->table1 where fuel_type='super diesel'";
        $query = $result->query($sql);
        while($row = $query->fetch_array()){
            $price_super = $row['price'];
            $remain_super = $row['eligible_amount'];
        }

        $data = [
            'price_auto' => $price_auto,
            'remain_92' => $remain_92,
            'remain_auto' => $remain_auto,
            'price_92' => $price_92,
            'price_95' => $price_95,
            'remain_95' => $remain_95,
            'price_super' => $price_super,
            'remain_super' => $remain_super,



        ];
        return $data;

    }
    public function order_verify($data){
        $order_id='';
        $check_id = $data['order_no'];
        $result=$this->connection();
        $sql="select * from $this->table where Oid = '".$check_id."'";
        $check= $result->query($sql);
        while($row = $check->fetch_assoc())
            $order_id = $row['Oid'];
        if($order_id===$check_id){
                $_SESSION['order_id']=$order_id;
                return true;
        }
        else{
                return false;
        }

    }
}