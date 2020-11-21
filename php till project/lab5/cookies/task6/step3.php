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
    <form action="step3.php" method="get">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">University</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3"  name="university">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Factually</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3"  name="factually">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Group</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3"  name="group">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-primary">FINISH</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
<?php
if(isset($_GET["submit"])) {
    if (!empty($_GET["university"]) && !empty($_GET["factually"]) && !empty("group")) {
        $_SESSION["university"] = $_GET["university"];
        $_SESSION["factually"] = $_GET["factually"];
        $_SESSION["group"] = $_GET["group"];
        header('location: step4.php');


    }
}
?>