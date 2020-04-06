<?php
//$file = 'comments.txt';
//$info = [$username, $email, $comment]
//$infosend = "json_encode($info<br>)";
//file_put_contents($file, $infosend, FILE_APPEND);
//print "Script Ran a
////require './form_set.php';
if (isset($_POST['submit'])) {
//    $minimum = 4;
//    $maximum = 10;

//    $username = $_POST['username'];
//    $email = $_POST['email'];
//    $comment = $_POST['comment'];

    $file = 'comments.txt';
    $info = [
        'name' => $_POST['username'],
        'email' => $_POST['email'],
        'comment' => $_POST['comment'],
        'time' => date("Y-m-d H:i:s")
    ];
    $infosend = json_encode($info);
    file_put_contents($file, $infosend, FILE_APPEND);

//    echo "script ran";
//    if (strlen($username) < $minimum) {
//        echo "per trumpas vartotojo vardas";
//    }
//    if (strlen($username) > $maximum) {
//        echo "per ilgas vartotojo vardas";
//    }
//}
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


        <!--        <div class="col-1">-->
        <!--            <label for="username">Username</label>-->
        <!--            <br><br>-->
        <!--            <label for="email">Email</label>-->
        <!--            <br><br><br>-->
        <!--            <label for="password">Password</label>-->
        <!--        </div>-->


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
    </div>
    <div class="container-float">
        <div class="row">

            <!--            --><?php
            //            $data = file_get_contents('comments.txt');
            //            $data = json_decode($data);
            //            foreach ($data as $fetch)
            //            {
            //            ?>
            <!--            <div class="card bg-light ml-4 mb-3 pl-2" style="max-width: 60rem;">-->
            <!--                <div class="card-body">-->
            <!--                    <div class="row">-->
            <!--                        <div class="col-md-2" class="border bottom style=" height: 10rem;-->
            <!--                        ">-->
            <!--                        <img src="https://img.icons8.com/color/96/000000/mime.png" class="img-thumbnail"/>-->
            <!--                    </div>-->
            <!--                    <div class="col-md-10">-->
            <!--                        <span class="text-primary font-weight-bold">-->
            <?php //echo $fetch->username ?><!--</span> made a post-->
            <!--                        <br>-->
            <!---->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <div class="ml-1">--><?php //echo $fetch->comment ?><!--</div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--        --><?php //}  ?>
            <!--    </div>-->
            <!--</div>-->


            <div class="card border-primary mb-3">
                <div class="card-body">
                    <h4 class="card-title">Card Title</h4>
                    <p class="card-text">
                        <?php
                        $data = file_get_contents('comments.txt');
                        $data = json_decode($data);

                        echo $data;
                        echo "<br><br>";


                        echo "<br><br>";
                       
                        ?>


                    </p>
                </div>
            </div>


        </div>

    </div>
</div>


​
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