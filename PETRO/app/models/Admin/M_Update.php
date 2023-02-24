<?php

class M_Update extends Model{
    protected $table = 'fuel_availability';
    protected $table2 = 'fuel_stock';
    public function update_fuel(){
        $result = $this->connection();

        $sql1 = "select * from $this->table where fuel_id= 'O92'";
        $query1 = $result->query($sql1);
        $sql2 = "select * from $this->table where fuel_id= 'O95'";
        $query2 = $result->query($sql2);
        $sql3 = "select * from $this->table where fuel_id= 'SDL'";
        $query3 = $result->query($sql3);
        $sql4 = "select * from $this->table where fuel_id= 'ADL'";
        $query4 = $result->query($sql4);

        if($query1->num_rows>0){
            while($row = $query1->fetch_array()){
                $fuel_id = $row['fuel_id'];
                $fuel_type = $row['fuel_type'];
                $eligible_amount = $row['eligible_amount'];
                $remain_amount = $row['remain_amount'];
                $price = $row['price'];
            }
        }
        if($query2->num_rows>0){
            while($row = $query2->fetch_array()){
                $fuel_id2 = $row['fuel_id'];
                $fuel_type2 = $row['fuel_type'];
                $eligible_amount2 = $row['eligible_amount'];
                $remain_amount2 = $row['remain_amount'];
                $price2 = $row['price'];
            }
        }

        if($query3->num_rows>0){
            while($row = $query3->fetch_array()){
                $fuel_id3 = $row['fuel_id'];
                $fuel_type3 = $row['fuel_type'];
                $eligible_amount3 = $row['eligible_amount'];
                $remain_amount3 = $row['remain_amount'];
                $price3 = $row['price'];
            }
        }
        if($query4->num_rows>0){
            while($row = $query4->fetch_array()){
                $fuel_id4 = $row['fuel_id'];
                $fuel_type4 = $row['fuel_type'];
                $eligible_amount4 = $row['eligible_amount'];
                $remain_amount4 = $row['remain_amount'];
                $price4 = $row['price'];
            }
        }
            $data =[
                'fuel_id'=> $fuel_id,
                'fuel_type' => $fuel_type,
                'eligible_amount' => $eligible_amount,
                'remain_amount' => $remain_amount,
                'price' =>$price,
                'fuel_id2'=> $fuel_id2,
                'fuel_type2' => $fuel_type2,
                'eligible_amount2' => $eligible_amount2,
                'remain_amount2' => $remain_amount2,
                'price2' =>$price2,
                'fuel_id3'=> $fuel_id3,
                'fuel_type3' => $fuel_type3,
                'eligible_amount3' => $eligible_amount3,
                'remain_amount3' => $remain_amount3,
                'price3' =>$price3,
                'fuel_id4'=> $fuel_id4,
                'fuel_type4' => $fuel_type4,
                'eligible_amount4' => $eligible_amount4,
                'remain_amount4' => $remain_amount4,
                'price4' =>$price4,
                'loading'=>'1',
                'err'=>'',
            ];
            return $data;

    }

    public function add($data){
        $result=$this->connection();
        //$fuel_id = "O92";
        $fuel_type = $data['fuel_type'];
        $arrive_amount = $data['arrive_amount'];
        $eligible_amount = $data['eligible_amount'];
        $remain_amount = $arrive_amount-$eligible_amount;

        $sql1= "insert into $this->table2 (fuel_type,arrive_amount) values ('$fuel_type','$arrive_amount') ";
        $query1 = $result->query($sql1);
        //$sql2 = "insert into  $this->table (fuel_id,fuel_type) values ('$fuel_id','$fuel_type')";
        //$query2 = $result->query($sql2);
        $sql3 = "update  $this->table SET eligible_amount = eligible_amount + $eligible_amount WHERE  fuel_type = '$fuel_type'" ;
        $query3 = $result->query($sql3);
        $sql4 = "update  $this->table SET eligible_amount= 0 where eligible_amount IS NULL ";
        $query4 = $result->query($sql4);
        $sql5 = "update  $this->table SET remain_amount = remain_amount + $remain_amount WHERE  fuel_type = '$fuel_type'";
        $query5 = $result->query($sql5);

        if($sql1&&$sql3&&$sql4&&$sql5){

            return true;
        }
        else{
            echo "vvvvvvvvv";
        }
    }
}

   