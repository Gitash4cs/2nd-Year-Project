<?php
    class M_Add_report extends Model{
        protected $table1 = "daily_report";
        protected $table2 = "complete_order";
        protected $table3 = "distribution_manager";

        public function Add_report($data){
            $result=$this->connection();

            $date =  $data['date'];
            $reduced92 = $data['reduced92'];
            $reduced95 = $data['reduced95'];
            $reducedsdl = $data['reducedsdl'];
            $reducedadl = $data['reducedadl'];
            $newDate = date("Ymd", strtotime($date));

            $sql1 = "SELECT SUM(pumped_liters) AS TotalO92 FROM $this->table2 where fuel_type = 'octane 92' AND DATE(date_field) = $date ";
            $sql2 = "SELECT SUM(pumped_liters) AS TotalO95 FROM $this->table2 where fuel_type = 'octane 95' AND DATE(date_field) = $date ";
            $sql3 = "SELECT SUM(pumped_liters) AS TotalSDL FROM $this->table2 where fuel_type = 'super diesel' AND DATE(date_field) = $date ";
            $sql4 = "SELECT SUM(pumped_liters) AS TotalADL FROM $this->table2 where fuel_type = 'auto diesel' AND DATE(date_field) = $date ";

            $query1 = $result->query($sql1);
            $query2 = $result->query($sql2);
            $query3 = $result->query($sql3);
            $query4 = $result->query($sql4);

            $row1 = mysqli_fetch_assoc($query1);
            $total_O92 = $row1['TotalO92'];
            $row2 = mysqli_fetch_assoc($query2);
            $total_O95 = $row2['TotalO95'];
            $row3 = mysqli_fetch_assoc($query3);
            $total_SDL = $row3['TotalSDL'];
            $row4 = mysqli_fetch_assoc($query4);
            $total_ADL = $row4['TotalADL'];

            $diff92 = $reduced92 - $total_O92;
            $diff95 = $reduced95 - $total_O95;
            $diffsdl = $reducedsdl - $total_SDL;
            $diffadl = $reducedadl - $total_ADL;

            $sql = "insert into $this->table1 values ('$date','$reduced92','$total_O92','$diff92','$reduced95','$total_O95','$diff95',
                    '$reducedsdl','$total_SDL','$diffsdl','$reducedadl','$total_ADL','$diffadl')";

            $query = $result->query($sql);

            echo $date;

            if($sql1&&$sql2&&$sql3&&$sql4&&$sql){

                return true;
                
            }
            else{
                echo "vvvvvvvvv";
            }

        }
    }
?>