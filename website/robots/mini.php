<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="HandsFree hands-free 机器人　底盘　ROS OpenRe MiNi 集群">
    <title>HandsFree 产品</title>
    <link rel="icon" href="../image/logo/logo_title.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/util.css"/>
    <script src="../js/jquery-3.2.0.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="../js/base.js"></script>
</head>
<body>
<?php
$navbar = file_get_contents("../util/nav.html") ;
echo $navbar;
?>


<?php
define('GIRAFFE_INTRODUCTION','../configure/robots/mini/mini.json') ;
$robot_name="";
$robot_carousel_images = array() ;
$robot_introduction_file = "" ;
$robot_gif = array() ;
$robot_gif_introduction = "" ;
$robot_detail = array() ;
$robot_wiki_url = "" ;

//to read the .json file
$robot_json = file_get_contents(GIRAFFE_INTRODUCTION) ;
$robot_infor_array = json_decode($robot_json,true) ;
foreach ($robot_infor_array as $key=>$value){
    if($key == "name")$robot_name = $value ;
    else if($key == "images")$robot_carousel_images = $value ;
    else if($key == "gif")$robot_gif = $value ;
    else if($key == "introduction_file")$robot_introduction_file = $value ;
    else if($key == "gif_introduction")$robot_gif_introduction = $value ;
    else if($key == "details")$robot_detail = $value ;
    else if($key == "wiki")$robot_wiki_url = $value ;
}
?>

<div class="content">
    <div class="row">
        <div id="robot_introduction" class="carousel carousel-fade slide" data-interval="false">
            <div class="carousel-inner">
                <?php
                //to load the carousel of giraffe
                $image_count = 0 ;
                foreach ($robot_carousel_images as $each_image){
                    if($image_count==0)echo "<div class='item active'>" ;
                    else echo "<div class='item'>" ;
                    echo "<img src='$each_image' />" ;
                    echo "</div>" ;
                    $image_count++ ;
                }
                ?>
            </div>
            <a class="carousel-control left" href="#robot_introduction" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control right" href="#robot_introduction" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>

    <div class="robot-introduction">
        <div class="row introduction-text">
            <p class="col-md-12"> &nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                // to load the introduction image for giraffe
                $introduction_text = file_get_contents($robot_introduction_file) ;
                echo $introduction_text ;
                ?>
            </p>
        </div>
        <div class="row introduction-detail">
            <?php
            $count = 0 ;
            $detail_len = count($robot_detail) ;
            foreach ($robot_detail as $key=>$value){
                if($count%3==0)echo "<div class='row'>" ;
                if($count+2>=$detail_len)echo "<div class='col-md-6'>" ;
                elseif($count%3==1)echo "<div class='col-md-3'>" ;
                else echo "<div class='col-md-4'>" ;

                echo "<p class='col-md-12'>" ;
                echo "<span class='detail-key'>$key</span>" ;
                echo "<span class='detail-value'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$value</span>" ;
                echo "</p>" ;
                echo "</div>" ;
                if($count%3==2){
                    echo "</div>" ;
                    echo "<hr class='pc'/>" ;
                }
                $count++ ;
            }
            if($count%3!=0){
                echo "</div>" ;
                echo "<hr class='pc'/>" ;
            }
            ?>
        </div>
    </div>

    <div class="introduction-machine">
        <h3>
            About
            <?php
            echo "$robot_name" ;
            ?>
        </h3>

        <div class="row gif-machine">
            <?php
            foreach ($robot_gif as $each_gif) {
                echo "<img class='img-responsive center-block col-md-6' src='$each_gif' style='height: 180px'/>";
            }
            ?>
        </div>
        <div class="row  gif-introduction">
            <div class="col-md-12">
                <?php
                $gif_introduction_text = file_get_contents($robot_gif_introduction) ;
                echo "<p class='col-md-12'>$gif_introduction_text</p>" ;
                echo "<div class='col-md-12'><a target='_blank' href='$robot_wiki_url'>点击了解更多</a></div>"
                ?>
            </div>
        </div>
    </div>

    <div class="row buy-join">
        <div class="col-md-6">
            <a class="col-md-12 text-center center-block"
               target="_blank"
               href="https://item.taobao.com/item.htm?spm=a1z10.3-c.w4002-13224047684.10.FWtdIY&id=547795026078">
                <h3>购买Mini</h3>
                <h4>获得一款稳定的实验平台</h4>
            </a>
        </div>
        <div class="col-md-6">
            <a class="col-md-12 text-center center-block"
               target="_blank"
               href="https://github.com/hands-free">
                <h3>加入HandsFree</h3>
                <h4>为HandsFree贡献自己的力量</h4>
            </a>
        </div>
    </div>
</div>

<?php
$footer = file_get_contents("../util/footer.html") ;
echo $footer ;
?>
</body>
</html>
