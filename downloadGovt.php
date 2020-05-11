<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> download pdf </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>


    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <!--alert message-->
    <?php if(@$_GET['w'])
    {echo'<script>alert("'.@$_GET['w'].'");</script>';}
    ?>
    <!--alert message end-->

</head>
<?php
  include_once 'dbConnection.php';
?>

<body>
    <div class="header">
        <div class="row">
            <div class="col-lg-6">
                <span class="logo">ONLINE TEST</span></div>
            <div class="col-md-4 col-md-offset-2">
                <?php
 include_once 'dbConnection.php';
session_start();
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
}
?>
            </div>
        </div>
    </div>
    </div>

    
    <div class="bg">

        <!--navigation menu-->
        <nav class="navbar navbar-default title1">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><b></b></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <h4 class="modal-title"><span style="color:grey;font-family:'typo' "> NOTES PDF</span></h4>
                        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="account.php?q=1"><span
                                    class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span
                                    class="sr-only">(current)</span></a></li>
                        <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="downloadIT.php"><span
                                    class="computer" aria-hidden="true"></span>&nbsp;IT Notes</a></li>
                        <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="downloadGovt.php"><span
                                    class="computer" aria-hidden="true"></span>&nbsp;Govt. Exam Notes</a></li>

                        <li class="pull-right"> <a href="logout.php?q=account.php"><span
                                    class="glyphicon glyphicon-log-out"
                                    aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout</a></li>
                    </ul>


                    <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter tag ">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Search</button>
      </form>-->
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!--navigation menu closed-->
        <div class="container">
            <!--container start-->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="modal-title"><span style="color:white;
 margin-left: 400px;
 width: 100%;
 line-height:80px;
 text-align: center;
 font-size:40px;
 background:-webkit-linear-gradient(left, #0072ff,#8811c5);
font-family:'typo',cursive;
 ">DOWNLOAD YOUR PDF</span></h3>

                    <div class="panel">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">

                                    <form action="" method="post">
                                        <table class="table table-bordered table-striped table-hover">


                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Uploaded on</th>
                                                    <th>Downloads</th>
                                                    <th>Download</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <!--<tr><td>quiz</td><td>500 questions</td><td>pdf</td><td><a href="viewprofile.php?name=nitish" target="_blank"> nitish </a></td><td>2020-05-05 16:43:12</td><td><a style="color:green" href="allfiles/981666.pdf" target="_blank">Download </a></td></tr><tr><td>demo2</td><td>demo desc 2...</td><td>ppt</td><td><a href="viewprofile.php?name=user3" target="_blank"> user3 </a></td><td>2017-07-22 11:32:36</td><td><a style="color:green" href="allfiles/800920.ppt" target="_blank">Download </a></td></tr><tr><td>demo 3</td><td>demo 3 desc....</td><td>pdf</td><td><a href="viewprofile.php?name=user3" target="_blank"> user3 </a></td><td>2017-07-22 11:32:15</td><td><a style="color:green" href="allfiles/437056.pdf" target="_blank">Download </a></td></tr><tr><td>user title</td><td>user desc</td><td>zip</td><td><a href="viewprofile.php?name=student" target="_blank"> student </a></td><td>2017-07-19 10:38:28</td><td><a style="color:green" href="allfiles/848114.zip" target="_blank">Download </a></td></tr><tr><td>demo previer</td><td>demo</td><td>pdf</td><td><a href="viewprofile.php?name=user" target="_blank"> user </a></td><td>2017-07-19 10:38:23</td><td><a style="color:green" href="allfiles/578090.pdf" target="_blank">Download </a></td></tr><tr><td>demo title</td><td>demo description</td><td>docx</td><td><a href="viewprofile.php?name=user3" target="_blank"> user3 </a></td><td>2017-07-19 10:38:13</td><td><a style="color:green" href="allfiles/502238.docx" target="_blank">Download </a></td></tr>-->
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Footer start-->
    <div class="row footer">
        <div class="col-md-3 box">
            <a href="https://www.onlineexambuilder.com/knowledge-center/exam-knowledge-center/what-is-online-examination/item10247"
                target="_blank">About </a>
        </div>


        <!--Modal for admin login-->
        <div class="modal fade" id="login">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
                    </div>
                    <div class="modal-body title1">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <form role="form" method="post" action="admin.php?q=index.php">
                                    <div class="form-group">
                                        <input type="text" name="uname" maxlength="20" placeholder="Admin user id"
                                            class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" maxlength="15" placeholder="Password"
                                            class="form-control" />
                                    </div>
                                    <div class="form-group" align="center">
                                        <input type="submit" name="login" value="Login" class="btn btn-primary" />
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                    <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!--footer end-->
    </div>
    </div>
    </div>



<footer>
    <div class="footer">
        <h2>
            <marquee behavior="" direction="left"><a href="#">THIS SITE IS CREATED BY NITISH</a></marquee>
        </h2>
    </div>
</body>
</footer>

</html>