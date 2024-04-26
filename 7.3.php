<form method="post" enctype="multipart/form-data">
    <input type="file" name="fil"/>
    <input type="submit" name="sbt"/>
</form>
<?php
if(isset($_POST['sbt'])){
    $name=$_FILES['fil']['name'];
    $type=$_FILES['fil']['type'];
    $size=$_FILES['fil']['size'];
    $tname=$_FILES['fil']['temp_name'];
    $error=$_FILES['fil']['error'];


    // $st=<<<TEST
    // name:$name
    // type:$type
    // size:$size
    // tname:$tname
    // error:$error


    $path = "" . $name;
    move_uploaded_file($tname, $path);

}
?>