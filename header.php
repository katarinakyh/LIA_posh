<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8" />
	
  	<title><?php wp_title(''); ?></title>
  
  	<meta name="description" content="<?php echo bloginfo('description'); ?>" />
 
	<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />
	<link rel="stylesheet/less" href="<?php echo bloginfo('template_url'); ?>/styles.less" type="text/css" media="screen" />
	
	<link rel="shortcut icon" href="<?php echo bloginfo('template_url'); ?>/img/favicon.png" />
  	<link rel="apple-touch-icon" sizes="72x72" href="img/apple_touch_57px.png" />
  	<link rel="apple-touch-icon" sizes="114x114" href="img/apple_touch_114px.png" />
	
	<!--[if !IE 7]>
		<style type="text/css">
			#wrap {display:table;height:100%}
		</style>
	<![endif]-->
	
	<?php wp_head(); ?>
		  	
</head>

    <body>
    
        <div id="wrap">
        
            <div id="content-top"></div>
            
            <div id="main">
            
                <header>
                                
                    <div id="logo"><a href="<?php get_bloginfo ( 'url' ); ?>"><h1>POSH<br />INDUSTRIES.</h1></a></div>
                    
                    <div id="office"></div>
                    
                    <div id="socialmedia"></div>
                    
                </header>