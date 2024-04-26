<?php
$conn=mysqli_connect("localhost","root","","hr","3308") or die("some error");
if{($conn)
    print("conn successfull");
}
else{
    print("error");
}

if(isset($_GET["search"])){
    // print("<script>alert('search button is clicked');</script>") for insert
    $eid=$_GET['txtsearch'];
    $selqry="select * from employee where uid=$eid";
    $rs=mysqli_query($conn,$selqry);
    $row=myslqi_fetch_array($rs);
    echo("$row[0] $row[1] $row[2] $row[3] $row[4] $row[5] $row[6] $row[7]");
    // print("<script>alert($eid);</script>");

?> 
<?php    if(isset($row)){
        echo $row[];
    }
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">     
    <title>Starter template</title>
</head>
<body class="bg-light">
    <div class="container w-50">
        <h1>Update Profile</h1>
        <div class="bg-dark text-white" style="border-radius:10px">
            <form class="p-3">
            <div class="input-group">
            <div class="input-group-append">
                <span class="input-group-text"><input class='btn btn-outline-primary btn-block' type='submit' value="Search"  name='Search' />
                </span>
            </div>
            <input type="text" name="txtsearch" id="" class="form-control"  placeholder="" aria-describedby="helpId" >

            </div>

            <div class="form-group">
                <label for="">User Id</label>
                <input type="text" name="txtuid" id="" class="form-control"  placeholder=""  aria-describedby="helpId" value="<?php if(isset($row)){echo $row[0];}?>" >
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="txtname" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(isset($row)){echo $row[1];}?>" >
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="txtpassword" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(isset($row)){echo $row[2];}?>" >
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" name="txtfullname" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(isset($row)){echo $row[3];}?>">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="txtemail" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(isset($row)){echo $row[4];}?>" >
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="">Mobile</label>
                <input type="number" name="txtmobile" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(isset($row)){echo $row[5];}?>" >
                <small id="helpId" class="text-muted">Help text</small>
            </div>
           
            <div class="form-group">
                <label for="">Address</label>
                <textarea  name="txtaddress" id="" class="form-control" placeholder="" aria-describedby="helpId"><?php if(isset($row)){echo $row[6];}?>
                </textarea>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="row">
                <div class="col"><input class='btn btn-outline-primary btn-block my-4' type='submit'  name='insert' value='Insert' /></div>
                <div class="col"><input class='btn btn-outline-primary btn-block my-4' type='submit'  name='update' value='Update' /></div>
                <div class="col"><input class='btn btn-outline-primary btn-block my-4' type='submit'  name='delete' value='Delete' /></div>
                <div class="col"><input class='btn btn-outline-primary btn-block my-4' type='submit'  name='show' value='Show' /></div>
            
            <div>    
        </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
</script>
    </body>

</html>

<?php
if(isset($_GET["insert"])){

    $uid=$_GET['txtuid'];
    $uname=$_GET['txtname'];
    $password=$_GET['txtpassword'];
    $fullname=$_GET['txtfullname'];
    $email=$_GET['txtemail'];
    $mobile=$_GET['txtmobile'];
    $address=$_GET['txtaddress'];
    $image=$_GET['./image/image(3).jpeg'];
    // echo "$uid $name $password $fullname $email $mobile $address $image";
    $insquery="insert into employee values('$uid','$name','$password','$fullname','$email','$mobile','$address','$image')";
    mysqli_query($conn,$insquery)or die()
    print("<script>alert('insert button is clicked');</script>");
}
if(isset($_GET["update"])){
    print("<script>alert('update button is clicked');</script>");
}
if(isset($_GET["delete"])){
    print("<script>alert('delete button is clicked');</script>");
}
if(isset($_GET["show"])){
    print("<script>alert('show button is clicked');</script>");
}



?>