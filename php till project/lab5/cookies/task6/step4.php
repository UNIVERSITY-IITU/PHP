<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mr-4 ml-4 mt-4">
    <?php
    session_start();

    ?>
   <h5>Name: <?php echo $_SESSION["name"]?></h5>
    <h5>Surname: <?php echo $_SESSION["surname"]?></h5>
    <h5>Age: <?php echo $_SESSION["age"]?></h5>
    <h5>City: <?php echo $_SESSION["city"]?></h5>
    <h5>Address: <?php echo $_SESSION["address"]?></h5>
    <h5>Phone: <?php echo $_SESSION["phone"]?></h5>
    <h5>University: <?php echo $_SESSION["university"]?></h5>
    <h5>Factually: <?php echo $_SESSION["factually"]?></h5>
    <h5>Group: <?php echo $_SESSION["group"]?></h5>
</div>
</body>
</html>
