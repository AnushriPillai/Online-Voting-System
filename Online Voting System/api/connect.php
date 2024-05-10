<?php
$connect = mysqli_connect("localhost:3308","root","","voting") or die("Connection Failed");
if($connect)
{
    echo "Connected";

}
else{
    echo "not connected";
}

?>