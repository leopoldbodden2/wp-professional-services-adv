<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-default-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-default-collapse">
            <?php get_custom_navbar ([
                'container'         => '',
                'container_class'   => '',
                'container_id'      => 'navbar-default-container',
                'menu_class'        => 'nav navbar-nav'
            ]); ?>
        </div>
    </div>
</nav>