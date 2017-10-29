<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HandsFree 社区</title>
    <meta name="keyword" content="HandsFree hands-free 机器人　底盘　ROS 导航　slam">
    <link rel="icon" href="image/logo/logo_title.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/util.css"/>
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="js/base.js"></script>
</head>
<body>
<?php
$navbar = file_get_contents("./util/nav.html") ;
echo $navbar;
?>

<div class="content">
    <h2>What can HandsFree do?</h2>
    <div class="function_introduction">

        <?php
            define('COMMUNITY_DIR','./configure/community') ;

            function genOneExp($title, $gif, $wiki_url, $introduction_file){
                $introduction_text = file_get_contents($introduction_file) ;
                echo "<div class='row'><h3 class='col-md-12'>$title</h3></div>" ;
                echo "<div class='row'>" ;
                    echo "<div class='col-md-4'><img class='center-block introduce-image' src='$gif'></div>" ;
                    echo "<div class='col-md-8'> ";
                    echo "<p class='col-md-12'>$introduction_text" ;
                    if($wiki_url!="")echo "<br/><a href='$wiki_url'>点击了解更多</a>" ;
                    echo "</p>" ;
                    echo "</div>" ;
                echo "</div>";
                echo "<hr/>" ;
            }

            function readOneExp($file_name){
                $exp_title = "" ; 
                $exp_gif = "" ;
                $exp_introduction = "" ;
                $exp_wiki = "";
                
                $exp_json_content = file_get_contents($file_name) ; 
                $exp_content_array = json_decode($exp_json_content,true) ;

                foreach ($exp_content_array as $key=>$value){
                    if($key == "title") $exp_title = $value ;
                    else if($key == "gif") $exp_gif = $value ;
                    else if($key == "introduction") $exp_introduction = $value ;
                    else if($key == "wiki") $exp_wiki = $value ;
                }
                genOneExp($exp_title, $exp_gif, $exp_wiki, $exp_introduction);
            }


            function readAllExp($dir_name){
                if (!is_dir($dir_name)) return;
                $exp_names = scandir($dir_name);
                $exp_name_size = count($exp_names);

                //to avoid the directory . and ..
                for ($each_file = 2; $each_file < $exp_name_size; $each_file++) {
                    $exp_file_name = $dir_name . "/" . $exp_names[$each_file];
                    if(preg_match('/\w+.json$/',$exp_file_name))readOneExp($exp_file_name);
                }
            }

            readAllExp(COMMUNITY_DIR) ;
        ?>

    </div>
    <div class="clear"></div>

    <div class="ml-mobile">
        <div class="row">
            <h4 class="col-md-12 text-center">他们都在使用HandsFree</h4>
        </div>

        <div class="row">
            <img class="col-md-12 img-responsive" src="image/community/user.jpg"/>
        </div>
    </div>

    <div class="row users pc">
        <div class="col-md-4 text-center">
            <h4>他们都在使用HandsFree</h4>
            <h2>听听他们怎么说</h2>
        </div>
        <div class="col-md-8">
            <div class="row">
                <ul class="users-picture" id="users-picture">
                    <li onclick=changeNameRemark(this) class="active"><a data-target="#name_1"><img src="/image/community/school_1.png" class="img-responsive img-circle"/></a></li>
                    <li onclick=changeNameRemark(this)><a data-target="#name_2"><img src="/image/community/exbot.png" class="img-responsive img-circle"/></a></li>
                    <li onclick=changeNameRemark(this)><a data-target="#name_3"><img src="/image/community/XM.jpg" class="img-responsive img-circle"/></a></li>
                    <li onclick=changeNameRemark(this)><a data-target="#name_4"><img src="/image/community/school_2.jpg" class="img-responsive img-circle"/></a></li>
                    <li onclick=changeNameRemark(this)><a data-target="#name_5"><img src="/image/community/github.jpg" class=" img-responsive img-circle"/></a></li>
                </ul>
            </div>

            <div class="row">
                <ul class="users-name" id="users-name">
                    <li class="active" id="name_1">
                        <h2>布树辉　<span>西北工业大学航空学院教授</span></h2>
                        <hr/>
                        <p class="col-md-12 remark">我们正处在一个人工智能大变革的时代，高智能的软件、机器人越来越多的出现在我们的生活中，在这波浪潮中我们要怎么应对？我觉得大家无可避免的面对了一个非常巨大的挑战和机遇，机器人作为人工智能的载体必将在未来起到越来越重要的作用。未来的20年，我们所处的世界必将发生巨大的变化，所以我们必须面对这样的变化，不管你的专业是什么，其实都与机器人有或多或少的关系。为了更好的学习机器人技术，如果有一套设计精良的机器人平台将会极大加快学习、研究的速度。HandsFree是一个非常优秀的开源机器人平台，使用这个平台可以让你很快就构建一个机器人系统，得益于优秀的架构设计，能够支持多种形态的机器人形态，利用自主开发的开源OpenRE机器人中间件，能够极大的降低机器人程序开发的难度。

                            HandsFree创始人是西工大机器人基地的马文科，他是我见过学生中最有追求、最有理想的学生，和他共同工作的一年中，我深深受到了他那种坚韧不拔、努力学习的感染。受到他的感染，目前HandsFree吸引了20多个成员围绕机械、硬件、软件、算法开展学习、研究工作。他们通过无私的工作在为机器人事业奉献自己的力量，他们身上体现了机器人基地培养出来同学对机器人事业的热爱，看到中国机器人事业发展壮大的希望。他们做出的成果都通过开源的形式共享给大家，能够深切的感受到他们愿意从自身开始，为推动中国机器人开源平台事业向前发展的愿景。

                            Hands Free是一个乐于奉献于机器人事业的团队，希望能为每一个走进机器人世界的爱好者带来便利。Hands Free 理念是：探索，成长，分享，创造一个机会共同成长。如果觉得不错，就一起加入HandsFree的大家庭吧，保证你会在这里得到能力的提升！</p>
                    </li>
                    <li id="name_2">
                        <h2>张瑞雷 <span>易科机器人(exbot)成员</span></h2>
                        <hr/>
                        <p class="col-md-12 remark">自从接触并学习研究机器人系统这10多年过程中，一直在寻找一款上手简易，功能丰富，定制灵活，
                            扩展性强的机器人平台。不仅出于自己测试算法的需要，也是为了方便相关方法的推广和教学，在这期间，
                            不经意间发现了HardsFree。其实我觉得这款平台最大的优势也就是解放双手，不需要自己搭建电路，
                            设计模具等，从而实现Mind-Creative，让我可以更多的去关注机器人的大脑，即算法的开发与测试。
                            这是一款简约不简单ROS机器人平台。
                        </p>
                    </li>
                    <li id="name_3">
                        <h2>刘昌祥 <span>原2011届西工大舞蹈机器人基地家政视觉组成员</span></h2>
                        <hr/>
                        <p class="col-md-12 remark">对于我们这种机械和电子都很苦手的程序员来说，有一个容易上手并且好用的平台，可以节省大量的不必要的时间。
                            HandsFree给我提供了这种便利。设计贴心，组装简单易懂，核心板的排线开始比较难插（第一代），但是掌握技巧以后就很容易组装了。
                            我应该是最早订购HF的那批，拿到的是初代HF原型机（后来才知道那个黄色的膜其实可以撕掉，撕掉以后就变成晶莹剔透，立马又高大上几个档次），尽管是初代，已经可以体会到是研发团队的心血之作。HF的机器帮助我完成了很多实验的验证，包括RL引导的机器人避障行为研究等，
                            在最初选择的时候我也考虑过turtlrbot这些常用的机器人平台，但是HF以它极高的性价比打动了我。选择HF，是最正确的选择。</p>
                    </li>
                    <li id="name_4">
                        <h2>电子科技大学中山学院　<span>中山市嵌入式系统公共实验室</span></h2>
                        <hr/>
                        <p class="col-md-12 remark">HANDSFREE开源项目是一个对ROS学习者来说很好的实验平台，具有高拓展性和鲁棒性。对于掌握了ROS基础知识，
                            急需实物来进一步学习的人提供了一个理想的实践平台，
                            项目全开源也使我们可以在其原有的基础上做适合自己想法的功能。</p>
                    </li>
                    <li id="name_5">
                        <h2>雷一鸣 <span>开源机器人爱好者</span></h2>
                        <hr/>
                        <p class="col-md-12 remark">简而言之，HandsFree 是一套完全开源的基于ROS的自主导航轮式机器人平台。首先相对于 TurtleBot2 只开源了上位机程序，
                            并没有开源底层源码的半开源，HandsFree 不仅开源了底层控制板程序，甚至连控制板的硬件部分都开源出来，免费地提供给爱好者DIY。其次， HandsFree 通信层基于 ros_controller 开发，
                            经过了长时间跨平台的测试，保证了机器人运行过程中的可靠性。最后， HandsFree 使用了 Kinect 或者 Xtion 等成本低，
                            可靠性高的 RGBD 摄像机，使用最为成熟的 gmapping 来作为SLAM的关键技术，因此，HandsFree 能够保证性能出众的同时也能做到低价。
                            总而言之，HandsFree 是一款非常好的ROS平台，不仅可以让新手快速入门学习ROS，又能够让学校企业可以低成本地专注研究集群等热
                            门机器人领域。
                            个人觉得 HandsFree 团队的开源情怀和敬业态度值得敬佩。在国内其实类似的ROS机器人卖家很多，我也接触过其他具体的产品，
                            不过真正让我感受到不一样的地方是 HandsFree 对待买家的态度，电机人为因素烧坏了立马更换、不管是不是买家，只要有人提问了，
                            社区群里的团队成员们也是尽力解答。不论机器人还是开源库， HandsFree 的开源精神都能帮助到更多的西恩ROSer，
                            让更多的人体会到西恩开源的力量。
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>

<?php
$footer = file_get_contents("./util/footer.html") ;
echo $footer ;
?>

</body>
</html>
