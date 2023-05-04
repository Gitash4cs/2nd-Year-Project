<?php
    class M_Change_Price extends Model{
        protected $table1 = "fuel_availability";
        protected $table2 = "price_history";

        public function change_price($data){
            $result=$this->connection();
            $price =$data['price'];
            $fuel_type =$data['fuel_type'];

            $sql1 = "update $this->table1 SET price = $price WHERE fuel_type = '$fuel_type'";
            $query1 = $result->query($sql1);
           /* $sql2 = "update $this->table1 SET price = $octane_95 WHERE fuel_id = 'O95' AND fuel_type = 'octane 95'";
            $query2 = $result->query($sql2);
            $sql3 = "update $this->table1 SET price = $super_diesel WHERE fuel_id = 'SDL' AND fuel_type = 'super diesel'";
            $query3 = $result->query($sql3);
            $sql4 = "update $this->table1 SET price = $auto_diesel WHERE fuel_id = 'ADL' AND fuel_type = 'auto diesel'";
            $query4 = $result->query($sql4);*/
            $sql5 = "insert into $this->table2 (fuel_type,price) values ('$fuel_type','$price')";
            $query5 = $result->query($sql5);
            /*$sql6 = "insert into $this->table2 (fuel_type,price) values ('octane 95','$octane_95')";
            $query6 = $result->query($sql6);
            $sql7 = "insert into $this->table2 (fuel_type,price) values ('super diesel','$super_diesel')";
            $query7 = $result->query($sql7);
            $sql8 = "insert into $this->table2 (fuel_type,price) values ('auto_diesel','$auto_diesel')";
            $query8 = $result->query($sql8);*/


            if($sql1&&$sql5){
                return true;
            }
            else{
                echo "vvvvvvvvv";
            }
        }

        public function price_history($data){
            // $id = $_SESSION['id'];
             $result = $this->connection();
             $sql="select *from $this->table2 ORDER BY 'date' DESC";
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
?>