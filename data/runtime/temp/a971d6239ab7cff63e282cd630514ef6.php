<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:29:"./template/pc/view_images.htm";i:1571728724;s:57:"E:\phpstudy\EyouCMS-1.4.9-UTF8-SP2\template\pc\header.htm";i:1587952662;s:57:"E:\phpstudy\EyouCMS-1.4.9-UTF8-SP2\template\pc\banner.htm";i:1571728724;s:57:"E:\phpstudy\EyouCMS-1.4.9-UTF8-SP2\template\pc\footer.htm";i:1571728724;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<!--页面seo标题-->
<title><?php echo $eyou['field']['seo_title']; ?></title>
<!--页面seo描述-->
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<!--页面seo关键词-->
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<!--网站地址栏图标-->
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/amazeui.min.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/app.css","","",""); echo $__VALUE__; ?>
<!--[if lt IE 9]>
<div class="notsupport">
	<h1>:( 非常遗憾</h1>
	<h2>您的浏览器版本太低，请升级您的浏览器</h2>
</div>
<![endif]-->
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/amazeui.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/app.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/piccontent.min.js","","",""); echo $__VALUE__; ?>

</head>
<body>
<!--网站公用头部——开始-->
<div class="top">
  <div class="width">
	<div class="user">
		<?php  $tagUser = new \think\template\taglib\eyou\TagUser; $__LIST__ = $tagUser->getUser("open", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__;  $tagUser = new \think\template\taglib\eyou\TagUser; $__LIST__ = $tagUser->getUser("cart", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
        <a href="<?php echo $field['url']; ?>" id="<?php echo $field['id']; ?>" >购物车(<font color="red" id="<?php echo $field['cartid']; ?>">0</font>)</a>
         <?php echo $field['hidden']; endif; $field = [];  $tagUser = new \think\template\taglib\eyou\TagUser; $__LIST__ = $tagUser->getUser("login", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
		<a href="<?php echo $field['url']; ?>" id="<?php echo $field['id']; ?>">登录</a>　
		 <?php echo $field['hidden']; endif; $field = [];  $tagUser = new \think\template\taglib\eyou\TagUser; $__LIST__ = $tagUser->getUser("reg", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
		<a href="<?php echo $field['url']; ?>" id="<?php echo $field['id']; ?>">注册</a> 
		 <?php echo $field['hidden']; endif; $field = [];  $tagUser = new \think\template\taglib\eyou\TagUser; $__LIST__ = $tagUser->getUser("logout", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
		<a href="<?php echo $field['url']; ?>" id="<?php echo $field['id']; ?>">退出</a> 
		 <?php echo $field['hidden']; endif; $field = []; endif; $field = []; ?>
	</div>	
  </div>
</div>
 <div class="width header">
  <div class="fl"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>"></a></div>
  <div class="fr">
     <div class="tel"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></div>
    
    </div>
  <div class="clear"></div>
</div>
    
<div class="bg_nav">
        <div class="width">
        	<ul class="nav">
             <li class="<?php if(\think\Request::instance()->param('m') == 'Index'): ?>hover<?php endif; ?>"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" title="首页">首页</a></li>
			 <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 60; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "hover", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
			 <li class="<?php echo $field['currentstyle']; ?>"><a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a>
			  <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
			  <ul class="subnav">
			    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
				 <li><a href="<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a>
	             <?php if(!(empty($field2['children']) || (($field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator ) && $field2['children']->isEmpty()))): ?>
		            <ul class="subnav2">
						<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field2['children']) || $field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field2['children']) ? array_slice($field2['children'],0,100, true) : $field2['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field3): $field3["typename"] = text_msubstr($field3["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field3;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
						 <li><a href="<?php echo $field2['typeurl']; ?>"><?php echo $field3['typename']; ?></a> </li>
						<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field3 = []; ?>   
		            </ul> 
		         <?php endif; ?>  
		         </li>
			    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>   
			  </ul>
			 <?php endif; ?>
			 </li>
		 	 <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
        </div>
</div>

<!--网站公用头部——结束-->
<!--网站公用自定义文件——开始-->
<!--判断后台是否有输出图片，没有则显示默认图片开始-->
<div class="bg_inner" 
<?php $toplitpic = gettoptype($eyou['field']['typeid'],"litpic"); if(empty($toplitpic) || (($toplitpic instanceof \think\Collection || $toplitpic instanceof \think\Paginator ) && $toplitpic->isEmpty())): ?>
style="background: url(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/cate_bg_<?php echo gettoptype($eyou['field']['typeid'],'id'); ?>.jpg) center center no-repeat;"
<?php else: ?>
style="background: url(<?php echo gettoptype($eyou['field']['typeid'],'litpic'); ?>) center center no-repeat;"
<?php endif; ?>
 >
 <!--判断后台是否有输出图片，没有则显示默认图片结束-->
  <div class="banner_inner width" >
    <div class="con"><?php echo $eyou['field']['typename']; ?><span><?php echo $eyou['field']['englist_name']; ?></span>
    </div>
  </div>
</div>




<!--网站公用自定义文件——结束-->
<div class="width inner_container">
<!--当前位置调用-->
<ol class="am-breadcrumb">
    <li><i class="am-icon-home"></i> <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", ""); echo $__VALUE__; ?></li>
  </ol>
  <div class="news_show">
      <div class="main"> 
  <!--弹出层开始-->
  <div class="bodymodal"></div>
  <!--播放到第一张图的提示-->
  <div class="firsttop">
    <div class="firsttop_right">
      <div class="close2"> <a class="closebtn1" title="关闭" href="javascript:void(0)"></a> </div>
      <div class="replay">
        <h2 id="div-end-h2"> 已到第一张图片了。 </h2>
        <p> <a class="replaybtn1" href="javascript:;">重新播放</a> </p>
      </div>
      <div class="pictwo">
        <ul>
          <?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("pre");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 100, false); ?>
         <li><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" /></a>
            <div class="imgdivtext"> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>">上一图集</a> </div>
          </li>
         <?php else: ?>
           <li><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/nimg.png" alt="<?php echo $field['title']; ?>" /></a>
            <div class="imgdivtext"> <a>没有上一图集了</a> </div>
          </li>
         <?php endif; $field = [];  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("next");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 100, false); ?>
         <li><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" /></a>
            <div class="imgdivtext"> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>">下一图集</a> </div>
          </li>
         <?php else: ?>
           <li><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/nimg.png" alt="<?php echo $field['title']; ?>" /></a>
            <div class="imgdivtext"> <a>没有上一图集了</a> </div>
          </li>
         <?php endif; $field = []; ?>     
        </ul>
      </div>
      <div class="returnbtn"> <a href="<?php echo $eyou['field']['typeurl']; ?>">返回列表</a> </div>
    </div>
  </div>
  <!--播放到最后一张图的提示-->
  <div class="endtop">
    <div class="firsttop_right">
      <div class="close2"> <a class="closebtn2" title="关闭" href="javascript:void(0)"></a> </div>
      <div class="replay">
        <h2 id="H1"> 已到最后一张图片了。 </h2>
        <p> <a class="replaybtn2" href="javascript:;">重新播放</a> </p>
      </div>
      <div class="pictwo">
        <ul>
         <?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("pre");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 100, false); ?>
         <li><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" /></a>
            <div class="imgdivtext"> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>">上一图集</a> </div>
          </li>
         <?php else: ?>
           <li><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/nimg.png" alt="<?php echo $field['title']; ?>" /></a>
            <div class="imgdivtext"> <a>没有上一图集了</a> </div>
          </li>
         <?php endif; $field = [];  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("next");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 100, false); ?>
         <li><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" /></a>
            <div class="imgdivtext"> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>">下一图集</a> </div>
          </li>
         <?php else: ?>
           <li><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/nimg.png" alt="<?php echo $field['title']; ?>" /></a>
            <div class="imgdivtext"> <a>没有上一图集了</a> </div>
          </li>
         <?php endif; $field = []; ?>             
        </ul>
      </div>
      <div class="returnbtn"> <a href="<?php echo $eyou['field']['typeurl']; ?>">返回列表</a> </div>
    </div>
  </div>
  <!--弹出层结束--> 
  <!--图片特效内容开始-->
  <div class="piccontext">
    <h2> <?php echo $eyou['field']['title']; ?> </h2>
    <div class="source">
      <div class="source_left"> 作者：<?php echo $eyou['field']['author']; ?><span><?php echo MyDate('Y-m-d H:i:s',$eyou['field']['add_time']); ?></span> </div>
      <div class="source_right">
        <div class="support"> 支持<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/jiantou1.jpg" />键翻阅图片 </div>
        <span>|</span><a href="javascript:;" class="list">列表查看</a> </div>
      <div class="source_right1"> <a href="javascript:;" class="gaoqing">高清查看</a> </div>
    </div>
    <!--大图展示-->
    <div class="picshow">
      <div class="picshowtop">
          <a href="#"><img src="" alt="" id="pic1" curindex="0" /></a>
          <a id="preArrow" href="javascript:void(0)" class="contextDiv" title="上一张"><span id="preArrow_A"></span></a>
          <a id="nextArrow" href="javascript:void(0)" class="contextDiv" title="下一张"><span id="nextArrow_A"></span></a>
      </div>
      <div class="picshowtxt">
       
        <div class="picshowtxt_left"><span>1</span>/<i><?php echo count($eyou['field']['image_list']); ?></i></div>
        
        <div class="picshowtxt_right"></div>
      </div>
      <div class="picshowlist"> 
        <!--上一条图库-->
        <?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("pre");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 100, false); ?>
         <div class="picshowlist_left">
          <div class="picleftimg"> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" /></a> </div>
          <div class="piclefttxt"> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><?php echo $field['title']; ?></a> </div>
        </div>
         <?php else: ?>
        <div class="picshowlist_left">
          <div class="picleftimg"> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/nimg.png" alt="<?php echo $field['title']; ?>" /></a> </div>
          <div class="piclefttxt"> <a>没有上一篇了</a> </div>
        </div>
        <?php endif; $field = []; ?>
        <div class="picshowlist_mid">
          <div class="picmidleft"> <a href="javascript:void(0)" id="preArrow_B"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/left1.jpg" alt="上一个" /></a> </div>
          <div class="picmidmid">
            <ul>
             <?php if(is_array($eyou['field']['image_list']) || $eyou['field']['image_list'] instanceof \think\Collection || $eyou['field']['image_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['image_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
              <li> <a href="javascript:void(0);"><img src="<?php echo $field['image_url']; ?>" alt="<?php echo $eyou['field']['title']; ?>" bigimg="<?php echo $field['image_url']; ?>" text="<?php echo $eyou['field']['title']; ?>" /></a></li>
              <?php echo isset($field["ey_1563185380"])?$field["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field["ey_1563185376"]))?$field["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
          </div>
          <div class="picmidright"> <a href="javascript:void(0)" id="nextArrow_B"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/right1.jpg" alt="下一个" /></a> </div>
        </div>
        <!--下一张图库新闻-->
        <?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("next");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 100, false); ?>
         <div class="picshowlist_right">
          <div class="picleftimg"> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" /></a> </div>
          <div class="piclefttxt"> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><?php echo $field['title']; ?></a> </div>
        </div>
         <?php else: ?>
        <div class="picshowlist_left">
          <div class="picleftimg"> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/nimg.png" alt="<?php echo $field['title']; ?>" /></a> </div>
          <div class="piclefttxt"> <a>没有下一篇了</a> </div>
        </div>
        <?php endif; $field = []; ?>
      </div>
    </div>
    
    <!--列表展示-->
    <div class="piclistshow">
      <ul>
        <?php if(is_array($eyou['field']['image_list']) || $eyou['field']['image_list'] instanceof \think\Collection || $eyou['field']['image_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['image_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li>
          <div class="picimg"><img src="<?php echo $field['image_url']; ?>" alt="<?php echo $eyou['field']['title']; ?>" /></div>
          <div class="pictxt">
            <h3><?php echo $eyou['field']['title']; ?><span>(<?php echo $i; ?>/<?php echo count($eyou['field']['image_list']); ?>)</span></h3>
          </div>
        </li>
        <?php echo isset($field["ey_1563185380"])?$field["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field["ey_1563185376"]))?$field["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
      </ul>
    </div>
  </div>
</div>
      <div class="clear"></div>
      <?php echo $eyou['field']['content']; ?> 
      <div class="clear"></div>
    <!--上下篇——开始-->
    
    <!--上下篇——结束-->
    <hr class="am-margin-top-lg">
    <!--tag标签——开始-->
    <?php if(!(empty($eyou['field']['tags']) || (($eyou['field']['tags'] instanceof \think\Collection || $eyou['field']['tags'] instanceof \think\Paginator ) && $eyou['field']['tags']->isEmpty()))): ?>
    <div class="tags"><span class="am-icon-tags"></span> 标签：
    <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagTag = new \think\template\taglib\eyou\TagTag; $_result = $tagTag->getTag(0, $typeid, $aid, 100, "now", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 100, true) : $_result->slice(0, 100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
		<a href="<?php echo $field['link']; ?>"  <?php echo $field['target']; ?>><?php echo $field['tag']; ?></a>
	<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; unset($aid); $field = []; ?>
	</div>
	<?php endif; ?>
	<!--tag标签——结束-->
  </div>
  <div class="clear"></div>
</div>
<!--网站公用底部——开始-->
<div class="bg_footer">
    	<div class="width footer">
        	<div class="fl">
            	<h1><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></h1>
                <h5></h5>
                <?php  $tagSearchform = new \think\template\taglib\eyou\TagSearchform; $_result = $tagSearchform->getSearchform("","","","","","default"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
				  <form method="get" action="<?php echo $field['action']; ?>">
					<?php echo $field['hidden']; ?>
                	<input type="text" name="keywords" placeholder="请输入关键字">
					<input type="submit" value="搜索">
                </form>
				<?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
            </div>
            <div class="fr">
            	<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 4; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <div class="left">
                    <ul>
                        <h6><?php echo $field['typename']; ?></h6>
                        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
						<li><a href="<?php echo $field2['typeurl']; ?>" title="<?php echo $field2['typename']; ?>"><?php echo $field2['typename']; ?></a></li>
						<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
                    </ul>
                </div>
                <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </div>
            <div class="clear"></div>
            <div class="copyright">
                <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?>　<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>/sitemap.xml">Xml网站地图 </a>
            </div>
        </div>
    </div>
    <!-- 应用插件标签 start -->
      <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?>
    <!-- 应用插件标签 end -->
    
    
    <!--[if lt IE 9]>
    <div class="notsupport">
        <h1>:( 非常遗憾</h1>
        <h2>您的浏览器版本太低，请升级您的浏览器</h2>
    </div>
    <![endif]-->
    
<!--网站公用底部——结束--> 

</body>
</html>