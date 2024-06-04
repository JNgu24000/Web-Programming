<?php
$servername="localhost";
$username="jnguyen143";
$password="jnguyen143";
$dbname="jnguyen143";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed: ".$conn->connect_error);
}

$sql="SELECT AddressID,F_NAME,L_NAME,ADDRESS,PHONE,EMAIL FROM AddressBook";
$result=$conn->query($sql);

if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo "ID: ".$row["AddressID"]. " | Full Name: ".$row["F_NAME"]." ".$row["L_NAME"]. " | Address: ".$row["ADDRESS"]. " | Phone: ".$row["PHONE"]. " | Email: ".$row["EMAIL"]."<br>";
	}
}else{
echo "No results";
}
$conn_>close();
?>