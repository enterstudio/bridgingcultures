<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <title>Bridging Cultures Bookshelf: Muslim Journeys</title>

<!-- Plugin Stuff -->
<?php plugin_header(); ?>
    
<!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:300,700,700italic|Maven+Pro' rel='stylesheet' type='text/css'>
    <?php
    queue_css(array('style','skeleton','layout'), 'screen');

    display_css();
    ?>    

<!-- Javascript -->
    <?php  
    queue_js(array('jquery-1.7.2','jquery.carousel.min', 'modernizr.custom.71332'));
    display_js(); 
    ?>
    
    <script type="text/javascript">
    $(function(){
        $("div.books").carousel( { dispItems: 9, effect: "fade" } );
    });
    </script>
    
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>

<?php plugin_body(); ?>

    <header>
    
        <div class="container">
    
            <div class="logo"><?php echo link_to_home_page(); ?></div>
            
            <nav>
                
                <ul>
                    <?php echo public_nav_main(array(
                        'Books' => uri('books'), 
                        'Themes'=>uri('collections'),
                        'Resources'=>uri('items'),
                        'About'=>uri('about')
                    )); ?>
                </ul>
                
            </nav>
            
            <?php if(!strstr(@$bodyid, 'resources')) {
                echo simple_search(); 
                } ?>
        
        </div>
    
    </header>

    <div class="wrap">
    
        <div id="content" class="container container-sixteen">