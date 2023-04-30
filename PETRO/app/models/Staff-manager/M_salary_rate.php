<?php

class M_salary_rate extends Model{

    protected $table = 'salary_rate';



    
    public function currentRate(){
        $result = $this->connection();
        
        $sql="select * from salary_rate ORDER BY KeyNum DESC LIMIT 1";
        $query = $result->query($sql);
        $data = $query->fetch_array();
        return $data;
    }
    
    public function submit_record($data){
        $result = $this->connection();
        $insert = "Insert into salary_rate set Basic = '".$data['Basic']."', HRA = '".$data['HRA']."', Daily_allowances = '".$data['Daily_allowances']."', Provident_fund = '".$data['Provident_fund']."', OT ='".$data['OT']."' ";
        $query = $result->query($insert);
    }
    
}