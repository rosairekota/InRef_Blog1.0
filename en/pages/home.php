
      <section id="mu-slider">
        <!-- Start single slider item -->
        <div class="mu-slider-single">
          <div class="mu-slider-img">
            <figure>
              <img src="../assets/img/slider/sLide-d.jpg" alt="img">
            </figure>
          </div>
          <div class="mu-slider-content">
            <h4>Futuris Research Institute (InReF) </h4>
              <span></span><span></span>
            <h2>InReF</h2>
            <p> Research and Innovation at the service of the community.</p>
            <a href="#Bienvenue" class="mu-read-more-btn" style="margin-top:50px;">Read more</a>
          </div>
        </div>
        <div class="mu-slider-single">
          <div class="mu-slider-img">
            <figure>
              <img src="../assets/img/slider/four chaud.jpg" alt="img">
            </figure>
          </div>
          <div class="mu-slider-content">
            <h4>Research and Innovation at the service of the community.</h4>
            <span></span><span></span>
              <h2>InReF</h2>
              <p> Futuris Research Institute</p>
              <a href="#Bienvenue" class="mu-read-more-btn" style="margin-top:50px;">Read more</a>
        </div>
        </div>
        <div class="mu-slider-single">
          <div class="mu-slider-img">
            <figure>
              <img src="../assets/img/slider/sLide-B.jpg" alt="img">
            </figure>
          </div>
          <div class="mu-slider-content">
            <h4>Futuris Research Institute</h4>
            <span></span><span></span>
            <h2>InReF</h2> <br><br>
            <p> Research and Innovation at the service of the community.</p>
            <a href="#Bienvenue" class="mu-read-more-btn" style="margin-top:50px;">Read more</a>

          </div>
        </div>
        <!-- Start single slider item -->
      </section>
      <!-- End Slider -->
      <!-- Start service  -->

      <section >
        <!-- End serviclass="img img-circle"ce  -->
        <div class="container" >
          <div class="row">
          <div class="img-thumbnail" style="background-color:#0e8;margin-top:50px;padding:50px 50px;">
            <div class="col-lg-12 col-md-12" style="color:white;">
            <h2 class="mu-title" id="Bienvenue">WELCOME</h2> <br> <br>
            <div>
            <hr>
            </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <p>The Futuris Research Institute (InReF) is above all a mixed and private research organization, a partner of higher education and university institutions. It aims to promote research to the greater good of the community. He works on several topics including climate change, energy transition, ecological transition, sustainable development.</p>
              <p>InReF participates in the implementation of policies relating to energy, the environment and sustainable development.</p>
              <p>InReF wants to boost research through innovation, in the following areas:</p>
              <pt>
                <li>Waste recovery and biomass & waste management,</li>
                <li>Renewable energy, energy efficiency,</li>
                <li>Reduction of polluting emissions,</li>
                <li>Decentralized rural electrification, sustainable construction,</li>
                <li>Transition to the circular economy.</li>
              </pt>
              <p>InReF is accredited to the Ministries of Scientific Research, Industry, Energy, and the Environment of the Democratic Republic of Congo.</p>
            </div>
          </div>
          </div>
        </div>
      </section>

      <!--SECTION PUBLICATIONS-->
      <section id="mu-from-blog" style="background-image:url('../assets/img/Untitled-4.jpg'); width:100%; height:100%;">
        <div class="container" style="background-color:none;padding:50px 50px;">
          <div class="img-thumbnail " style="background-color:none;padding:50px 50px;">
            <div class="row">
              <div class="col-md-12">
                <div class="mu-from-blog-area" >
                  <!-- start title -->
                  <div class="mu-title" id="precedent">
                    <h2>LATEST PUBLICATIONS</h2>
                    <p>Do not hesitate to download the PDF version, if you are interested!</p>
                  </div>

                  <div class="mu-from-blog-content">
                    <div class="row">
                      <?php
                          $posts=get_post();
                          foreach ($posts as $post){

                       ?>
                      <div class="col-md-6 col-sm-6">
                        <article class="mu-blog-single-item">
                          <figure class="mu-blog-single-img">
                            <a href="#"><img src="../assets/img/articles/<?=$post->image?>" alt="img" style="width:400px; height:200px;"></a>
                            <figcaption class="mu-blog-caption">
                              <h3><a href="#"><?=$post->title;?></a></h3>
                            </figcaption>
                          </figure>
                          <div class="mu-blog-meta">
                            <a href="#">Posted the <?=date("d/m/y at H:i",strtotime($post->date))?></a>
                            <span><i class="fa fa-comments-o text-danger"><?=$post->type?></i></span>
                          </div>
                          <div class="mu-blog-description">
                            <p><?=substr(nl2br($post->content),0,100)?>...</p>
                            <a class="mu-read-more-btn" href="index.php?page=article&id=<?=$post->id_article?>">Read more</a>
                          </div>
                        </article>
                      </div>
                    <?php } ?>
                    </div>
                  </div>

                  <!-- end from blog content   -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--VALEUR-->
      <section id="mu-about-us" >
        <div class="container">
          <div class="row">
            <div class="col-md-12 img img-thumbnail" style="background-color:#0e8;/*0c8*/ padding:50px 50px;">
              <div class="mu-about-us-area">
                <div class="row" id="valeurs">
                  <div class="col-lg-12 col-md-12">
                    <div class="mu-about-us-left">
                      <!-- Start Title -->
                      <div>
                        <h2 class="mu-title" style="color:white;">OUR VALUES</h2>
                      </div>
                      <p>As values, InReF takes well-being seriously. Its vision is a culture of excellence and technical expertise that can be made available to its partners and the community. </p>
                      <p>Its culture is based on key values shared by all members and collaborators :<hr> <strong>Professionalism</strong>, <strong>Innovation</strong>, <strong>Transparency And Well-Bein</strong> </p>
                     </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="mu-about-us" style="background-image:url('../assets/img/Untitled-4.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-md-12 img img-thumbnail" style="background-color:#fff;padding:50px 50px;">
              <div class="mu-about-us-area">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="mu-about-us-left" id="Mot_directeur">
                      <!-- Start Title -->
                      <div>
                        <h2 class="mu-title">WORD FROM THE DIRECTOR OF THE RESEARCH INSTITUTE</h2>
                      </div>
                      <!-- End Title -->
                      <p>We had the idea to create this research institute to bring our expertise to the problems of the community, through research and innovation. The InReF's main goal is to revitalize scientific research in the Democratic Republic of Congo, where research is done simply for didactic and academic reasons. </p>
                      <p>Thus, the InReF wants to be the pioneer in the path leading to research and industrial realization, for a technology exploitable by the community.</p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">

                      <img src="../assets/img/ceo.png" alt="img" width="100%" >
                    </a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
