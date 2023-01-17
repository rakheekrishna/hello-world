<?php
// simple trait example
/*
trait tr_message1{
    public function message1(){
        echo "message1";
        echo "<br />-----------------<br />";
    }
}
trait tr_message2{
    public function message2(){
        echo "message2";
        echo "<br />-----------------<br />";
    }
}
class Message{
    use tr_message1,tr_message2;

} 
$msg = new Message();
$msg->message1();
$msg->message2();

*/
/*
// traits with smae function name conflict resolution 
trait tr_message1{
    public function message1(){
        echo "message1 from tr_message1";
        echo "<br />-----------------<br />";
    }
    public function message2(){
        echo "message2 from tr_message1";
        echo "<br />-----------------<br />";
    }
}
trait tr_message2{
    public function message1(){
        echo "message1 from tr_message2";
        echo "<br />-----------------<br />";
    }
    public function message2(){
        echo "message2 from tr_message2";
        echo "<br />-----------------<br />";
    }
}
class Message{
    use tr_message1,tr_message2{
        tr_message2::message1 insteadof tr_message1;
        tr_message1::message2 insteadof tr_message2;
    }

} 
$msg = new Message();
$msg->message1();
$msg->message2();
*/
// trait with access modifier

trait tr_message1{
    public function message1(){
        echo "message1";
        echo "<br />-----------------<br />";
    }
}
trait tr_message2{
    public function message2(){
        echo "message2";
        echo "<br />-----------------<br />";
    }
}
class Message{
    use tr_message2,tr_message1{message1 as protected;}
    
    public function frommessage()
    {
        $this->message1();
    }

} 
$msg = new Message();
$msg->frommessage();
$msg->message2();

?>