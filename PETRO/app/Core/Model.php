<?php

class Model extends Database
{
  protected $table = 'fuel_pumper';
    public function connection(){
      $result=$this->connect();
      return $result;
    }
    public function login_pumper($data){
        $Email=$data['Email'];
        $Password = $data['password'];
        $sql="select *from $this->table where Email='".$Email."' AND status=1";
        $result=$this->connect()->query($sql);
        if($result->num_rows>0){
          while($row = $result-> fetch_array()){
            $hash = $row['password'];
            $pumper_id=$row['pumper_id'];
            $_SESSION['pump_id']=$pumper_id;
          }
          $decrypt_password = password_verify($Password,$hash);
          if($decrypt_password){
           
            return true;
          }
          else{
            return false;
          }
        }
        else{
          return false;
        }
    }
    public function pumper_register($data){
      $pumper_id  =$data['pumper_id'];
      $Email      =$data['Email'];
      $First_name = $data['First_name'];
      $Last_name  = $data['Last_name'];
      $contact = $data['contact'];
      $Password   = $data['password'];
      $confirm_password=$data['confirm_password'];

      $sql="select * from $this->table where Email='".$Email."'";
      $result=$this->connect()->query($sql);

      if($result->num_rows>0)
      {
        $error_message="This Email is Already Exist!";
        return $error_message;
      }
      else
      {
        if($confirm_password==$Password){
          $active = 1;
          $hash_password = password_hash($Password,PASSWORD_BCRYPT);
          $sql="insert into $this->table (pumper_id,First_name,Last_name,Email,Contact_number,password,status)values('$pumper_id','$First_name','$Last_name','$Email','$contact','$hash_password','$active')";
          $result=$this->connect()->query($sql);
        
          $error_message="";
          return $error_message;
        }
        else
        {
          $error_message="Password didn't matched!";
          return $error_message;
        }

      }
    }
    public function mail($model){
      require_once '../app/core/'.$model.'.php';

      return new $model();
  }
}