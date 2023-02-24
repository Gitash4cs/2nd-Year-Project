<?php
    class M_View_pumper extends Model{
        protected $table = 'pumper';

        public function View_pumper($data){
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
}
?>