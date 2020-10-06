<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
<form method="post" action="display.php">
    <div class="form-group">
        <label>Name : </label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <label>Surname : </label>
        <input type="text" class="form-control" name="surname">
    </div>

    <div class="form-group">
        <label>Food</label>
        <select class="form-control" name="food">
            <option value="Pizza">Pizza</option>
            <option value="Sushi">Sushi</option>
            <option value="Quirdaq">Quirdaq</option>
            <option value="Lagman">Lagman</option>
            <option value="Et">Et</option>
        </select>
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-primary">show</button>
    </div>
</form>
</div>
</body>
</html>