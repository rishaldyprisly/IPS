<!DOCTYPE html>


<html>
<head>
<style>
#container {
  width: 1300px;
  height: 580px;
  position: relative;
  background-image: url("map.png");
}
#animate {
  width: 40px;
  height: 40px;
  position: relative;
  background-image: url("pregnant.png");
}
</style>

<script>
function recept() {

  var elem = document.getElementById("animate");   

  var pos = 250;
  var id = setInterval(frame, 50);
  function frame() {
    if (pos == '0') {
      elem.style.left = pos + 'px';
            
    } 


    if (pos == '250') {
      elem.style.top = pos + 'px';
            
    }

    if (pos == '440') {
     // clearInterval(id);
             elem.style.left = pos + 'px'; 
    }
    if (pos == '450') {
     // clearInterval(id);
             elem.style.left = pos - 'px'; 
    }

    else {
      pos++; 
     // elem.style.top = pos + 'px'; 
      elem.style.left = pos + 'px'; 
    }
  }
}


</script>

</head>
<body>
<div id ="container">
  <div id ="recept">
<div id ="animate"></div>
</div>
</div>

<?php
 $con = mysqli_connect("localhost", "root", "", "beacon") or die (mysqli_error());             
 $data = mysqli_query($con, "SELECT Loc FROM device left join registered on device.MAC = registered.MAC WHERE registered.Visit = 'Active'") or die (mysqli_error());

 $info = mysqli_fetch_array($data);
 if ($info['Loc'] == 'Receptionist') {
  ?>

  <script type="text/javascript">
        recept();
    </script>

<?php
 }
?>
   


</body>
</html>
