<?php

defined('_JEXEC') or die;
define( 'YOURBASEPATH', dirname(__FILE__) );



require (YOURBASEPATH .DS."lib/lessc.inc.php");
// Объявляем переменную которая будет вызывать и обрабатывать .less файл
$less = new lessc(YOURBASEPATH .DS.'less/layout.less');
// Генерируем итоговый .css файл
file_put_contents(YOURBASEPATH .DS.'css/style.less.css', $less->parse());
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<meta name="application-name" content="OpenItStudio"/>
<meta name="msapplication-TileColor" content="#01B8E4"/>
<meta name="msapplication-square70x70logo" content="tiny.png"/>
<meta name="msapplication-square150x150logo" content="square.png"/>
<meta name="msapplication-wide310x150logo" content="wide.png"/>
<meta name="msapplication-square310x310logo" content="large.png"/>
<?php $this->_generator = 'OpenITStudio';?>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/normalize.css"  type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/main.css"  type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/user.css"  type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/media-queries.css"  type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/style.less.css" type="text/css" />


<!--[if IE]>
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lte opera 6, 7, 8, 9, 10]>
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/opera.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if opera 6, 7, 8, 9, 10]>
	<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/opera.css" rel="stylesheet" type="text/css"/>
<![endif]-->

<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/javascript/jquery-1.8.3.min.js"/></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/javascript/core.js"/></script>
<script type="text/javascript">
$(document).ready(function() {
	$("body").css("display", "none"); 
	$("body").fadeIn(500); 
	$("a").click(function(event){ 
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(500, redirectPage); 
	});
	function redirectPage() {
		window.location = linkLocation;
	}
});
</script>
</head>

<body>

	<jdoc:include type="modules" name="message" />
	<jdoc:include type="message" />
	<jdoc:include type="component" />

			
	<jdoc:include type="modules" name="debug" />
        </body>
</html>
