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

<section class="section-progress text-center">
<div class="container">
  <div class="row">
    <div class="col-lg-4 progress-item">
      <div><i class="fas fa-bullhorn"></i></div>
      <div class="num">500+</div>
      <h4><span>Superfully</span> complated projects</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia ea repellendus, laudantium. Voluptates culpa placeat rem, error, quos totam. Eum?</p>
    </div>
    <div class="col-lg-4 progress-item">
      <div><i class="fas fa-bullhorn"></i></div>
      <div class="num">254+</div>
      <h4><span>Highly</span> specialised employees</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia ea repellendus, laudantium. Voluptates culpa placeat rem, error, quos totam. Eum?</p>
    </div>
    <div class="col-lg-4 progress-item">
      <div><i class="fas fa-bullhorn"></i></div>
      <div class="num">45+</div>
      <h4><span>Awards</span> around the world</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia ea repellendus, laudantium. Voluptates culpa placeat rem, error, quos totam. Eum?</p>
    </div>
      
  </div>
</div>
</section>

<section class="section-lets text-center">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Let's Grow Together</h3>
      <h4>We turn creative ideas into your bussines</h4>
      <p class="px-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe asperiores commodi enim et cumque consequuntur delectus numquam fuga cum, dicta officiis excepturi architecto aspernatur quisquam consectetur laudantium voluptates minus maiores!</p>
      <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
    </div>
  </div>
</div>
</section>

<section class="section-design">
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h3>We are best and creative agancy</h3>
      <h4>We turn creative ideas into your bussines</h4>
      <p>Curabitur faucibus vulputate pellentesque. Mauris condimentum ligula a justo commodo, non consectetur lorem pulvinar. Curabitur dictum augue vel facilisis condimentum. Nulla quis enim nunc. Vivamus posuere euismod ante eget euismod. In eu volutpat odio.</p>
      <div class="row">
        <div class="col-md-6 mb-3">
          <span><i class="far fa-comments"></i></span>
          <h2>Graphic Design</h2>
          <p>Vivamus ex dolor, molestie sed tellus sed, suscipit sagittis nibh. In hac habitasse platea dictumst.</p>
          <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
        </div>
        <div class="col-md-6 mb-3">
          <span><i class="fas fa-bullhorn"></i></span>
          <h2>Graphic Design</h2>
          <p>Vivamus ex dolor, molestie sed tellus sed, suscipit sagittis nibh. In hac habitasse platea dictumst.</p>
          <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item"
                src="https://www.youtube-nocookie.com/embed/vWAOJjKbC7g?controls=0" 
                frameborder="0" 
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
</section>

<section class="section-work section-tabs">
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2 text-center">
      <h4>Our Recent Work</h4>
      <p>Nullam ut nisi tincidunt lorem condimentum suscipit malesuada non est. Vestibulum eleifend, lorem quis finibus laoreet, lectus sem aliquet neque, condimentum rhoncus leo nisl ac lacus. Aenean ullamcorper justo et.</p>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills justify-content-center" id="myTab-gallery" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link rounded-pill active" id="webdesign-tab-gallery" data-bs-toggle="pill" href="#webdesign-gallery" role="tab" aria-controls="webdesign" aria-selected="true">Web design</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link rounded-pill" id="mobileapp-tab-gallery" data-bs-toggle="pill" href="#mobileapp-gallery" role="tab" aria-controls="mobileapp" aria-selected="false">Mobile app</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link rounded-pill" id="branding-tab-gallery" data-bs-toggle="pill" href="#branding-gallery" role="tab" aria-controls="branding" aria-selected="false">Branding</a>
          </li>
        </ul>

        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="webdesign-gallery" role="tabpanel" aria-labelledby="webdesign-tab-gallery">
            <div class="gallery row text-center">
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/1.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/1_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/2.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/2_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/3.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/3_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/4.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/4_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/5.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/5_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/6.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/6_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/7.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/7_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/8.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/8_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/9.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/9_s.jpg" alt=""></a>
              </div>
            </div>
          </div>
          
          <div class="tab-pane fade" id="mobileapp-gallery" role="tabpanel" aria-labelledby="mobileapp-tab-gallery">
            <div class="gallery row text-center">
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/4.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/4_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/5.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/5_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/6.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/6_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/1.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/1_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/2.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/2_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/3.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/3_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/7.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/7_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/8.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/8_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/9.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/9_s.jpg" alt=""></a>
              </div>
            </div>
          </div>
          
          <div class="tab-pane fade" id="branding-gallery" role="tabpanel" aria-labelledby="branding-tab-gallery">
            <div class="gallery row text-center">
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/6.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/6_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/7.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/7_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/8.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/8_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/9.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/9_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/1.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/1_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/2.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/2_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/3.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/3_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/4.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/4_s.jpg" alt=""></a>
              </div>
              <div class="col-sm-4 gallery-item">
                <a href="img/gallery/5.jpg"><img src="<?php bloginfo('template_url') ?>/assets/img/gallery/5_s.jpg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="section-reviews">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <div class="carousel-caption">
              <h3>Our Happy Client</h3>
              <h4>Testimonials</h4>
              <figure>
                <blockquote class="blockquote">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  Mr. John Doe
                </figcaption>
              </figure>
            </div>      
          </div>
          <div class="col-sm-5 d-none d-sm-block">
            <img src="<?php bloginfo('template_url') ?>/assets/img/client.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <div class="carousel-caption">
              <h3>Our Happy Client</h3>
              <h4>Testimonials</h4>
              <figure>
                <blockquote class="blockquote">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  Ms. Sarah Conor
                </figcaption>
              </figure>
            </div>      
          </div>
          <div class="col-sm-5 d-none d-sm-block">
            <img src="<?php bloginfo('template_url') ?>/assets/img/client.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <div class="carousel-caption">
              <h3>Our Happy Client</h3>
              <h4>Testimonials</h4>
              <figure>
                <blockquote class="blockquote">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  Mr. Bill Gates
                </figcaption>
              </figure>
            </div>      
          </div>
          <div class="col-sm-5 d-none d-sm-block">
            <img src="<?php bloginfo('template_url') ?>/assets/img/client.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
</section>

<section class="section-form text-center">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4>Need Help?</h4>
      <h5>Don't Forget to Contact With Us?</h5>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem labore tenetur officiis fugit magnam possimus quam praesentium culpa. Aut non saepe quod modi excepturi. Explicabo vitae dolore voluptatibus ipsum mollitia.</p>
      <form action="" class="row g-3 text-left">
        <div class="col-md-5">
          <input type="text" class="form-control" placeholder="Name">
        </div>
        <div class="col-md-5">
          <input type="email" class="form-control" placeholder="Email">
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-violet btn-shadow">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
</section>

<?php get_footer() ?>