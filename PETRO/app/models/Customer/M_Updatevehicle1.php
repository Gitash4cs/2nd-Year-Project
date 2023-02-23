<?php 
class M_Updatevehicle1 extends Model
{
    protected $table = 'user_form';


    public function updatevehicle1($data){
    

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
        $id = $data['id'];
    
        $vno = $data['vno'];
        $vtype = $data['vtype'];
        $ftype = $data['ftype'];
   

        $sql1= "update $this->table (vno,vtype,fype) values ('$vno','$vtype','$ftype') where id='".$id."'";
        $query1 = $result->query($sql1);


        if($sql1){

            return true;
        }
        else{
            echo "vvvvvvvvv";
        }
    }
   }
