    <div class="container">
        <header class="meta mb-3">
            <span class="date"><?php the_date('d F Y'); ?></span>
            <?php
                the_tags('<span class="tag"><i class="fa fa-tag"></i>','</span><span class="tag"><i class="fa fa-tag"></i>','</span>'));
                }
            ?>

            <span class="comment"><a href="#comments"><i class="fa fa-tag"></i> <?php comments_number(); ?></a></span>
        </header>

    <?php
        the_content();
    ?>

   <?php
        comments_template();
    ?>

</div>
