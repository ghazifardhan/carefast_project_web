<?php

session_start();
error_reporting(0);
include 'models/Include.php';

?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        
        <title>Masterdata Project</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        
        <link href="/carefast_project/libs/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet" media="screen" />
        <link href="/carefast_project/libs/js/bootstrap/dist/css/bootstrap-chosen.css" rel="stylesheet" />
        <!-- custom CSS -->
        <style>
        .display-none{
            display:none;
        }

        .padding-bottom-2em{
            padding-bottom:2em;
        }

        .width-30-pct{
            width:30%;
        }

        .width-40-pct{
            width:40%;
        }

        .overflow-hidden{
            overflow:hidden;
        }

        .margin-right-1em{
            margin-right:1em;
        }

        .right-margin{
            margin:0 .5em 0 0;
        }

        .margin-bottom-1em {
            margin-bottom:1em;
        }

        .margin-zero{
            margin:0;
        }

        .text-align-center{
            text-align:center;
        }
        
        .navbar-custom {
            color: #00FF00;
            background-color: #00FF00;
        }
        .table-nonfluid {
            width: auto !important;
        }
        </style> 
    
    </head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div id="page-title" class="display-none"></div>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/carefast_project/views/app.php">CAREFAST</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <!-- dropdown navbar create -->
                    <li role="presentation" class="dropdown"><a class="dropdown-toogle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expended="false" style="color: white;">Create <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href='javascript://' id="create_employee">Create Employee</a></li>
                        </ul>
                    </li>
                    
                    <!-- dropdown navbar show -->
                    <li role="presentation" class="dropdown"><a class="dropdown-toogle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expended="false" style="color: white;">Show <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript://" id="show_cso_one">Show CSO 1</a></li>
                            <li><a href="javascript://" id="show_cso_two">Show CSO 2</a></li>
                            <li><a href="javascript://" id="show_cso_three">Show CSO 3</a></li>
                            <li><a href="javascript://" id="show_cso_four">Show CSO 4</a></li>
                            <li><a href="javascript://" id="show_cso_five">Show CSO 5</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- dropdown navbar login -->
                    <li role="presentation" class="dropdown"><a class="dropdown-toogle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expended="false" style="color: white;">Logged as <?php echo $_SESSION['user']; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="<?php if($_SESSION['level'] == '1' || $_SESSION['level'] == '2'){echo 'disabled';}?>"><a href="javascript://" id="show-user" class="<?php if($_SESSION['level'] == '1' || $_SESSION['level'] == '2'){echo 'not-active';}?>">User Control</a></li>
							<li role="separator" class="divider"></li>
                            <li><a href="/keranjangsayur/views/logout.php" id="logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <!--/.nav-collapse -->
        </div>
    </nav>
<br/><br/><br/>
<div class="container">
<div id="page-content"></div>
</div>
<!-- jQuery library -->
<script src="/carefast_project/libs/js/jquery.js"></script>
<script src="/carefast_project/libs/js/chosen/chosen.jquery.js"></script>
<script src="/carefast_project/libs/js/chosen/chosen.jquery.min.js"></script>
 
<!-- bootstrap JavaScript -->
<script src="/carefast_project/libs/js/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/carefast_project/libs/js/script.js"></script>
</body>
</html>