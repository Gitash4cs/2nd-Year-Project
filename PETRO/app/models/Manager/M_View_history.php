<?php
    class M_View_history extends Model{
        protected $table = 'fuel_stock';

        public function View_history($data){
           // $id = $_SESSION['id'];
            $result = $this->connection();
            $sql="select *from $this->table";
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

        public function get_Date($data){
            $result = $this->connection();
            $startDate =$data['startDate'];
            $finishDate =$data['finishDate'];
        }
}
?>
