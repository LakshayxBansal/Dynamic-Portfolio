<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
        <form method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <h1 class="displayed-4 text-center">Welcome to area calculator</h1>
                    <h2 class="displayed-4 text center"> Press 1 for rectangle </h2>
                    <h2 class="displayed-4 text center"> Press 2 for circle </h2></br>

                        <label for="txt">Enter Number</label>
                        <input class="form-control" id="number" type="number" name="number"/></br>
                        </br>
                        </br>
                       
                        <input class="btn btn-warning" type="submit" name="sbt"/></br>
                </div>
            </div>
            </div>
        </form>
    </div>
    <?php
     $number=$_POST["number"];
     switch ($number) {
        case "1":
            $length=$_POST("length");
            $width=$_POST("width");
            echo "area of rectangle is $length*$width".($length*$width)
          break;
        case "2":
          echo "area of circle is 3.145*$radius**2".(3.145*$radius**2);
          break;
      }
    ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
crossorigin="anonymous"></script>

</body>
</html>
