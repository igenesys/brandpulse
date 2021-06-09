<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brandpulse
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon"/>
	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PF5MQ6B');</script>
	<!-- End Google Tag Manager -->
	<script type="text/javascript">var _194d14=["\x74\x72\x61\x63\x6B\x50\x61\x67\x65\x56\x69\x65\x77","\x70\x75\x73\x68","\x65\x6E\x61\x62\x6C\x65\x4C\x69\x6E\x6B\x54\x72\x61\x63\x6B\x69\x6E\x67","\x68\x74\x74\x70\x73\x3A","\x70\x72\x6F\x74\x6F\x63\x6F\x6C","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70\x73","\x68\x74\x74\x70","\x3A\x2F\x2F\x74\x72\x61\x63\x6B\x65\x72\x2E\x6C\x65\x61\x64\x65\x6C\x65\x70\x68\x61\x6E\x74\x2E\x63\x6F\x6D\x2F","\x73\x65\x74\x54\x72\x61\x63\x6B\x65\x72\x55\x72\x6C","\x74\x72\x61\x63\x6B\x65\x72\x2E\x70\x68\x70","\x73\x65\x74\x53\x69\x74\x65\x49\x64","\x32\x32\x36\x39","\x73\x63\x72\x69\x70\x74","\x63\x72\x65\x61\x74\x65\x45\x6C\x65\x6D\x65\x6E\x74","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x73\x42\x79\x54\x61\x67\x4E\x61\x6D\x65","\x74\x79\x70\x65","\x74\x65\x78\x74\x2F\x6A\x61\x76\x61\x73\x63\x72\x69\x70\x74","\x64\x65\x66\x65\x72","\x61\x73\x79\x6E\x63","\x73\x72\x63","\x6A\x73\x2F","\x69\x6E\x73\x65\x72\x74\x42\x65\x66\x6F\x72\x65","\x70\x61\x72\x65\x6E\x74\x4E\x6F\x64\x65"];var _leq=_leq|| [];_leq[_194d14[1]]([_194d14[0]]);_leq[_194d14[1]]([_194d14[2]]);(function(){var _0xcf03x2=((_194d14[3]== document[_194d14[5]][_194d14[4]])?_194d14[6]:_194d14[7])+ _194d14[8];_leq[_194d14[1]]([_194d14[9],_0xcf03x2+ _194d14[10]]);_leq[_194d14[1]]([_194d14[11],_194d14[12]]);var _0xcf03x3=document,_0xcf03x4=_0xcf03x3[_194d14[14]](_194d14[13]),_0xcf03x5=_0xcf03x3[_194d14[15]](_194d14[13])[0];_0xcf03x4[_194d14[16]]= _194d14[17];_0xcf03x4[_194d14[18]]= true;_0xcf03x4[_194d14[19]]= true;_0xcf03x4[_194d14[20]]= _0xcf03x2+ _194d14[21];_0xcf03x5[_194d14[23]][_194d14[22]](_0xcf03x4,_0xcf03x5)})()</script>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PF5MQ6B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<div class="se-pre-con"></div>
<?php get_template_part('template-parts/global/header'); ?>