<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title_for_layout?> | </title>
        <?php echo $this->Html->charset(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="AQUA interativa">
        <meta name="robots" content="index,follow">
        <link rel="shortcut icon" href="<?php echo $this->request->base ?>/img/icons/favicon.png" type="image/x-icon" />

    <?php
    echo $this->Html->css(array('bootstrap', '/fonts/stylesheet', 'style', 'animate'));
    echo $this->Html->script(array('jquery','bootstrap.min', 'modernizr.custom', 'toucheffects'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    echo $this->fetch('fonts');
    ?>
    </head>

    <body>
    <?php echo $this->Element('header'); ?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->Element('footer'); ?>
    </body>

</html>
