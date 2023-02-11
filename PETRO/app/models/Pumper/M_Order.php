<?php

class M_Order extends Model{

    protected $table = 'ordert';

    protected $table1 = 'fuel_availability';

    protected $table2 = "complete_order";

   
    public $send_mail;
    public function __construct(){
        $this->send_mail=$this->mail('Library');
    }

    
      
    public function order_validation($data){
        $result = $this->connection();
        $order_id=$_SESSION['order_id'];
        $sql="select *from $this->table where Oid='".$order_id."'";
        $query = $result->query($sql);
        if($query->num_rows>0){
            while($row = $query->fetch_array()){
                $vehicle_no = $row['VMno'];
                $Fuel_Type = $row['ftype'];
                $class = $row['vtype'];
                $Amount = $row['amount'];
                $payment = $row['price'];
                $method = $row['pmethod'];
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
        $pump_id=$_SESSION['pumper_id'];
        $sql="select *from $this->table where Oid='".$order_id."'";
        $query = $result->query($sql);
        if($query->num_rows>0){
            while($row = $query->fetch_array()){
                $vehicle_no = $row['VMno'];
                $Fuel_Type = $row['ftype'];
                $class = $row['vtype'];
                $Amount = $row['amount'];
                $payment = $row['price'];
                $method = $row['pmethod'];
                $points=$row['points'];
            }
            $remaining_liters=$Amount-$pumped_liters;
            if($remaining_liters>=0){
                $sql="update $this->table set amount ='".$remaining_liters."' where Oid = '".$order_id."'";
                $query=$result->query($sql);
                $sql="select *from $this->table where Oid='".$order_id."'";
                $query=$result->query($sql);
                while($row =$query->fetch_array()){
                    $category=$row['ftype'];
                    $payment=$row['price'];
                }
                $sql="select *from $this->table1 where fuel_type='".$category."'";
                $query=$result->query($sql);
                while($row =$query->fetch_array()){
                    $price_petro=$row['price'];
                    $eligible = $row['eligible_amount'];
                }
                if($category=="octane 92"){
                    $price=$price_petro*$pumped_liters;
                }
                elseif($category=="octane 95"){
                    $price=$price_petro*$pumped_liters;
                }
                elseif($category=="super diesel"){
                    $price = $price_petro * $pumped_liters;

                }
                elseif($category=="auto diesel"){
                    $price = $price_petro * $pumped_liters;
                }
                if($method=='Cash'){
                    $balance=$payment-$price;

                }
                else{
                    $balance=0.00;
                }
                $points=$points+$pumped_liters*5;
                $sql="update $this->table set points ='".$points."' where Oid = '".$order_id."'";
                $query=$result->query($sql);
                $arr =array(
                    'vehicle_no'=> $vehicle_no,
                    'Fuel_Type' => $Fuel_Type,
                    'class' => $class,
                    'Amount' => $Amount,
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
                $sql="insert into $this->table2(order_id,pumper_id,Fuel_Type,vehicle_no,Remaining,pumped_liters,pay,balance)values('$order_id','$pump_id','$Fuel_Type','$vehicle_no','$remaining_liters','$pumped_liters','$price','$balance')";
                $query=$result->query($sql);

                $sql="update $this->table set price ='".$balance."' where Oid = '".$order_id."'";
                $query=$result->query($sql);

                $total_eligible = $remaining_liters + $eligible;
                $sql="update $this->table1 set eligible_amount ='".$total_eligible."' where fuel_type = '".$category."'";
                $query=$result->query($sql);
                // this part is related to the email message sender to the customer 

                $sql1="select *from $this->table where Oid = '".$order_id."'";
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
                if ($check) {
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