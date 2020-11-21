<?php
include "db4.php";
$data = $_SESSION['data'];
setcookie("name[a]", 0 , time() +3600);
$sum=0;
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Task 4
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
    <h2>Task 4</h2>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <?php
                foreach ($data as $key =>$value){
                    echo "<form action='cookie.php' method='get'>

                    <div class='card' style='width: 18rem;'>
                  
                        <div class='card-body'>
                            <h5 class='card-title'> $key</h5>
                            <p class='card-text'> $value $</p>
                            <input type='hidden' name='name' value='$key'>
                             <button class='btn btn-primary' name='submit' type='submit'>
                             Add to Card
                            </button>
                        </div>
                    </div>
                    
                </form>
                " ;}
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <?php

                if (isset($_COOKIE['name'])) {
                    foreach ($_COOKIE['name'] as $name => $value) {
                        echo "$name : $value <br />\n";
                        $sum += (int)$value;
                    }
                    echo "sum: $sum";
                }
                ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>