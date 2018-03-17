<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WEBTE2: Zadanie 4</title>
    <meta name="author" content="Michal Potfaj">
    <meta name="keyword" content="canvas, doodle, websockets">
    <link rel="author" href="https://github.com/Dreadlocky"/>
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
    <!-- Application CSS -->
    <link href="Themes/app.css" type="text/css" rel="stylesheet"/>
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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="canvas.php">Canvas</a></li>
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
    <div class="jumbotron">
        <h1>WEBTE2: Zadanie 4</h1>
        <p>
            Zadanie je vypracované v záložke <a href="canvas.php">Canvas</a>.<br>
            Pre demonštráciu, otvorte stránku v dvoch oknách. Na plátno v jednom okne niečo nakreslite.
            To, čo nakreslíme v jednom okne, sa zakreslí aj do druhého okna. Takto je môžné, aby dve osoby alebo aj viac
            osôb kreslilo
            do <strong>canvasu</strong> súčasne, pričom každý vidí, čo ostatní kreslia. Hrúbku a farbu kresliaceho pera
            môže mať každý nastavenú
            podľa seba.
        </p>
        <h3>Potrebná inštalácia</h3>
        <p>
            <code>sudo apt-get install nodejs npm</code><br>
            <code>sudo apt-get install nodejs-legacy</code>
        </p>
        <h3>Spustenie servera</h3>
        <p>
            Presunúť sa do zložky projektu a spustiť následovný príkaz:<br>
            <code>sudo node server.js</code>
        </p>
        <h3>Použité knižnice</h3>

        <ul>
            <li><p>jscolor Color Picker: <a href="http://jscolor.com/">link</a></p></li>
            <li><p>Bootstrap v3.3.7: <a href="https://getbootstrap.com/docs/3.3/">link</a></p></li>
            <li><p>jQuery v3.3.1: <a href="https://jquery.com/download/">link</a></p></li>
        </ul>
    </div>
    <h2>Minulé zadania</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Názov</th>
            <th scope="col">Odkaz</th>
            <th scope="col">Poznámka</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Zadanie 1</td>
            <td><a href="http://147.175.98.204/Zadanie01/index.php">http://147.175.98.204/Zadanie01/index.php</a></td>
            <td></td>
        </tr>
        <tr>
            <td>Zadanie 2</td>
            <td>
                <a href="http://147.175.98.204/Zadanie_02_01/index.php">http://147.175.98.204/Zadanie_02_01/index.php</a>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>Zadanie 3</td>
            <td><a href="http://www.zadanie03.tk/Zadanie_03/index.php">http://www.zadanie03.tk/Zadanie_03/index.php</a>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>Zadanie 4</td>
            <td><a href="http://147.175.98.204/Zadanie_04/index.php">http://147.175.98.204/Zadanie_04/index.php</a></td>
            <td>Alternatíva 2</td>
        </tr>
        </tbody>
    </table>
</div>

<footer class="footer">
    <div class="container">
        <span class="text-muted">&copy; Copyright <?php echo date("Y"); ?>, Created by <a
                    href="#">Michal Potfaj</a></span>
        <span class="navbar-right">
            <a class="btn btn-social-icon btn-twitter" href="https://twitter.com/Dreadlocky_DL"><span
                        class="fa fa-twitter"></span> </a>
        <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/potfaj"><span
                    class="fa fa-facebook"></span> </a>
        <a class="btn btn-social-icon btn-github" href="https://github.com/Dreadlocky"><span
                    class="fa fa-github"></span> </a>
        <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/potfajmichal/"><span
                    class="fa fa-instagram"></span> </a>
        </span>
    </div>
</footer>

</body>
</html>