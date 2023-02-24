<?php

class M_Store extends Model
{
    protected $table = 'products';
    protected $table1 ='cart';

    public function store($data){
    

        $id = $data['id'];
        $result=$this->connection();
        $sql = "select * from $this->table";
        $query=$result->query($sql);

        $data=[
            'result'=>$query,
           
        ];
        return $data;
              
    }
    public function cart($data){
        $result=$this->connection();
        $p_id=$data['p_id'];
        $image = $data['product_image'];
        $product_name = $data['product_name'];
        $product_price = $data['product_price'];
        $cdate = $data['cdate'];
        $ndate = $data['ndate'];
        $quantity = $data['quantity'];
        $id = $_SESSION['id'];
        $sql = "INSERT INTO $this->table1 (user_id,p_id,name,price,quantity,cdate,ndate,image) VALUES('$id', '$p_id','$product_name','$product_price','$quantity','$cdate','$ndate','$image')";
        $query3 = $result->query($sql); 

        $sql = "select * from $this->table1";
        $query=$result->query($sql);

        $data=[
            'result1'=>$query,
           
        ];
        return $data;


       
    }
    public function update($data){
        $result=$this->connection();
        $quantity = $data['quantity'];
        $id = $_SESSION['id'];
        $sql="update $this->table1 set quantity ='".$quantity."' where user_id = '".$id."'";
        $query=$result->query($sql);

        return true;

    }
           
}
          
    






