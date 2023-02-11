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

    public function update($data){
        $result1=$this->connection();
        $vno =$data ['update_vno'];
        $vtype =$data ['update_vtype'];
        $ftype =$data ['update_ftype'];
      


         $sql = "UPDATE $this->table1 (vno,vtype,ftype) VALUES('$vno','$vtype','$ftype')";
         $query3 = $result1->query($sql); 

         if($query3){
           
            return 1;
         }else{
            return 5;
         }
      }
   }
