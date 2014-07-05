<?php
/**
 * Email Header
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.0.0
 */
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly


    
// Load colours
$bg = get_option('woocommerce_email_background_color');
$body = get_option('woocommerce_email_body_background_color');
$base = get_option('woocommerce_email_base_color');
$base_text = wc_light_or_dark($base, '#202020', '#ffffff');
$text = get_option('woocommerce_email_text_color');

$bg_darker_10 = wc_hex_darker($bg, 10);
$base_lighter_20 = wc_hex_lighter($base, 20);
$text_lighter_20 = wc_hex_lighter($text, 20);

// For gmail compatibility, including CSS styles in head/body are stripped out therefore styles need to be inline. These variables contain rules which are added to the template inline. !important; is a gmail hack to prevent styles being stripped if it doesn't like something.
$wrapper = "
	background-color: " . esc_attr($bg) . ";
	width:100%;
	-webkit-text-size-adjust:none !important;
	margin:0;
	padding: 70px 0 70px 0;
";
$template_container = "
	box-shadow: 0px 0px 0px 3px rgba(0, 0, 0, 0.024) ! important; background-color: black; border: 1px solid rgb(220, 220, 220); border-radius: 10px ! important;
";
$template_header = "
	color: rgb(255, 255, 255); border-top-left-radius: 6px ! important; border-top-right-radius: 6px ! important; font-family: Arial; font-weight: bold; background-color: black; border-bottom: 0px none; vertical-align: middle;
";
$body_content = "
	background-color: " . esc_attr($body) . ";
	-webkit-border-radius:6px !important;
	border-radius:6px !important;
";
$body_content_inner = "
	color: white;
	font-family:Arial;
	font-size:14px;
	line-height:150%;
	text-align:left;
";
$header_content_h1 = "
	color: white;
	margin:0;
	padding: 28px 24px;
	text-shadow: 0 1px 0 $base_lighter_20;
	display:block;
	font-family:Arial;
	font-size:30px;
	font-weight:bold;
	text-align:left;
	line-height: 150%;
";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo get_bloginfo('name'); ?></title>
    </head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
        <div style="<?php echo $wrapper; ?>">
            <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                <tr>
                    <td align="center" valign="top">
                        <?php
                        if ($img = get_option('woocommerce_email_header_image')) {
                            echo '<p style="margin-top:0;"><img src="' . esc_url($img) . '" alt="' . get_bloginfo('name') . '" /></p>';
                        }
                        ?>
                        <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_container" style="<?php echo $template_container; ?>">
                            <tr>
                                <td align="center" valign="top">
                                    <!-- Header -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_header" style="<?php echo $template_header; ?>" bgcolor="<?php echo $base; ?>">
                                        <tr>
                                            <td>
                                                <img src="http://youtubevirals.com/wp-content/uploads/2014/04/logo1.png" style="position: relative; margin-left: 30px; margin-top: -55px;">
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- End Header -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <!-- Body -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="template_body">
                                        <tr>
                                            <td valign="top" style="">
                                                <!-- Content -->
                                                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td valign="top">
                                                            <div style="<?php echo $body_content_inner; ?>">