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
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                </nav>
            <?php else: ?>
                <p>Posts Not Found</p>
            <?php endif ?>
        </div>
        <div class="col-md-4">
          <div class="sidebar-widget">
            <h2 class="widget-title">Categories</h2>
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                Cras justo odio
              </a>
              <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
              <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
              <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
              <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

<?php get_footer() ?>