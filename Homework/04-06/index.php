<?php
require './form_set.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>

<div class="container-flex m-5">
    <div class="form-group">
        <form action="index.php" method="post">

            <div class="input-group row">
                <label for="username" class="col-4 col-md-1">Name</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Write Username">
            </div>

            <br>

            <div class="input-group row">
                <label for="email" class="col-4 col-md-1">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Write Password">
            </div>

            <br>

            <div class="input-group row">
                <label for="comment" class="col-4 col-md-1">Comment</label>
                <textarea class="form-control" id="comment" type="text" name="comment" placeholder="Comment"
                "></textarea>
            </div>

            <div class="container">
                <div class="row justify-content-center mt-4">

                    <button class="btn btn-primary" type="submit" name="submit">Coment</button>
                </div>

            </div>
        </form>

        <br>
        <?php
        $data = file_get_contents('comments.txt');
        $data = json_decode($data);

        if ('' != file_get_contents('comments.txt')) {
            foreach ($data as $fetch) {
                ?>

                <div class="container-float">
                    <div class="card mb-3" style="max-width: 60rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="https://png.pngtree.com/png-vector/20190321/ourmid/pngtree-vector-users-icon-png-image_856952.jpg" class="img-thumbnail"/>
                                </div>
                                <div class="col-md-10">
                            <span class="text-primary font-weight-bold">
                                <?php
                                echo $fetch->username
                                ?>
                            </span> made a post<br>
                                    <?php echo $fetch->time ?>
                                </div>
                            </div>
                            <div class="ml-1"><?php echo $fetch->comment ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        }
        ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</body>
</html>