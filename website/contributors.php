<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="布树辉 李中健 西工大舞蹈机器人基地 HandsFree">
    <title>HandsFree 贡献者</title>
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

<div class="content">
    <div class="contributors">
        <h2>The Developer</h2>
        <hr/>
        <?php
        define("CONTRIBUTORS_DIR","./configure/contributors") ;

        //to generate a table
        function genPeopleTable($name , $picture , $map_details){
            echo "<div class='col-md-6 people'>" ;
            echo "<p class='people-name'>$name</p>" ;
            echo "<div class='row'>" ;
            //to draw the image of the people
            echo "<div class='col-md-4 people-image'>" ;
            echo "<img class='center-block'  src='$picture'>" ;
            echo "</div>" ;//end for people image

            echo "<div class='col-md-8 people-detail'>" ;
            foreach($map_details as $key=>$value){
                $output_html = "<b>$key :</b>" ;
                if(gettype($value)=="array")$value = implode('、',$value) ;
                //to check whether it is a link
                if(preg_match('/^http[s]?:\/\//',$value))$output_html = $output_html."<a href=\"$value\">$value</a>";
                else $output_html = $output_html."$value" ;
                echo "<p>$output_html</p>" ;
            }
            echo "</div>";//end for class col-md-8
            echo "</div>";//for class row
            echo "</div>";//for class col-md-6
        }

        function readOneContributor($file_name){
            $people_picture="" ;
            $people_name = "" ;
            $people_details = array() ;
            $contributor_infor_json = file_get_contents($file_name) ;
            $contributor_infor_array = json_decode($contributor_infor_json,true) ;
            foreach ($contributor_infor_array as $key=>$value){
                if($key == "Image")$people_picture = $value ;
                else if($key=="Name")$people_name = $value ;
                else $people_details[$key] = $value ;
            }
            genPeopleTable($people_name,$people_picture,$people_details) ;
        }

        function readContributor($dir_name){
            if(!is_dir($dir_name))return ;
            $contributor_names = scandir($dir_name) ;
            $contributor_name_size = count($contributor_names) ;

            //to avoid the directory . and ..
            for($each_file = 2 ; $each_file<$contributor_name_size ;$each_file++){
                $contributor_file_name = $dir_name."/".$contributor_names[$each_file] ;
                if($each_file%2==0) echo "<div class='row'>" ;
                readOneContributor($contributor_file_name) ;
                if($each_file%2==1) echo "</div>" ;
            }
            echo "</div>";
        }

        readContributor(CONTRIBUTORS_DIR) ;
        ?>
    </div>
</div>

<?php
$footer = file_get_contents("./util/footer.html") ;
echo $footer ;
?>

</body>
</html>
