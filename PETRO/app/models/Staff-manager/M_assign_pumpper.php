<?php

class M_assign_pumpper extends Model{

    protected $table = 'pumper_mashine';

    public function assign_pumpper(){
        $result = $this->connection();
        $sql="SELECT * from pumper_mashine";
        $sqlPumper="SELECT * from pumper where status = 'not assigned'";
        $query = $result->query($sql);
        $queryPumper = $result->query($sqlPumper);
        if($query->num_rows>0){
            $data=[
                'result'=>$query,
                'resultPumper'=>$queryPumper,
                'error'=>'',
            ];
            return $data;
        }
        else{
            return false;
        }
        
    }


    public function show_assign_pumpper($mashineId){
       
        $result = $this->connection();
        $select = " SELECT pumperID FROM pumper_mashine WHERE MashineID = '".$mashineId."' ;";
        $query = $result->query($select);
        $data = $query->fetch_array();
        $id= $data['pumperID'];
        if ($id == '0'){
            $id = "Not Assigned";
        }
        return  $id;
       
        
    }

    public function assign($data){
        $result = $this->connection();

        //remover pumper from mashine
        if($data['pumperid'] == "remove"){
            //update the pumper status
            $insertstatus = "Update pumper set status = 'not assigned' where id = (select pumperID from pumper_mashine where MashineID = '".$data['pumperMashine']."')"; 
            $query = $result->query($insertstatus);

            //remove the pumper_mashine table after assign the pumper
            $insert = "Update pumper_mashine set pumperID = '0' where MashineID = '".$data['pumperMashine']."'"; 
            $query = $result->query($insert);

        }
        else{
             //update the pumper_mashine table after assign the pumper
            $insert = "Update pumper_mashine set pumperID = '".$data['pumperid']."' where MashineID = '".$data['pumperMashine']."'"; 
            $query = $result->query($insert);

            //update the pumper status
            $insertstatus = "Update pumper set status = 'assigned' where id = '".$data['pumperid']."'"; 
            $query = $result->query($insertstatus);

        }

       
        
        return true;
      
        
    
    }  



    
}