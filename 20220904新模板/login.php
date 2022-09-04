<?php 
if ($_POST["passwd"] == '666' /* ←请在单引号内修改密码*/) {
    echo '
    <!-- 可修改区域 开始-->
    
    <input id="title" style="display:none" value="制作VX：suisuianan123"></title>
    <!-- 此处为登录后显示的标题 -->
    
    
    <img style="display: inline-block; width: 100%; max-width: 100%; height: auto;" src="http://tiebapic.baidu.com/tieba/pic/item/241f95cad1c8a78696f369d02209c93d71cf5016.jpg?tbpicau=2022-09-04-22_215a7435e280fc3d54fe5a0592c715c7" />
    <!-- 如果需要多图片，请将上面那行复制到下方，需要展示多少张图片就复制多少行，然后 src="***"改为图片路径 -->
    
    
     
    <video width="100%" height="auto" controls><source src="./video/1.mp4" type="video/mp4">您的浏览器不支持 video 标签。</video>
	<video width="100%" height="auto" controls><source src="./video/2.mp4" type="video/mp4">您的浏览器不支持 video 标签。</video>
    <!-- 如果需要多视频，请将上面那行复制到下方，需要展示多少是疲惫就复制多少行，然后 src="***"改为是视频路径 -->
	
	
    <!-- 可修改区域 结束-->
    ';
}else {
    echo('error password');
    //请勿修改此处
}


?>