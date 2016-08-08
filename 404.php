<?php get_header(); ?>
<?php 

    // Количество записей в слайдере
    define("SLIDER_COUNT", 3); 
    // Количество записей в Последние записи (sidebar)
    define("LATEST_POSTS", 4); 



?>
   

    <!-- Start Main Container -->
    <div class="container zerogrid">

        <!-- Start Posts Container -->
        <div class="col-2-3" id="post-container">
            
            <h3>Ничего не найдено!</h3>
            <div class="clear"></div>
        </div>
          
        

        <?php get_sidebar(); ?>

        <div class="clear"></div>
    </div>
    <!-- End Main Container -->




<?php get_footer() ?>