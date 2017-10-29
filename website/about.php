<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <title>HandsFree 关于我们</title>
    <link rel="icon" href="image/logo/logo_title.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="css/util.css"/>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="js/base.js"></script>
</head>
<body>
<?php
    $navbar = file_get_contents("./util/nav.html") ;
    echo $navbar;
?>

<nav class="navbar navbar-inverse navbar-font navbar-fixed-top pc" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand active" href="index.html">HandsFree&trade;</a>
        </div>
        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li><a href="#">About Us</a></li>
                <li><a href="robots.php">Robots</a></li>
                <li><a href="community.php">Community</a></li>
                <li><a href="contributors.php">Contributors</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="youku-video">
    <iframe frameborder="0" width="640" height="498" src="https://v.qq.com/iframe/player.html?vid=w0389v55en2&tiny=0&auto=0" allowfullscreen></iframe>
</div>
<div class="header">
    <img src="image/logo/head.png" class="pc" width="100%" height="100%"/>
    <img src="image/logo/logo_handsfree.jpg" class="ml-mobile" width="100%" height="100%"/>
</div>

<div class="row">
    <div class="col-md-12 text-center">
        <b>If you like HandsFree :</b>
        <ul class="git-btn">
            <li>
                <iframe src="https://ghbtns.com/github-btn.html?user=HANDS-FREE&repo=handsfree&type=fork&count=true"
                        frameborder="0" scrolling="0" width="100px" height="20px" title="Fork on GitHub">
                </iframe>
            </li>

            <li>
                <iframe src="https://ghbtns.com/github-btn.html?user=HANDS-FREE&repo=handsfree&type=star&count=true"
                        frameborder="0" scrolling="0" width="100px" height="20px" title="Star on GitHub">
                </iframe>
            </li>

        </ul>
    </div>
</div>

<?php
$footer = file_get_contents("./util/footer.html") ;
echo $footer ;
?>

</body>
</html>