<?php

class M_home extends Model{
   

    public function getCount(){
        $result = $this->connection();
        $totalPumper="SELECT count(id) from pumper where status != '0'";
        $activePumper="SELECT count(id) from pumper where status = 'assigned'";
        $waitingPumper="SELECT count(id) from pumper where status = 'not assigned'";
        $totalCustomer="SELECT count(email) from registered_users where status = 1 AND role = 'customer'";
        $Viewed="SELECT count(com_id) AS COUNT1 from complain where status= 'Viewed'";
        $Pending="SELECT count(com_id) AS COUNT2 from complain where status= 'Pending'";
        $workingDiesel="SELECT count(MashineID) from pumper_mashine where pumperID != '0' and fuelType = 'Diesel'";
        $workingPetrol="SELECT count(MashineID) from pumper_mashine where pumperID != '0' and fuelType = 'Petrol'";

        $querytotalPumper = $result->query($totalPumper);
        $queryactivePumper = $result->query($activePumper);
        $querywaitingPumper = $result->query($waitingPumper);
        $querytotalCustomer = $result->query($totalCustomer);
        $queryViewed = $result->query($Viewed);
        $queryPending = $result->query($Pending);
        $queryDiesel = $result->query($workingDiesel);
        $queryPetrol = $result->query($workingPetrol);

        $data = $querytotalPumper->fetch_array();
        $data1= $data['count(id)'];
        $data = $queryactivePumper->fetch_array();
        $data2= $data[0];
        $data = $querywaitingPumper->fetch_array();
        $data3= $data[0];
        $data = $querytotalCustomer->fetch_array();
        $data4= $data[0];
        $data=$queryViewed->fetch_array();
        $data5=$data['COUNT1'];
        $data=$queryPending->fetch_array();
        $data6=$data['COUNT2'];
        $data = $queryDiesel->fetch_array();
        $data7= $data[0];
        $data = $queryPetrol->fetch_array();
        $data8= $data[0];


        $array=[
            'totalPumper'=>$data1,
            'activepumper'=>$data2,
            'waitingPumper'=>$data3,
            'totalCustomer'=>$data4,
            'view'=>$data5,
            'pending'=>$data6,
            'workingDiesel'=>$data7,
            'workingPetrol'=>$data8,

        ];
        
        return $array;
        


    }

    
    public function mashineColour($mashineID){
       
        $result = $this->connection();
        $pumper = "select pumperID from pumper_mashine where PumpID  = '".$mashineID."'";
        $queryactivePumper = $result->query($pumper);
        $data = $queryactivePumper->fetch_array();
        $id= $data['pumperID'];
        if($id == 0){
            $color = "#e3361c";
        }else{
            $color = "#35ca41";
        }
        
        return  $color;
        
    }

}