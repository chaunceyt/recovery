<?php

/**
 * File used as default layout for 'Modern' theme
 *
 * Contains code to display common layout for 'Modern' theme
 *
 * @author Amit Badkas <amit@sanisoft.com>
 * @version 1.0
 * @package CheeseCake2
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo $title_for_layout; ?></title>
<!-- Meta tags -->
<?php echo $html->charset('UTF-8') ?>
<!--CSS/JS/RSS-->
<?php echo $html->css('style', 'stylesheet'); ?>
<?php
// Output meta tag for photos browse RSS feed
echo $html->meta('rss', array('controller' => 'photos', 'action' => 'browse', 'ext' => 'rss'), array('title' => $session->read('cheeseCake.siteName') . ' - Latest Photos RSS Feed'));

// Include jquery's javascript file
echo $javascript->link('jquery');

// Include jquery's short access key javascript file
echo $javascript->link('jquery.shortaccesskey');

// Output javascript files includes for layout
echo $scripts_for_layout;

?>
</head>
<body>
<div id="surtitre"><?php echo $html->link($session->read('cheeseCake.siteName'), '/', array('title' => __('Return to latest image', true))); ?></div>
<div id="main">
    <div id="haut">&nbsp;</div>
    <div id="bord">
        <div id="menu">
            <ul class="menu">
                <li class="firstitem"><?php echo $html->link(__('Home', true), '/',array('title' => __('Return to Homepage', true), 'accesskey' => 'h')); ?></li>
                <li><?php echo $html->link(__('Browse', true), '/photos/browse', array('title' => __('Browse Archives', true), 'accesskey' => 'u')); ?></li>
                <li><?php echo $html->link(__('Comments', true), '/comments', array('title' => __('Browse Comments', true), 'accesskey' => 'c')); ?></li>
                <li><?php echo $html->link(__('About', true), '/pages/about', array('title' => __('About', true))); ?></li>
                <li><?php echo ($session->check('Auth.User') ? $html->link(__('Logout', true), '/users/logout', array('title' => __('Logout', true))) : $html->link(__('Login', true), '/users/login', array('title' => __('Login', true)))); ?></li>
            </ul>
            <?php echo ife($session->read('Auth.User.role') == 'Admin', $this->element('admin_menu'), ''); ?>
        </div>
<?php
// Display 'error', 'flash', 'success' and 'authError' messages
$session->flash('error');
$session->flash('flash');
$session->flash('success');
$session->flash('auth');

// Output content for layout
echo $content_for_layout;
?>
    </div>
    <div id="bas">&nbsp;</div>
</div>
<div id="credits">
    <?php echo $html->link(__('RSS 2.0', true), array('controller' => 'photos', 'action' => 'browse', 'ext' => 'rss')) ?> / <?php __('ATOM feed'); ?> |
    <?php echo $html->link(__('Valid xHTML', true), 'http://validator.w3.org/check/referer', array('title' => __('This website uses Valid xHTML', true))); ?> /
    <?php echo $html->link(__('Valid CSS', true), 'http://jigsaw.w3.org/css-validator/check/referer', array('title' => __('This website uses Valid CSS2', true))); ?> |
    <?php echo $html->link(__('Recovery Portal', true), 'http://domain.org/', array('title' => __('This website is for Recovery', true))); ?>
</div>
</body>
</html>
