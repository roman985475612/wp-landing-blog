<?php get_header() ?>

  <main class="main-content">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) : the_post() ?>
                <article class="article-preview">
                    <h1><?php the_title() ?></h1>
                    <div class="article-excerpt">
                        <?php if ( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail( 'thumbnail', ['class' => 'thumb'] ) ?>
                        <?php else: ?>
                            <img src="https://picsum.photos/250/170" alt="" class="thumb">
                        <?php endif ?>
                        <?php the_content() ?>
                    </div>
                </article>
            <?php else: ?>
                <p>Posts Not Found</p>
            <?php endif ?>
        </div>

        <?php get_sidebar() ?>

      </div>
    </div>
  </main>

<?php get_footer() ?>