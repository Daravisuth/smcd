<?php
include ("include/config.php");
$today=date("Ymdhis");

if(@($_POST['datashowmember']==1)){
$department=$_POST['department'];
$select_department=$dbh->prepare("SELECT * FROM tblattendee WHERE dept_id='$department'");
$select_department->execute();


while ($row=$select_department->fetch(PDO::FETCH_ASSOC)){
    $select="<option value='".$row['id']."'>".$row['name_kh']."</option>";
    echo $select;
}
}


if(@($_POST['add_new_member']==1)){
    $department=$_POST['department'];
    $phone_number=$_POST['phone_number'];
    $name_member=$_POST['name_member'];
    $name_kh=$_POST['name_member'];
    $staff_id=0;
    $images=$_FILES["file_upload"]["tmp_name"];
    $name=$_FILES['file_upload']['name'];
    $type=$_FILES['file_upload']['type'];
    $size=$_FILES['file_upload']['size'];
    $fileinfo=pathinfo($name);
    @$exten=strtolower($fileinfo['extension']);
    $rangeimg = mt_rand(10000,99999);
    $today1= date_create();



    if($exten=="jpg" || $exten=="png" || $exten=="gif" || $exten=="jpeg"){
        ///note : name_file = id+$today
        $rangeimg = mt_rand(10000,99999);
        $new_images = $images;
        $originalimg=$today."_".$rangeimg.".".$exten;

    }
    $insert=$dbh->prepare(" INSERT INTO tblattendance (`staff_id`,`dept_id`,`name_kh`,`phone_number`,`register_date`,`file_upload`)
                                    VALUES('$staff_id','$department','$name_kh','$phone_number','$today','$originalimg');
                            ");
    $insert->execute();
    if($insert->rowCount()>0){
        move_uploaded_file($new_images,"image/".$originalimg);
        echo 1;
    }
}
