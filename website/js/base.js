/**
 * Created by liao on 17-4-4.
 */

$(document).ready(function(){
    $('a[data-toggle="tooltip"]').tooltip({
        animated: 'fade',
        html: true
    });
    $("#go-top").click(function () {
        $('html,body').animate({scrollTop:0},800) ;
    });
});

$(window).on('scroll',function () {
    if($(window).scrollTop()>$(window).height()){
        $("#go-top").css('visibility','visible') ;
        $("#go-top").fadeIn() ;
    }else{
        $("#go-top").fadeOut() ;
    }
}) ;

function clearActive(id_name){
    var sub_menu_li = document.getElementById(id_name).getElementsByTagName("li") ;
    for(var each_li = 0; each_li < sub_menu_li.length ; each_li++){
        $(sub_menu_li[each_li]).removeClass('active') ;
    }
}

function loadXmlDoc(source_id,target_id) {
    var xmlhttp ;
    xmlhttp = new XMLHttpRequest() ;
    xmlhttp.onreadystatechange=function () {
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
            clearActive("sub-menu") ;
            $(source_id).addClass('active') ;
            // document.getElementById(target_id).innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST","handlers/community_handler.php",true) ;
    var post_data="target_html="+document.getElementById(target_id).getAttribute("target_html") ;
    xmlhttp.send(post_data) ;
}

function changeNameRemark(source_id){
    var target_href = source_id.getElementsByTagName("a") ;
    var target_id =  target_href[0].getAttribute("data-target") ;
    clearActive("users-picture") ;
    clearActive("users-name") ;
    $(source_id).addClass("active") ;
    $(target_id).addClass("active") ;
}