<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="HandsFree hands-free 机器人　底盘　ROS OpenRe">
    <title>HandsFree 首页</title>
    <link rel="icon" href="image/logo/logo_title.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/util.css"/>
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="js/base.js"></script>
</head>
<body>
<?php
    $navbar = file_get_contents("util/nav.html") ;
    echo $navbar;
?>


<div class="content">
    <div class="about-handsfree">
        <h2>关于 HandsFree</h2>
        <div class="youku-video">
            <iframe frameborder="0" style="max-width:500px; width: 100%" height="350" src="https://v.qq.com/iframe/player.html?vid=w0389v55en2&tiny=0&auto=0&amp" allowfullscreen></iframe>
        </div>
        <p>
            当你热爱某种事物，你可能会想办法去弥补它身上的缺点，即使意味着会牺牲你一点点，
            我们只是一群呆在大学里幼稚青年，但我们也有着对机器人事业的向往。
        </p>
        <p>
            Hands Free， 顾名思义解放双手。 我们想做到的是能够搭建一个共享的平台，一个友好的易于共同开发的框架。
            Hands Free 从嵌入式平台开始，逐步地扩展到了相应的其他周边，
            为的是让整个机器人的开发过程降低耦合，尽可能地减少一些底层的开发环节，在开发过程中提供了一个更好的交流方式。
            Hands Free 其理念核心是优化开发过程的同时，让设计的 idea 的分享过程更加 Free，是乐于分享的，鼓励分享的。
        </p>
        <p>
            HANDS FREE 是一个面向机器人研究、开发的开源软硬件系统。
            她有完备与科学的框架， 以优秀的嵌入式系统框架为核心， 精良的电路、 机械设计为支撑，帮您快速实现多种形态的机器人。
            本系统包含机器人导航，SLAM，计算机视觉等模块， 并拥有自己上层软件和调试系统。
            她支持国外其他的开源项目， 如 ROS,MPRT, PIXHAWK 等，这一切都为您带来了无比的便捷和快乐！
        </p>
        <p>
            Hands Free Team 是一个乐于奉献于机器人事业的团队，我们希望能为每一个走进机器人世界的学者带来便利。
            HANDS FREE 理念总结成一句话：创造一个机会共同成长。如果你觉得不错的话，就一起加入进来吧！！！
        </p>

    </div>
    <div class="clear"></div>
    <div class="feature-history">
        <h2>The History Of HandsFree</h2>
        <div class="history pc">
            <img src="image/index/history.jpg"/>
        </div>
        <div class="history ml-mobile">
            <img src="image/index/history_mobile.jpg">
        </div>
    </div>
    <div class="clear"></div>
    <div class="openSource">
        <h2>The OpenSource</h2>
        <div class="col-md-4">
            <a><img class="center-block" src="image/logo/openre.jpg"/></a>
            <h3 class="mg-md text-center">Open Source Robot Embedded Library</h3>
            <p>Open Source Robot Embedded Library是机器人嵌入式库。系统目前支持几乎所有运动类型的移动机器人模型。
                只要简单的编写配置描述文件，将固件下载到我们配套的主控板上，就可以完成一个完整的机器人底层平台的开发。
                其作用与国外知名的无人机开发架构 pixhawk 类似，只不过 pixhwak 主要是面向飞行器，
                而 OpenRE 则是面向多模态机器人的。
            </p>
            <p>
                <b>详细内容：</b>
                <a href="https://github.com/HANDS-FREE/HANDS-FREE.github.io/wiki/7.-OpenRE-Tutorial">点击了解更多</a>
            </p>
            <p>
                <b>源码：</b>
                <a href="https://github.com/HANDS-FREE/OpenRE">点击查看源码</a>
            </p>
        </div>
        <div class="col-md-4">
            <a><img class="center-block" src="image/logo/platform.jpg"/></a>
            <h3 class="mg-md text-center">Multi platform support for your robots</h3>
            <p>我们的开发项目和开发平台是多样化的，比如二轮，三轮的移动机器人，四旋翼固定翼飞行器等，
                重复造轮子的问题是机器人学者和创业者最常遇到的问题，好的系统是要求很好的泛性的，能够适应大部分平台，
                避免了重复劳动的弊端，这就要求我们的产品更加多元化。
                在多模态机器人平台搭建方面，研究的主要内容是设计精良的机械和电路系统。
                机械系统包括各种模型的机器人躯体、机械臂、云台等。电路则包含控制系统，驱动电路，电源管理系统，硬件调试等方面。
                为了促进社区交流，我们开源了大部分的设计资料.
            </p>
            <p>
                <b>设计资料：</b>
                <a href="https://pan.baidu.com/s/1nuSvs7Z#list/path=%2FHANDSFREE%2FHands_Free_Release%2F2_Hardware&parentPath=%2FHANDSFREE">点击获取</a>
            </p>

        </div>
        <div class="col-md-4">
            <a><img class="center-block" src="image/logo/ros.jpg"/></a>
            <h3 class="mg-md text-center">Ros packages for HandsFree</h3>
            <p>主要是基于前两个任务，结合团队在 SLAM， 物体识别，机器人任务规划等研究，以及国外知名的 ROS 等开源项目
                ，搭建整个机器人系统，实现一些应用:
                    <span class="center-block"><b>1.自主移动模块框架搭建</b></span>
                    <span class="center-block"><b>2.物体识别模块</b></span>
                    <span class="center-block"><b>3.机械臂控制模块</b></span>
                    <span class="center-block"><b>4.多机器人协同</b></span>
            <p>
                <b>源码：</b>
                <a href="https://github.com/HANDS-FREE/handsfree">点击查看源码</a>
            </p>
        </div>

    </div>
</div>
<?php
    $footer = file_get_contents("./util/footer.html") ;
    echo $footer ;
?>
</body>
</html>
