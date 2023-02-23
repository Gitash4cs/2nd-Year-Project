<?php 
class M_Addvehicle1 extends Model
{
    protected $table = 'user_form';


    public function addvehicle1($data){
    

        $id = $data['id'];
        $result=$this->connection();
        $sql = "select * from $this->table  where id='".$id."'";
        $query=$result->query($sql);
        while($row = $query->fetch_array()){
    
            $vno= $row['vno'];
            $vtype = $row['vtype'];
            $ftype = $row['ftype'];
            
          
        }

        $arr=array(
            'vno' => $vno,
            'vtype'=>$vtype,
            'ftype'=>$ftype,
          
        );
        return $arr;
    }

    public function add($data){
        $result=$this->connection();
        $id = $_SESSION['id'];
    
        $vno = $data['vno'];
        $vtype = $data['vtype'];
        $ftype = $data['ftype'];
   

        $sql1= "UPDATE $this->table SET vno='$vno' WHERE id='".$id."'";
        $query1 = $result->query($sql1);
        $sql2= "UPDATE $this->table SET vtype='$vtype' WHERE id='".$id."'";
        $query2 = $result->query($sql2);
        $sql3= "UPDATE $this->table SET ftype='$ftype' WHERE id='".$id."'";
        $query3 = $result->query($sql3);


        if($query1|| $query2 || $query3){

            return true;
        }
        else{
            echo "vvvvvvvvv";
        }
    }
   }
