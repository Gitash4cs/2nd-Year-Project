<?php 
    class M_Analize extends Model{
        protected $table = 'fuel_stock';

        public function Analize($data){
            $result=$this->connection();

            $startDate = $data['startDate'];
            $finishDate = $data['finishDate'];

            $newstartDate = date("Ymd", strtotime($startDate));
            $newfinishDate = date("Ymd", strtotime($finishDate));

                $sql1 = "SELECT SUM(arrive_amount) AS TotalADL FROM $this->table where fuel_type = 'auto diesel' AND date_field BETWEEN $newstartDate AND $newfinishDate";
                $query1 = $result->query($sql1);
                $row = mysqli_fetch_assoc($query1);
                $total_adl = $row['TotalADL'];
                echo $total_adl;

                $sql2 = "SELECT SUM(arrive_amount) AS TotalSDL FROM $this->table where fuel_type = 'super diesel' AND date_field BETWEEN $newstartDate AND $newfinishDate";
                $query2 = $result->query($sql2);
                $row2 = mysqli_fetch_assoc($query2);
                $total_sdl = $row2['TotalSDL'];

                $sql3 = "SELECT SUM(arrive_amount) AS TotalO92 FROM $this->table where fuel_type = 'octane 92' AND date_field BETWEEN $newstartDate AND $newfinishDate";
                $query3 = $result->query($sql3);
                $row3 = mysqli_fetch_assoc($query3);
                $total_O92 = $row3['TotalO92'];

                $sql4 = "SELECT SUM(arrive_amount) AS TotalO95 FROM $this->table where fuel_type = 'octane 95' AND date_field BETWEEN $newstartDate AND $newfinishDate";
                $query4 = $result->query($sql4);
                $row4 = mysqli_fetch_assoc($query4);
                $total_O95 = $row4['TotalO95'];
            catch(PDOException $e){
                die("ERROR". $e->getMessage());
            }
        }
    }
?>