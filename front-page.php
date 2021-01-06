<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Hello, world!</title>
  
  <?php wp_head() ?>
  
</head>
<body>

  <!--div class="preloader d-flex justify-content-center align-items-center">
    <div class="spinner-border text-info" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div-->

  <button id="scrollToTop" class="scroll-to-top"><i class="fas fa-angle-up"></i></button>

  <header class="main-header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= home_url() ?>">
            <?php $custom_logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) ); ?>
            <?php if ($custom_logo): ?>
                <img 
                    src="<?= $custom_logo[0] ?>"
                    alt="<?php bloginfo( 'name' ) ?>"
                >
            <?php endif ?>
            <?php bloginfo( 'name' ) ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
            <?php wp_nav_menu([
                'theme_location' => 'header_menu',
                'container'      => false,
                'menu_class'     => 'navbar-nav',
            ]) ?>
          <!--ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Faq</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Content</a>
            </li>
          </ul-->
        </div>
      </div>
    </nav>

    <div class="main-header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h3>We are best and creative agancy</h3>
            <h4>We turn creative ideas into your bussines</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quo, ullam dolorem, eius non maiores iste</p>
            <div class="main-header-buttons">
              <button class="btn btn-pink rounded-pill" type="submit">Our store</button>
              <button class="btn btn-violet rounded-pill" type="submit">Read more</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="section-watch section-tabs">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3>Dream Big Inspire the World</h3>
          <h4>We turn creative ideas into your bussines</h4>

          <ul class="nav nav-pills" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link rounded-pill active" id="webdesign-tab" data-bs-toggle="pill" href="#webdesign" role="tab" aria-controls="webdesign" aria-selected="true">Web design</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link rounded-pill" id="mobileapp-tab" data-bs-toggle="pill" href="#mobileapp" role="tab" aria-controls="mobileapp" aria-selected="false">Mobile app</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link rounded-pill" id="branding-tab" data-bs-toggle="pill" href="#branding" role="tab" aria-controls="branding" aria-selected="false">Branding</a>
            </li>
          </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="webdesign" role="tabpanel" aria-labelledby="webdesign-tab">
              <p>webdesign Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ut vero quo illum modi recusandae quidem delectus quos adipisci, totam.</p>
              <p><a href="" class="btn btn-pink btn-shadow">Read more</a></p>
            </div>
            
            <div class="tab-pane fade" id="mobileapp" role="tabpanel" aria-labelledby="mobileapp-tab">
              <p>Mobile app Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at ratione voluptates fuga sit laborum cupiditate sed delectus debitis modi!</p>
              <p><a href="" class="btn btn-pink btn-shadow">Read more</a></p>
            </div>
            
            <div class="tab-pane fade" id="branding" role="tabpanel" aria-labelledby="branding-tab">
              <p>Branding Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, ut est porro incidunt similique quaerat a consequatur minima, dolore assumenda.</p>
              <p><a href="" class="btn btn-pink btn-shadow">Read more</a></p>
            </div>
          </div>

        </div>

        <div class="col-lg-6 text-center">
          <img src="<?php bloginfo('template_url') ?>/assets/img/watch.png" alt="">
        </div>
      </div>
    </div>
  </section>

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
  <!-- /.section-reviews -->

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
  <!-- /.section-form --> 

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-6">
              <h5>Company</h5>
              <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Aproach</a></li>
                <li><a href="#">Sustainability</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">News</a></li>
              </ul>
            </div>
            <div class="col-6">
              <h5>Company</h5>
              <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Aproach</a></li>
                <li><a href="#">Sustainability</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">News</a></li>
              </ul>
            </div>
            <div class="col-6">
              <h5>Company</h5>
              <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Aproach</a></li>
                <li><a href="#">Sustainability</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">News</a></li>
              </ul>
            </div>
            <div class="col-6">
              <h5>Company</h5>
              <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Aproach</a></li>
                <li><a href="#">Sustainability</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">News</a></li>
              </ul>
            </div>
            </div>
        </div>
        <div class="col-md-6 footer-images">
          <div class="row">
            <div class="col-6"><img src="<?php bloginfo('template_url') ?>/assets/img/footer_img1.jpg" alt=""></div>
            <div class="col-6"><img src="<?php bloginfo('template_url') ?>/assets/img/footer_img2.jpg" alt=""></div>
            <div class="col-6"><img src="<?php bloginfo('template_url') ?>/assets/img/footer_img3.jpg" alt=""></div>
            <div class="col-6"><img src="<?php bloginfo('template_url') ?>/assets/img/footer_img4.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- /.footer --> 

  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav">
            <li class="nav-item"><span class="nav-link">&copy; 2020 Theme by psdfreebies.com</span></li>
            <li class="nav-item"><a href="#" class="nav-link">Privacy</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Term of Use</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Site Map</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /.copyright -->

  <?php wp_footer() ?>
</body>
</html>