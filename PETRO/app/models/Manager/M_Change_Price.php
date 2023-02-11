<?php
    class M_Change_Price extends Model{
        protected $table1 = "fuel_availability";

        public function change_price($data){
            $result=$this->connection();
            $octane_92 =$data['octane_92'];
            $octane_95 =$data['octane_95'];
            $super_diesel =$data['super_diesel'];
            $auto_diesel =$data['auto_diesel'];

            $sql1 = "update $this->table1 SET price = $octane_92 WHERE fuel_id = 'O92' AND fuel_type = 'octane 92'";
            $query1 = $result->query($sql1);
            $sql2 = "update $this->table1 SET price = $octane_95 WHERE fuel_id = 'O95' AND fuel_type = 'octane 95'";
            $query1 = $result->query($sql2);
            $sql3 = "update $this->table1 SET price = $super_diesel WHERE fuel_id = 'SDL' AND fuel_type = 'super diesel'";
            $query1 = $result->query($sql3);
            $sql4 = "update $this->table1 SET price = $auto_diesel WHERE fuel_id = 'ADL' AND fuel_type = 'auto diesel'";
            $query1 = $result->query($sql4);

            if($sql1&&$sql2&&$sql3&&$sql4){
                return true;
            }
            else{
                echo "vvvvvvvvv";
            }
        }
    }
?>