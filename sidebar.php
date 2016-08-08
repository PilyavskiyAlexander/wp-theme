<!-- Start Sidebar -->
<div class="col-1-3">
    <div class="wrap-col">

    <?php if(!dynamic_sidebar('sidebar')) : ?>
        <div class="widget-container">

        <form role="search" method="get" id="searchform" class="searchform" action="">
            <div>
                <label class="screen-reader-text" for="s">Поиск:</label>
                <input type="text" value="" name="s" id="s" />
                <input type="submit" id="searchsubmit" value="Искать" />
            </div>
            </form>
            <div class="clear"></div>
        </div>

    <?php endif; ?>

          
        <div class="clear"></div>
    </div>
    </div>        <!-- End Sidebar -->