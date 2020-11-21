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

<?php
include "db.php";
$lang = @$_COOKIE['lang'];

?>

<div class="container" style="width: 500px">
    <p> <?php if (!empty($data)){echo $data[$lang]["site_title"];} ?> </p>
    <form action="cookie.php" method="post">
        <div class="form-group">
            <label>language</label>
            <input type="text" name="lang">
            <button class="btn btn-success">sumbit</button>
        </div>
    </form>

    <form action="cookie.php" method="post">

        <div class="form-group">
            <label> <?php if (!empty($data)){echo $data[$lang]["site_title"];} ?> </label>
            <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="form-group">
            <label> <?php if (!empty($data)){echo $data[$lang]["country_label"];} ?> </label>
            <input type="text" name="surname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="form-group">
            <label> <?php if (!empty($data)){echo $data[$lang]["name_label"];} ?> </label>
            <input type="number" name="age"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="form-group">
            <label> <?php if (!empty($data)){echo $data[$lang]["gender_label"];} ?> </label>
            <input type="text" name="country" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <br><button class="btn btn-success btn-block">Save</button>

    </form>
</div>
</body>
</html>