<!doctype html>
<html lang="en" xmlns:https="http://www.w3.org/1999/xhtml" xmlns:height="http://www.w3.org/1999/xhtml">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<div>
    <form action="insert.php" method="POST" class="mx-3 mt-3">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Comment</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mx-auto my-2" name="submit">Comment</button>
        </div>
    </form>


    <?php
    $data = file_get_contents('comment.txt');
    $data = json_decode($data);
    foreach ($data

    as $fetch){
    ?>
    <div class="card bg-light ml-4 mb-3 pl-2" style="max-width: 60rem;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2" class="border bottom style=" height: 10rem;
                ">
                <img src="https://img.icons8.com/color/96/000000/mime.png" class="img-thumbnail"/>
            </div>
            <div class="col-md-10">
                <span class="text-primary font-weight-bold"><?php echo $fetch->name ?></span> made a post
                <br>
                <?php echo $fetch->time ?>
            </div>
        </div>
        <div class="ml-1"><?php echo $fetch->comment ?></div>
    </div>
</div>
<?php }
?>

