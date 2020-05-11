<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UPLOAD NOTES </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">




    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>


</head>

<body style="background:#eee;">
    <div class="header">
        <div class="row">
            <div class="col-lg-6">
                <span class="logo">TEST NOTES</span>
            </div>
        </div>
    </div>
    <!-- admin start-->

    <!--navigation menu-->
    <nav class="navbar navbar-default title1">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="dash.php?q=0"><b>Dashboard</b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li <?php if (@$_GET['q'] == 2) echo 'class="active"'; ?>><a href="uploadIT.php"><span class="computer" aria-hidden="true"></span>&nbsp;IT Notes</a></li>
                    <li <?php if (@$_GET['q'] == 2) echo 'class="active"'; ?>><a href="uploadGovt.php"><span class="computer" aria-hidden="true"></span>&nbsp;Govt. Exam Notes</a></li>

                    </li>
                    <li class="pull-right"> <a href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>



                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="bg2">
        <div class="container">
            <!--container start-->
            <div class="col">




                <div class="panel">
                    <!--<div id="wrapper">

       
                          <div id="page-wrapper">

                         <div class="container-fluid">-->

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12" id="filediv">

                            <form method="post" enctype="multipart/form-data">
                                <h1 class="page-header">
                                    UPLOAD NOTE
                                </h1>
                                <input type="file" class="form-control-file" name="inputfile" value="Upload Photo" required>
                                <input type="submit" name="upload">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <div class="footer">
            <h2>
                <marquee behavior="" direction="left"><a href="#">THIS SITE IS CREATED BY NITISH</a>
                </marquee>
            </h2>
        </div>
    </footer>

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script>
        $(function() {
            $(document).on('scroll', function() {
                console.log('scroll top : ' + $(window).scrollTop());
                if ($(window).scrollTop() >= $(".logo").height()) {
                    $(".navbar").addClass("navbar-fixed-top");
                }

                if ($(window).scrollTop() < $(".logo").height()) {
                    $(".navbar").removeClass("navbar-fixed-top");
                }
            });
        });
    </script>



</body>


<?php

if (isset($_POST['upload'])) {


    $name = $_POST['inputfile'];
    $photo = $_FILES['inputfile'];

    $filename = $photo['name'];
    print_r($filename);
    // echo "<br>";
    $fileerror = $photo['error'];
    // print_r($fileerror);
    $filetmp = $photo['tmp_name'];
    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('pdf', 'png', 'jpg', 'jpeg');
    if (in_array($filecheck, $fileextstored)) {
        $destinationfile = 'uploads/' . $filename;
        move_uploaded_file($filetmp, $destinationfile);

        echo '<script language="javascript">';
        echo 'alert("file successfully uploaded")';
        echo '</script>';
    }
}
?>


</html>