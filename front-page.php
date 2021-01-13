<?php get_header('main') ?>

<?php
$design_cat = get_category(7);

if ($design_cat):
    $posts = get_posts([
        'numberposts' => 3,
        'category'    => $design_cat->term_id,
    ]);
?>
<section 
    class="section-watch section-tabs" 
    <?= bluerex_get_background('section_bg_image', $design_cat) ?>
>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <?php bluerex_show_field('h3', 'section_header', $design_cat) ?>
      <h4><?= $design_cat->description ?></h4>
      <ul class="nav nav-pills" id="myTab" role="tablist">
        <?php
            $data = [];
            $i = 0;
            foreach ($posts as $post):
                setup_postdata($post);
                $data[$i]['name']    = $post->post_name;
                $data[$i]['url']     = get_the_permalink();
                $data[$i]['excerpt'] = $post->post_excerpt;
        ?>
            <li class="nav-item" role="presentation">
                <a 
                    class="nav-link rounded-pill<?= (!$i) ? ' active' : '' ?>" 
                    id="<?= $post->post_name ?>-tab" 
                    data-bs-toggle="pill" 
                    href="#<?= $post->post_name ?>" 
                    role="tab" 
                    aria-controls="<?= $post->post_name ?>" 
                    aria-selected="true"
                >
                    <?php the_title() ?>
                </a>
            </li>
        <?php $i++; endforeach ?>
      </ul>

      <div class="tab-content" id="myTabContent">
        <?php foreach ($data as $key => $item): ?>
            <div
                class="tab-pane fade show<?= (!$key) ? ' active' : '' ?>" 
                id="<?= $item['name'] ?>" 
                role="tabpanel" 
                aria-labelledby="<?= $item['name'] ?>-tab"
            >
                <p><?= $item['excerpt'] ?></p>
                <p><a href="<?= $item['url'] ?>" class="btn btn-pink btn-shadow"><?= __('Read more', 'bluerex') ?></a></p>
            </div>
        <?php endforeach ?>
      </div>

    </div>
    <div class="col-lg-6 text-center">
        <?php bluerex_show_img('img', 'section_add_img', $design_cat) ?>
    </div>
  </div>
</div>
<?php 
    wp_reset_postdata();
    unset(
        $data,
        $posts,
        $post,
        $i,
        $key,
        $item
    );
?>
</section>
<?php endif ?>

<?php
    $tag_ID = 8;
    $category = get_category($tag_ID);
    
    if ($category):
        $posts = get_posts([
            'numberposts' => 3,
            'category'    => $tag_ID,
        ]);
?>
    <section class="section-progress text-center">
        <div class="container">
            <div class="row">
                <?php foreach ($posts as $post): ?>
                    <div class="col-lg-4 progress-item">
                        <div><i class="<?= bluerex_get_field( 'progress_icon', $post->ID ) ?>"></i></div>
                        <div class="num"><?= bluerex_get_field( 'progress_count', $post->ID ) ?></div>
                        <h4><?= $post->post_title ?></h4>
                        <p><?= $post->post_content ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php endif; unset($category) ?>

<?php
    $tag_ID = 9;
    $category = get_category($tag_ID);
    if ($category):
?>
    <section class="section-lets text-center" <?= bluerex_get_background('section_bg_image', $category) ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3><?= $category->name ?></h3>
                    <h4><?= bluerex_get_field( 'section_header', $category ) ?></h4>
                    <p class="px-5"><?= $category->description ?></p>
                    <p><a href="<?= get_category_link($tag_ID) ?>" class="btn btn-pink btn-shadow"><?= __( 'Read more', 'bluerex' ) ?></a></p>
                </div>
            </div>
        </div>
    </section>
<?php endif; unset($category) ?>

<!-- Design section -->
<?php
    $tag_ID = 10;
    $category = get_category($tag_ID);
    
    if ($category):
        $posts = get_posts([
            'numberposts' => 2,
            'category'    => $tag_ID,
        ]);
        
        // bluerex_dd($posts);
?>
    <section class="section-design">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h3><?= $category->name ?></h3>
              <h4><?= bluerex_get_field( 'section_header', $category ) ?></h4>
              <p><?= $category->description ?></p>
              <div class="row">
                <?php foreach ($posts as $post): setup_postdata($post); ?>
                    <div class="col-md-6 mb-3">
                        <span><i class="<?= bluerex_get_field( 'progress_icon', $post->ID ) ?>"></i></span>
                        <h2><?php the_title() ?></h2>
                        <p><?php the_content() ?></p>
                        <p><a href="<?php the_permalink() ?>" class="btn btn-pink btn-shadow"><?= __( 'Read more', 'bluerex' ) ?></a></p>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe 
                    width="560"
                    height="315"
                    src="<?= bluerex_get_youtube_url( bluerex_get_field( 'section_media', $category ) ) ?>" 
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
    </section>
<?php endif; unset($category) ?>

<!-- Work section -->
<?php
    $tag_ID = 11;
    $category = get_category($tag_ID);
    
    if ($category):
        $posts = get_posts([
            'numberposts' => 3,
            'category'    => $tag_ID,
        ]);
?>
<section class="section-work section-tabs">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <h4><?= $category->name ?></h4>
            <p><?= $category->description ?></p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-pills justify-content-center" id="myTab-gallery" role="tablist">
                <?php
                    $i = 0;
                    $post_data = [];
                    foreach ($posts as $post):
                        setup_postdata($post);
                        $data[$i]['post_name'] = $post->post_name;
                        $data[$i]['content'] = get_the_content();
                ?>
                    <li class="nav-item" role="presentation">
                        <a 
                            class="nav-link rounded-pill<?= (!$i) ? ' active' : '' ?>" 
                            id="<?= $post->post_name ?>-tab-gallery" 
                            href="#<?= $post->post_name ?>-gallery" 
                            role="tab" 
                            data-bs-toggle="pill" 
                            aria-controls="<?= $post->post_name ?>" 
                            aria-selected="true"
                        >
                            <?php the_title() ?>
                        </a>
                    </li>
                <?php $i++; endforeach; wp_reset_postdata(); ?>
            </ul>

            <div class="tab-content" id="myTabContent">
                <?php foreach ($data as $key => $item): ?>
                    <div 
                        class="tab-pane fade show<?= (!$key) ? ' active' : '' ?>" 
                        id="<?= $item['post_name'] ?>-gallery" 
                        role="tabpanel" 
                        aria-labelledby="<?= $item['post_name'] ?>-tab-gallery"
                    >
                        <?= $item['content'] ?>
                    </div>
                <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<?php endif; unset($category, $posts) ?>

<?php
    $posts = get_posts(['post_type' => 'reviews']);
    if ($posts):
?>
    <section class="section-reviews">
        <div id="carouselReviews" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <?php for ($i = 0; $i < count($posts); $i++): ?>
                    <li 
                        data-bs-target="#carouselReviews" 
                        data-bs-slide-to="<?= $i ?>" 
                        <?php if (!$i) echo 'class="active"' ?>
                    ></li>
                <?php endfor ?>
            </ol>
            <div class="carousel-inner">
                <?php
                    $isActive = true;
                    foreach ($posts as $post):
                ?>
                    <div class="carousel-item<?php if ($isActive) { echo ' active'; $isActive = false; } ?>">
                      <div class="container">
                        <div class="row">
                          <div class="col-sm-7">
                            <div class="carousel-caption">
                              <h3><?= $post->post_title ?></h3>
                              <h4><?= bluerex_get_field( 'review_header', $post->ID ) ?></h4>
                              <figure>
                                <blockquote class="blockquote">
                                  <p><?= $post->post_content ?></p>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    <?= bluerex_get_field( 'review_author', $post->ID ) ?>
                                </figcaption>
                              </figure>
                            </div>      
                          </div>
                          <div class="col-sm-5 d-none d-sm-block">
                            <?= bluerex_get_post_thumbnail( $post->ID ) ?>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php endforeach ?>
            </div>
              <a class="carousel-control-prev" href="#carouselReviews" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselReviews" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
        </div>
    </section>
<?php endif; unset($posts) ?>


<?php
    $contact = get_page_by_title('Contact');
    if ($contact):
?>
<section class="section-form text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= do_shortcode($contact->post_content) ?>
            </div>
        </div>
    </div>
</section>
<?php endif ?>

<?php get_footer() ?>