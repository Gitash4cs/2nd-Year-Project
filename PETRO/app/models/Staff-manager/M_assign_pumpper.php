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


    public function show_assign_pumpper($PumpID ){
       
        $result = $this->connection();
        $select = " SELECT pumperID FROM pumper_mashine WHERE PumpID  = '".$PumpID ."' ;";
        $query = $result->query($select);
        $data = $query->fetch_array();
        $id= $data['pumperID'];
        if ($id == '0'){
            $id = "Not Assigned";
        }
        return  $id;
       
        
    }

    public function pumpercount(){
       
        $result = $this->connection();
        $totalPumper="SELECT count(id) from pumper where status != '0'";
        
        $querytotalPumper = $result->query($totalPumper);
       

        $data = $querytotalPumper->fetch_array();
        $id= $data['count(id)'];
        if ($id == '0'){
            $id = "Not Hired";
        }
        return  $id;
       
        
    }

    public function activepumpercount(){
       
        $result = $this->connection();
        $activePumper="SELECT count(id) from pumper where status = 'assigned'";
        $queryactivePumper = $result->query($activePumper);
        $data = $queryactivePumper->fetch_array();
        $id= $data[0];
        
        return  $id;
       
        
    }

    public function assign($data){
        $result = $this->connection();

        //remover pumper from mashine
        if($data['pumperid'] == "remove"){
            //het pumper id, who assigned to the removeing mashine
            $pumper = "select pumperID from pumper_mashine where PumpID  = '".$data['pumperMashine']."'";
            $querypumper = $result->query($pumper);
            while($row = $querypumper->fetch_assoc()){
                $pumperid=$row['pumperID'];
            }
 
            //update the pumper status
            $insertstatus = "Update pumper set status = 'not assigned' where id = '".$pumperid."' "; 
            $query = $result->query($insertstatus);

            //remove the pumper_mashine table after assign the pumper
            $insert = "Update pumper_mashine set pumperID = '0' where PumpID  = '".$data['pumperMashine']."'"; 
            $query = $result->query($insert);

            //remove the assign date table after assign the pumper
            $insert = "Update pumper_mashine set date = '0' where PumpID  = '".$data['pumperMashine']."'"; 
            $query = $result->query($insert);

            //return pumper id
            return $pumperid;

        }
        else{
             //update the pumper_mashine table after assign the pumper
            $insert = "Update pumper_mashine set pumperID = '".$data['pumperid']."' where PumpID  = '".$data['pumperMashine']."'"; 
            $query = $result->query($insert);

            //update date of the pumper_mashine table after assign the pumper
            $insert = "Update pumper_mashine set date = CURRENT_DATE() where PumpID  = '".$data['pumperMashine']."'"; 
            $query = $result->query($insert);

            //update the pumper status
            $insertstatus = "Update pumper set status = 'assigned' where id = '".$data['pumperid']."'"; 
            $query = $result->query($insertstatus);

        }

       
        
        return 1;
      
        
    
    }  



    
}