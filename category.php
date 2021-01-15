<?php get_header() ?>

  <main class="main-content">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
                <article class="article-preview">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                    <p><span class="article-date"><i class="far fa-calendar-alt"> <?php the_time( 'd.m.Y' ) ?></i></span></p>
                    <div class="article-excerpt">
                        <a href="<?php the_permalink() ?>">
                            <?php if ( has_post_thumbnail() ): ?>
                                <?php the_post_thumbnail( 'thumbnail', ['class' => 'thumb'] ) ?>
                            <?php else: ?>
                                <img src="https://picsum.photos/250/170" alt="" class="thumb">
                            <?php endif ?>
                        </a>
                        <?php the_excerpt() ?>
                        <a href="<?php the_permalink() ?>" class="more"><?= __( 'Read more', 'bluerex' ) ?></a>
                    </div>
                </article>
            <?php endwhile ?>
                
                    <?php the_posts_pagination([
                        'end_size' => 1,
                        'mid_size' => 1,
                        'type'     => 'list'
                    ]) ?>
                
            <?php else: ?>
                <p>Posts Not Found</p>
            <?php endif ?>
        </div>

        <?php get_sidebar() ?>

      </div>
    </div>
  </main>

<?php get_footer() ?>