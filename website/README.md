## handsfree_website

*This README is only for HandsFree's website developer!!*
#### This is a website for [HandsFree](45.76.197.197:80)

> #### Enviroment
- 1.apache2
- 2.php7.0
- 3.BootStrap
- 4.jquery
- 5.windows or linux

> #### File Struct

- ├── bootstrap-3.3.7-dist
- ├── configure　--------- (contains all configure file)
- ├── robots  -----------(contains all pages of robots)
- ├── css
- ├── js
- ├── image
- ├── community.php -----------(community page)
- ├── index.php -------------(index page)
- ├── contributors.php -------------(contributor page)
- └── util



> #### Usage


##### 1.How to add a new contributor?

```
{
    "Name": "舞蹈机器人基地",
    "Image": "/image/contributors_picture/dancerobot.jpg",
    "研究方向": {
        "1": "舞蹈机器人",
        "2": "救援机器人",
        "3": "家政机器人",
        "4": "篮球机器人"
    },
    "家政GitHub": "https://github.com/xm-project",
    "救援GitHub": "https://github.com/team-explorer-rescue-robot",
    "篮球Github": "https://github.com/nwpu-basketball-robot"
}
```

###### the result of above json configure file
![](https://github.com/HANDS-FREE/HANDS-FREE.github.io/blob/master/images/HandsFree/handsfree_website_contributor.jpg)


##### 2.How to edit robot's introduction ?
```
{
 	"name": "Mini",
 	"images": [
  		"/image/robots/mini/m_1.jpg",
  		"/image/robots/mini/m_2.jpg",
  		"/image/robots/mini/m_3.jpg",
  		"/image/robots/mini/m_4.jpg"
 	],
 	"introduction_file": "../configure/robots/mini/mini_introduction",
 	"gif": [
  		"/image/robots/mini/HF_mini_assemble_good.gif",
  		"/image/robots/mini/HF_mini_turn_around_medium.gif"
 	],
 	"gif_introduction": "../configure/robots/mini/gif_introduction",
 	"details": {
  		"空&nbsp;&nbsp;&nbsp;重": "<2kg",
  		"直&nbsp;&nbsp;&nbsp;径": "23cm",
  		"高&nbsp;&nbsp;&nbsp;度": "20.4cm(无云台)33.3cm",
  		"最大速度": "80cm/s",
  		"最大承载能力": "2kg",
  		"支持的控制器": "PC 树莓派 pcduino TX1 TK1",
  		"支持的传感器": "RplidarA1/A2 Hokuyo URG-04L/UTM-30Lx Xtion Kinect1/2",
  		"支持的设备": "HF云台 双目摄像头 单目高清摄像头"
 	},
 	"wiki":"https://github.com/HANDS-FREE/HANDS-FREE.github.io/wiki/4.1-Mini"
}
```
images ------ array type (contains all the images which will be display in the bootstrap carousel)

introduction_file ------string type (path of a file in which contains the introduction text under the bootstrap carousel)

###### the result of above json file's "images" and "introduction_file"
![](https://github.com/HANDS-FREE/HANDS-FREE.github.io/blob/master/images/HandsFree/handsfree_website_carousel_introduction.jpg)


details ------ json type (contains some some details about robot)

###### the result of above json file's "detail"
![](https://github.com/HANDS-FREE/HANDS-FREE.github.io/blob/master/images/HandsFree/handsfree_website_detail.jpg)

gif -------- array type (contains all the gif files which will be shown on the bottom of this page)

gif_introduction ------- string type (path of a file in which contains the introduction text under the gif)

###### the result of above json file's "gif" and "gif_introduction"
![](https://github.com/HANDS-FREE/HANDS-FREE.github.io/blob/master/images/HandsFree/handsfree_website_machine_introduction.jpg)

##### 3.How to add a new robot introduction(gif)?

```
{
 	"title": "Mapping And Navigation",
  	"gif": "/image/community/jilong_navigation_medium.gif",
  	"introduction": "./configure/community/exp_1_introduction",
  	"wiki": "https://github.com/HANDS-FREE/HANDS-FREE.github.io/wiki/7.2-Mapping-Navigation"
}
```

###### the result of above json configure file
![](https://github.com/HANDS-FREE/HANDS-FREE.github.io/blob/master/images/HandsFree/handsfree_website_experiment.jpg)
