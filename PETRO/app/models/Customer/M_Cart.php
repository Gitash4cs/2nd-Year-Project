<?php

class M_Cart extends Model
{
    protected $table = 'cart';
    protected $table1='porder';

 
 
        public function cart($data){
            $id = $_SESSION['id'];
            $result = $this->connection();
            $sql="select *from $this->table where user_id = '".$id."'";
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
              
            


              
           
          
          
    






