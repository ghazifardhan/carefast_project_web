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
        
        <link href="libs/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet" media="screen" />
        <link href="libs/js/bootstrap/dist/css/bootstrap-chosen.css" rel="stylesheet" />
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
<div class="container">
<!--
<table id="myTable" border="1" class="table table-bordered table-hover table-striped table-condensed">
    <tr>
        <th>Project Code</th>
        <th>Project Name</th>
        <th>Begin Date</th>
        <th>End Date</th>
    </tr>
</table>
<select id="project"></select>
<select id="employee"></select>
-->
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/carefast_new/views/body.php">Carefast</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://localhost/carefast_new/views/cso/create.php">Create Employee</a></li>
                    <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Show Employee <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://localhost/carefast_new/views/cso/show.php?page=1&view=employee_one">CSO 1</a></li>
                        <li><a href="http://localhost/carefast_new/views/cso/show.php?page=1&view=employee_two">CSO 2</a></li>
                        <li><a href="http://localhost/carefast_new/views/cso/show.php?page=1&view=employee_three">CSO 3</a></li>
                        <li><a href="http://localhost/carefast_new/views/cso/show.php?page=1&view=employee_four">CSO 4</a></li>
                        <li><a href="http://localhost/carefast_new/views/cso/show.php?page=1&view=employee_five">CSO 5</a></li>
                    </ul>
                    </li>
                    <li><a href="http://localhost/carefast_new/views/cso/show.pkwt.php?page=1&view=pkwt">PKWT</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
</nav>
<br/><br/><br/>
<div id="page-content"></div>
</div>
<!-- jQuery library -->
<script src="libs/js/jquery.js"></script>
<script src="libs/js/chosen/chosen.jquery.js"></script>
<script src="libs/js/chosen/chosen.jquery.min.js"></script>
 
<!-- bootstrap JavaScript -->
<script src="libs/js/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="libs/js/script.js"></script>
</body>
</html>