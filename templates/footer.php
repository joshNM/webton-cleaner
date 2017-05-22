<footer class="Footer island">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                
            </div>
            <div class="col-sm-6">
                <?php
                if (has_nav_menu('secondary_navigation')) :
                    wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => '']);
                endif;
                ?>
                <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => '']);
                endif;
                ?>
            </div>
        </div>
    </div>
</footer>
