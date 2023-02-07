<?php

class M_Order extends Model{

    protected $table = 'order_details';
    public $send_mail;
    public function __construct(){
        $this->send_mail=$this->mail('Library');
    }
      
    public function order_validation($data){
        $result = $this->connection();
        $order_id=$_SESSION['order_id'];
        $sql="select *from $this->table where order_id='".$order_id."'";
        $query = $result->query($sql);
        if($query->num_rows>0){
            while($row = $query->fetch_array()){
                $vehicle_no = $row['vehicle_no'];
                $Fuel_Type = $row['Fuel_Type'];
                $class = $row['class'];
                $Amount = $row['Amount'];
                $payment = $row['payment'];
                $method = $row['method'];
                $points = $row['points'];
            }
            $arr =array(
                'vehicle_no'=> $vehicle_no,
                'Fuel_Type' => $Fuel_Type,
                'class' => $class,
                'Amount' => $Amount,
                'payment' =>$payment,
                'method'=> $method,
                'points'=>$points,
                'loading'=>'1',
                'err'=>'',
            );
            return $arr;

        }
        else{
            return false;
        }
    }
    public function order_complete($data){
        $pumped_liters=$data['pumped'];
        $result = $this->connection();
        $order_id=$_SESSION['order_id'];
        $pump_id=$_SESSION['pump_id'];
        $sql="select *from $this->table where order_id='".$order_id."'";
        $query = $result->query($sql);
        if($query->num_rows>0){
            while($row = $query->fetch_array()){
                $vehicle_no = $row['vehicle_no'];
                $Fuel_Type = $row['Fuel_Type'];
                $class = $row['class'];
                $Amount = $row['Amount'];
                $payment = $row['payment'];
                $method = $row['method'];
                $points=$row['points'];
            }
            $remaining_liters=$Amount-$pumped_liters;
            if($remaining_liters>=0){
                $sql="update $this->table set Amount ='".$remaining_liters."' where order_id = '".$order_id."'";
                $query=$result->query($sql);
                $sql="select *from $this->table where order_id='".$order_id."'";
                $query=$result->query($sql);
                while($row =$query->fetch_array()){
                    $category=$row['class'];
                    $payment=$row['payment'];
                }
                if($category==92){
                    $price=380*$pumped_liters;
                }
                elseif($category==95){
                    $price=450*$pumped_liters;
                }
                if($method=='CARD PAYMENT'){
                    $balance=$payment-$price;

                }
                else{
                    $balance=0.00;
                }
                $points=$points+$pumped_liters*5;
                $sql="update $this->table set points ='".$points."' where order_id = '".$order_id."'";
                $query=$result->query($sql);
                $arr =array(
                    'vehicle_no'=> $vehicle_no,
                    'Fuel_Type' => $Fuel_Type,
                    'class' => $class,
                    'Amount' => $remaining_liters,
                    'payment' =>$payment,
                    'method'=> $method,
                    'balance'=>$balance,
                    'pumped_liters'=>$pumped_liters,
                    'price'=>$price,
                    'remaining_liters'=>$remaining_liters,
                    'loading'=>'0',
                    'points'=>$points,
                    'err'=>'YOU ORDER HAS BEEN SUCCESSFULLY COMPLETED!'
                );
                $sql="insert into complete_order(order_id,pumper_id,Fuel_Type,class,Remaining,pumped_liters,pay,balance)values('$order_id','$pump_id','$Fuel_Type','$category','$remaining_liters','$pumped_liters','$price','$balance')";
                $query=$result->query($sql);

                $sql="update $this->table set payment ='".$balance."' where order_id = '".$order_id."'";
                $query=$result->query($sql);
                // this part is related to the email message sender to the customer 

                $sql1="select *from $this->table where order_id = '".$order_id."'";
                $query1 = $result->query($sql1);

                if($query1 -> num_rows>0){
                    while($row = $query1->fetch_array()){
                        $email = $row['Email'];
                    }
                }
                $recipient = $email;
                $subject ="COMPELTE ORDERS";
                $message = "Dear Valid Customer <br> YOUR Vehicle No:$vehicle_no <br>
                FUEL : $Fuel_Type-$class <br> Remaining Liters:$remaining_liters<br>
                Account_balance:$balance<br>
                PETRO Points: $points<br>
                BEST REGARDS COME AGAIN!!!!!!";

                $data = [
                    'recipient' => $recipient,
                    'subject' => $subject,
                    'message' => $message,
                ];
                $check=$this->send_mail->send_Mail($data);
                if($check){
                    return $arr; 

                }

               
               
            }
            else{
                $arr=array(
                    'vehicle_no'=> $vehicle_no,
                    'Fuel_Type' => $Fuel_Type,
                    'class' => $class,
                    'Amount' => '0',
                    'payment' =>$payment,
                    'method'=> $method,
                    'points'=>$points,
                    'loading'=>'1',
                    'err'=>'This Process can not be done!',
                );
                return $arr;

            }

        }

    }
}