<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">




</head>
<body>
    <form>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">




</head>
<body>
    <form>
       Chk1: <input type="checkbox" name="chk[]" value="Chk1"/></br>
       Chk2: <input type="checkbox" name="chk[]" value="Chk2"/></br>
       Chk3: <input type="checkbox" name="chk[]" value="Chk3"/></br>
       Chk4: <input type="checkbox" name="chk[]" value="Chk4"/></br>
       Chk5: <input type="checkbox" name="chk[]" value="Chk5"/></br>


       <input type="submit" name="sbt" value="Click"/>

       <select name="sel" multiple >
        <option value="011"> Delhi</option>
        <option value="022"> Mumbai</option>
        <option value="033"> Kolkata</option>
        <option value="044"> Chennai</option>

       </select>


    </form>




    <?php
    if(isset($_GET["sbt"])){
        $c1=$_GET["chk"];
        print_r($c1);

        $sel=$_GET["sel"];
        print_r($sel);

        unset("sel[0]);
        print_r($sel);


    }

    ?>