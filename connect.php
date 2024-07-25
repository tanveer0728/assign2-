<?
$con=new mysqli('localhost','root','','games',);

if ($con){
    echo "connection successfull";

}else{
    die(mysqli_error($con));
}