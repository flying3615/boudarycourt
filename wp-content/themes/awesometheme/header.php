<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Awesome Theme</title>
    <!--     wp_head()   get css in header-->
    <?php wp_head(); ?>
</head>

<?php
if (is_front_page()) {
    $awesome_classes = array('awesome-class', 'my-class');
} else {
    $awesome_classes = array('no-awesome-class');
}
?>


<body <?php body_class($awesome_classes) ?>>
<!--    use primary menus-->
<?php wp_nav_menu(array('theme_location' => 'primary')); ?>

<img src="<?php header_image() ?>" height="<?php echo get_custom_header()->height ?>"
     width="<?php echo get_custom_header()->width ?>"
     alt=""/>
