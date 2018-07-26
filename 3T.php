
<!DOCTYPE html>
<html>
<head>

<style> 
#pregnant {
    width: 40px;
  	height: 40px;
    background-image: url("pregnant.png");
    position: relative;
    animation-name: example;
    animation-duration: 25s;
    animation-iteration-count: 2;
}

#male {
    width: 20px;
  	height: 40px;
    background-image: url("male.png");
    position: relative;
    animation-name: doctor;
    animation-duration: 20s;
    animation-iteration-count: 2;
}


@keyframes example {
    0%   {background-image: url("pregnant.png"); left:410px; top:300px;}
    10%  {background-image: url("pregnant.png"); left:430px; top:300px;}
    20%  {background-image: url("pregnant.png"); left:440px; top:300px;}
    30%  {background-image: url("pregnant.png"); left:450px; top:300px;}
    40% {background-image: url("pregnant.png"); left:450px; top:300px;}
    50% {background-image: url("pregnant.png"); left:450px; top:300px;}
    60%  {background-image: url("pregnant.png"); left:450px; top:300px;}
    70%  {background-image: url("pregnant.png"); left:450px; top:310px;}
    80%  {background-image: url("pregnant.png"); left:450px; top:320px;}
    90% {background-image: url("pregnant.png"); left:450px; top:330px;}
    100% {background-image: url("pregnant.png"); left:460px; top:340px;}
}

@keyframes doctor {
    0%   {background-image: url("male.png"); left:510px; top:200px;}
    10%  {background-image: url("male.png"); left:530px; top:200px;}
    20%  {background-image: url("male.png"); left:550px; top:200px;}
    30%  {background-image: url("male.png"); left:580px; top:200px;}
    40% {background-image: url("male.png"); left:600px; top:200px;}
    50% {background-image: url("male.png"); left:670px; top:200px;}
    60%  {background-image: url("male.png"); left:770px; top:200px;}
    70%  {background-image: url("male.png"); left:800px; top:290px;}
    80%  {background-image: url("male.png"); left:850px; top:290px;}
    90% {background-image: url("male.png"); left:860px; top:290px;}
    100% {background-image: url("male.png"); left:870px; top:300px;}
}
</style>
</head>
<body>
		<?php
		   $con = mysqli_connect("localhost", "root", "", "beacon") or die (mysqli_error());
		   $data = mysqli_query($con, "SELECT Loc FROM device left join registered on device.MAC = registered.MAC WHERE registered.Visit = 'Active'") or die (mysqli_error()); 
           $data2 = mysqli_query($con, "SELECT Name FROM registered left join device on registered.MAC = device.MAC WHERE registered.Visit = 'Active'") or die (mysqli_error()); 
          $info = mysqli_fetch_array($data); 
          $info2 = mysqli_fetch_array($data2);
          $name = $info2['Name'];
   			if ($info = "Receptionist") 
            {
   			
             echo "<div id='male'><br><br> $name</div>";
             } 

             if ($info = "Emergency") 
            {
             echo "<div id='pregnant'><br><br>$name</div>";
             } ?>
<!--
<p><b>Note: This software owned by 3T Corp as a prototype, hardcoded by Mochamad Rishaldy Prisliyanto</b> .</p>
-->

<img src="map.png">
</body>
</html>
