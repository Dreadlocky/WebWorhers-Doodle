<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Michal Potfaj">
    <meta name="keyword" content="canvas, doodle, websockets">
    <link rel="author" href="https://github.com/Dreadlocky"/>
    <title>Canvas</title>
    <!-- Bootstrap CSS cource: https://getbootstrap.com/docs/3.3/ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- jQuery source: https://jquery.com/ -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JavaScript source: https://getbootstrap.com/docs/3.3/ -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <!-- Application JavaScript using jQuery -->
    <script rel="script" src="Scripts/app.js"></script>
    <!-- Application CSS -->
    <link href="Themes/app.css" type="text/css" rel="stylesheet"/>
    <!-- Color picker JavaScript cource:http://jscolor.com/ For non commercial use only -->
    <script src="ColorPicker/jscolor.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://147.175.98.204/Zadanie_04/index.php">Zadanie 4</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="navbar-select-active" class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="canvas.php">Canvas</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other assignments<span
                                class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="http://147.175.98.204/Zadanie01/index.php">Zadanie 1</a></li>
                        <li><a href="http://147.175.98.204/Zadanie_02_01/index.php">Zadanie 2</a></li>
                        <li><a href="http://www.zadanie03.tk/Zadanie_03/index.php">Zadanie 3</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div id="tools" class="col-lg-3">
            <h2>Tools</h2>
            <hr>
            <div class="well">
                <div class="form-group">
                    <label for="color-picker">Select color:</label>
                    <input id="color-picker" class="jscolor" value="000000" data-toggle="tooltip"
                           title="Select color for drawing pen">
                </div>
                <div class="form-group">
                    <label for="pen-thickness">Pen thickness:</label>
                    <input id="pen-thickness" type="range" min="1" max="100" value="5" data-toggle="tooltip"
                           title="Select thickness of drawing pen"/>
                </div>
                <div class="form-group">
                    <label for="clear-canvas">Clear canvas:</label>
                    <button id="clear-canvas" class="btn btn-default btn-sm" title="" onclick="clear()">Clear</button>
                </div>
                <div class="form-group">
                    <label>Download image:</label>
                    <a href="#" class="button" id="btn-download" download="my-file-name.png"
                       data-toggle="tooltip" title="Download drawing space as image">Download</a>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <h2>Drawing space</h2>
            <canvas id="drawCanvas" class="drawCanvas"></canvas>
        </div>
    </div>
</div>
<img src="#" id="mirror" class="mirror" alt="Image from canvas"/>

<footer class="footer">
    <div class="container">
        <span class="text-muted">&copy; Copyright <?php echo date("Y"); ?>, Created by <a
                    href="#">Michal Potfaj</a></span>
        <span class="navbar-right">
            <a class="btn btn-social-icon btn-twitter" href="#"><span class="fa fa-twitter"></span> </a>
        <a class="btn btn-social-icon btn-facebook" href="#"><span class="fa fa-facebook"></span> </a>
        <a class="btn btn-social-icon btn-github" href="https://github.com/Dreadlocky"><span
                    class="fa fa-github"></span> </a>
        <a class="btn btn-social-icon btn-instagram" href="#"><span class="fa fa-instagram"></span> </a>
        </span>
    </div>
</footer>
</body>
</html>