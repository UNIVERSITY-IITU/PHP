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


<div class="container" style="width: 500px">

    <form action="cookie.php" method="get">

        <div class="form-group">
        <label>Name:<br> </label>
        <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php if(isset($_COOKIE['name']) ) echo ($_COOKIE['name']);?>">
        </div>

        <div class="form-group">
        <label>Surname:</label> <br>
        <input type="text" name="surname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php if(isset($_COOKIE['surname']) ) echo ($_COOKIE['surname']);?>">
        </div>

        <div class="form-group">
        <label>Age: </label>  <br>
        <input type="number" name="age"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php if(isset($_COOKIE['age']) ) echo ($_COOKIE['age']);?>">
        </div>

        <div class="form-group">
        <label>Country</label> <br>
        <input type="text" name="country" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php if(isset($_COOKIE['country']) ) echo ($_COOKIE['country']);?>">
        </div>

        <div class="form-group">
        <label>Gender:</label> <br>
        <input type="radio" name="gender"
            <?php if (isset($_COOKIE['gender'])&& $_COOKIE['gender']=="female") echo "checked";?>
               value="female">Female
        <input type="radio" name="gender"
            <?php if  (isset($_COOKIE['gender'])&& $_COOKIE['gender']=="male") echo "checked";?>
               value="male">Male
        </div>

        <div class="form-group">
        <label> Credit Card:</label>
        <input type="number" name="credit" value="<?php if(isset($_COOKIE['credit']) ) echo ($_COOKIE['credit']);?>">
        </div>

        <br><button class="btn btn-success btn-block">Save</button>

    </form>
</div>
</body>
</html>