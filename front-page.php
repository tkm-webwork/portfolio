<?php get_header(); ?>

  <!-- main -->
  <main>
    <!-- mv -->
    <section class="mv">
      <div class="inner mv-inner">
        <div class="mv-cont wow animate__animated animate__fadeIn">
          <h1 class="mv-title">TAKUMI OSANAI</h1>
          <div class="mv-subtitle">PORTFOLIO</div>
          <div class="mv-text">
            Webサイト構築・ランディングページ制作で<br class="hidden-pc hidden-tab">
            お困りではございませんか？<br>
            「こんなサイトを作りたい！」というイメージに沿った<br>
            サイト制作・提案をいたします。
          </div>
          <div class="mv-button">
            <a href="#contact">無料で相談する</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /.mv -->

    <!-- works -->
    <section class="works" id="works">
      <div class="inner">
        <h2 class="section-title">WORKS</h2>
        <div class="works-category">
          <ul class="works-category__list filter">
            <li class="works-category__item"><a href="" class="active" data-filter="all" role="button">ALL</a></li>
            <li class="works-category__item"><a href="" data-filter="coding" role="button">CODING</a></li>
            <li class="works-category__item"><a href="" data-filter="wordpress" role="button">WORDPRESS</a></li>
            <li class="works-category__item"><a href="" data-filter="design" role="button">DESIGN</a></li>
          </ul>
        </div>
        <div class="works-cont wow animate__animated animate__fadeInUp">
          <div class="works-wrap boxes">
            <div class="work-item coding" data-category="coding">
              <a href="https://tkm-web.com">
                <div class="works-box">
                  <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/thumbnail.png" alt="work-image">
                  </div>
                  <div class="work-detail">
                    <p>Category</p>
                    <h3>ポートフォリオ</h3>
                    <p>Skill</p>
                    <h3>HTML / CSS / JS</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="work-item coding" data-category="coding">
              <a href="https://tkm-webwork.github.io/portfolio1/">
                <div class="works-box">
                  <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/daytra1/thumbnail.png" alt="work-image">
                  </div>
                  <div class="work-detail">
                    <p>Category</p>
                    <h3>デイトラ初級編課題</h3>
                    <p>Skill</p>
                    <h3>HTML / CSS</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="work-item coding" data-category="coding">
              <a href="https://tkm-webwork.github.io/portfolio2/">
                <div class="works-box">
                  <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bootstrap/thumbnail.png" alt="work-image">
                  </div>
                  <div class="work-detail">
                    <p>Category</p>
                    <h3>デイトラ初級編課題</h3>
                    <p>Skill</p>
                    <h3>Bootstrap</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="work-item coding" data-category="coding">
              <a href="https://tkm-webwork.github.io/portfolio3/">
                <div class="works-box">
                  <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/the company/thumbnail.png" alt="work-image">
                  </div>
                  <div class="work-detail">
                    <p>Category</p>
                    <h3>デイトラ中級編課題</h3>
                    <p>Skill</p>
                    <h3>HTML / CSS / JS</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="work-item coding" data-category="coding">
              <a href="https://tkm-webwork.github.io/portfolio4/">
                <div class="works-box">
                  <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sobolon/thumbnail.png" alt="work-image">
                  </div>
                  <div class="work-detail">
                    <p>Category</p>
                    <h3>デイトラ中級編復習課題</h3>
                    <p>Skill</p>
                    <h3>HTML / CSS / JS</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="work-item coding" data-category="coding">
              <a href="http://zebranougai.html.xdomain.jp/">
                <div class="works-box">
                  <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/samplecorp/thumbnail.png" alt="work-image">
                  </div>
                  <div class="work-detail">
                    <p>Category</p>
                    <h3>デイトラ中級編最終課題</h3>
                    <p>Skill</p>
                    <h3>HTML / CSS / JS</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="work-item wordpress" data-category="wordpress">
              <a href="https://tkm-labo.com/">
                <div class="works-box">
                  <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/engress/thumbnail.png" alt="work-image">
                  </div>
                  <div class="work-detail">
                    <p>Category</p>
                    <h3>Engress</h3>
                    <p>Skill</p>
                    <h3>WordPress</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="work-item wordpress" data-category="wordpress">
              <a href="https://tkm-zonepractice.com">
                <div class="works-box">
                  <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gokurakudo/thumbnail.png" alt="work-image">
                  </div>
                  <div class="work-detail">
                    <p>Category</p>
                    <h3>ZONE上級編課題</h3>
                    <p>Skill</p>
                    <h3>WordPress</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="work-item design" data-category="design">
              <a href="" class="js-modal-open" data-target="modal01">
                <div class="works-box">
                  <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/design/school/thumbnail.png" alt="work-image">
                  </div>
                  <div class="work-detail">
                    <p>Category</p>
                    <h3>架空サイト</h3>
                    <p>Skill</p>
                    <h3>Photoshop</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="work-item design" data-category="design">
              <a href="" class="js-modal-open" data-target="modal02">
                <div class="works-box">
                  <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/design/temple/thumbnail.png" alt="work-image">
                  </div>
                  <div class="work-detail">
                    <p>Category</p>
                    <h3>架空サイト</h3>
                    <p>Skill</p>
                    <h3>Photoshop</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="work-item design" data-category="design">
              <a href="" class="js-modal-open" data-target="modal03">
                <div class="works-box">
                  <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/design/fashion/thumbnail.png" alt="work-image">
                  </div>
                  <div class="work-detail">
                    <p>Category</p>
                    <h3>架空サイト</h3>
                    <p>Skill</p>
                    <h3>Photoshop</h3>
                  </div>
                </div>
              </a>
            </div>
            <div class="work-item design" data-category="design">
              <a href="" class="js-modal-open" data-target="modal04">
                <div class="works-box">
                  <div class="work-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/design/wine/thumbnail.png" alt="work-image">
                  </div>
                  <div class="work-detail">
                    <p>Category</p>
                    <h3>架空サイト</h3>
                    <p>Skill</p>
                    <h3>Photoshop</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.works -->

    <!-- modal -->
    <div id="modal01" class="c-modal js-modal">
      <div class="c-modal_bg js-modal-close"></div>
      <div class="c-modal_content _md _lg">
        <div class="c-modal_content_inner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/design/school/school.jpg" alt="modal img">
          <a class="js-modal-close c-modal_close" href=""><i class="fas fa-times-circle"></i></a>
        </div>
      </div>
    </div>
    <div id="modal02" class="c-modal js-modal">
      <div class="c-modal_bg js-modal-close"></div>
      <div class="c-modal_content _md _lg">
        <div class="c-modal_content_inner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/design/temple/screenshot.jpg" alt="modal img">
          <a class="js-modal-close c-modal_close" href=""><i class="fas fa-times-circle"></i></a>
        </div>
      </div>
    </div>
    <div id="modal03" class="c-modal js-modal">
      <div class="c-modal_bg js-modal-close"></div>
      <div class="c-modal_content _md _lg">
        <div class="c-modal_content_inner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/design/fashion/screenshot.jpg" alt="modal img">
          <a class="js-modal-close c-modal_close" href=""><i class="fas fa-times-circle"></i></a>
        </div>
      </div>
    </div>
    <div id="modal04" class="c-modal js-modal">
      <div class="c-modal_bg js-modal-close"></div>
      <div class="c-modal_content _md _lg">
        <div class="c-modal_content_inner">
          <img src="<?php echo get_template_directory_uri(); ?>/img/design/wine/screenshot.png" alt="modal img">
          <a class="js-modal-close c-modal_close" href=""><i class="fas fa-times-circle"></i></a>
        </div>
      </div>
    </div>
    <!-- <?php echo get_template_directory_uri(); ?>/modal -->

    <!-- skill -->
    <section class="skill" id="skill">
      <div class="inner">
        <h2 class="section-title">SKILL</h2>
        <div class="skill-cont wow animate__animated animate__fadeInUp">
          <ul class="skill-list">
            <li class="skill-item">
              <div class="skill-item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/html.png" alt="html">
              </div>
              <div class="skill-body">
                <div class="skill-name">HTML</div>
                <div class="skill-text">★★★★★</div>
              </div>
            </li>
            <li class="skill-item">
              <div class="skill-item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/css.png" alt="css">
              </div>
              <div class="skill-body">
                <div class="skill-name">CSS</div>
                <div class="skill-text">★★★★★</div>
              </div>
            </li>
            <li class="skill-item">
              <div class="skill-item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sass.png" alt="sass">
              </div>
              <div class="skill-body">
                <div class="skill-name">Sass</div>
                <div class="skill-text">★★★★☆</div>
              </div>
            </li>
            <li class="skill-item">
              <div class="skill-item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/js.png" alt="js">
              </div>
              <div class="skill-body">
                <div class="skill-name">JavaScript/jQuery</div>
                <div class="skill-text">★★★★☆</div>
              </div>
            </li>
            <li class="skill-item">
              <div class="skill-item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/wordpress.png" alt="wordpress">
              </div>
              <div class="skill-body">
                <div class="skill-name">WordPress</div>
                <div class="skill-text">★★★★☆</div>
              </div>
            </li>
            <li class="skill-item">
              <div class="skill-item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/photoshop.png" alt="photoshop">
              </div>
              <div class="skill-body">
                <div class="skill-name">Photoshop</div>
                <div class="skill-text">★★★★☆</div>
              </div>
            </li>
            <li class="skill-item">
              <div class="skill-item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/illustrator.png" alt="illustrator">
              </div>
              <div class="skill-body">
                <div class="skill-name">illustrator</div>
                <div class="skill-text">★★★☆☆</div>
              </div>
            </li>
            <li class="skill-item">
              <div class="skill-item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/xd.png" alt="xd">
              </div>
              <div class="skill-body">
                <div class="skill-name">XD</div>
                <div class="skill-text">★★★★☆</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- /.skill -->

    <!-- about -->
    <section class="about" id="about">
      <div class="inner">
        <h2 class="section-title">ABOUT</h2>
        <div class="about-cont wow animate__animated animate__fadeInUp">
          <div class="about-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/myphoto.png" alt="my pohoto">
          </div>
          <div class="about-body">
            <p>Webエンジニアの<span class="-red">Takumi</span>と申します。</p>
            <p><span><i class="fas fa-apple-alt"></i> Introduction</span></p>
            <p>
              現在フロントエンドを中心に、Webサイト制作を行っております。<br>
              <span class="-red">「クオリティ」</span>と<span class="-red">「スピード」</span>を重視しており、ご相談〜納品まで<br>責任を持って対応致します。<br>
              また、クライアント様に寄り添った<span class="-red">丁寧なコミュニケーション</span>を常に心がけ、<br>よりよい「ご提案」を致します。
            </p>
            <p><span><i class="fas fa-graduation-cap"></i> Education & Work History</span></p>
            <p>
              1996年：青森県弘前市出身<br>
              2015年：青森県立弘前南高等学校卒業<br>
              2019年：国立大学法人弘前大学人文学部卒業<br>
              2021年：損害保険会社を退職し、Webエンジニアへ
            </p>
            <div class="about-twitter">
              <a class="about-link" href="https://twitter.com/luvterrier" target="_blank" rel="noopener"><i
                  class="fab fa-twitter-square"></i></a>
            </div>
            <div class="about-github">
              <a class="about-link" href="https://github.com/tkm-webwork" target="_blank" rel="noopener"><i
                  class="fab fa-github"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.about -->

    <!-- contact -->
    <section class="contact" id="contact">
      <div class="inner">
        <h2 class="section-title">CONTACT</h2>
        <div class="contact-cont wow animate__animated animate__fadeInUp">
          <p class="contact-text">お仕事のご相談・ご質問等は、<br class="hidden-pc hidden-tab">下記お問い合わせまで<br>
            お気軽にお問い合わせ・ご相談ください。<br>
            通常3日以内にお返事いたします。<br>
          </p>
          <div class="contact-wrap">
            <?php echo do_shortcode('[mwform_formkey key="5"]'); ?>
          </div>
        </div>
      </div>
    </section>
    <!-- contact -->
  </main>
  <!-- /.main -->

  <?php get_footer();