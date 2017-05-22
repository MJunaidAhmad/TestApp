<form name="import" method="post" enctype="multipart/form-data">
     <input type="file" name="file" /><br />
        <input type="submit" name="submit" value="Submit" />
</form>

<?php

include_once('../includes/conn.inc.php');


if(isset($_POST["submit"]))
{
 $file = $_FILES['file']['tmp_name'];
 $handle = fopen($file, "r");
 $c = 0;
 while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
 {
 $num = $filesop[0];
 $date = $filesop[1];
 $id_campaign = $filesop[2];
 $hours = $filesop[3];
 
 $sql = "INSERT INTO `hours`(`num_worker`, `date`, `id_campaign`, `hours`) VALUES ('$num','$date','$id_campaign','$hours')";
 }
 

 if($sql){
 echo "You database has imported successfully";
 }else{
 echo "Sorry! There is some problem.";
 }
}