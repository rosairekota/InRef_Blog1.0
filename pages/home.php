
      <section id="mu-slider">
        <!-- Start single slider item -->
        <div class="mu-slider-single">
          <div class="mu-slider-img">
            <figure>
              <img src="assets/img/slider/sLide-d.jpg" alt="img">
            </figure>
          </div>
          <div class="mu-slider-content">
            <h4>Institut de Recherche Futuris </h4>
              <span></span><span></span>
            <h2>InReF</h2>
            <p> La Recherche et L'innovation au service de la communauté.</p>
            <a href="#Bienvenue" class="mu-read-more-btn" style="margin-top:50px;">Lire la suite</a>
          </div>
        </div>
        <div class="mu-slider-single">
          <div class="mu-slider-img">
            <figure>
              <img src="assets/img/slider/four chaud.jpg" alt="img">
            </figure>
          </div>
          <div class="mu-slider-content">
            <h4>La Recherche et L'innovation au service de la communauté.</h4>
            <span></span><span></span>
              <h2>InReF</h2>
              <p> Institut de Recherche Futuris.</p>
              <a href="#Bienvenue" class="mu-read-more-btn" style="margin-top:50px;">Lire la suite</a>
        </div>
        </div>
        <div class="mu-slider-single">
          <div class="mu-slider-img">
            <figure>
              <img src="assets/img/slider/sLide-B.jpg" alt="img">
            </figure>
          </div>
          <div class="mu-slider-content">
            <h4>Institut de Recherche Futuris </h4>
            <span></span><span></span>
            <h2>InReF</h2> <br><br>
            <p> La Recherche et L'innovation au service de la communauté.</p>
            <a href="#Bienvenue" class="mu-read-more-btn" style="margin-top:50px;">Lire la suite</a>

          </div>
        </div>
        <!-- Start single slider item -->
      </section>
      <!-- End Slider -->
      <!-- Start service  -->

      <section>
        <!-- End serviclass="img img-circle"ce  -->
        <div class="container" >
          <div class="row">
          <div class="img-thumbnail" style="background-color:#0e8;margin-top:50px;padding:50px 50px;">
            <div class="col-lg-12 col-md-12" style="color:white;">
            <h2 class="mu-title" id="Bienvenue">BIENVENUE</h2> <br> <br>
            <div>
            <hr>
            </div>
            </div>
            <div class="col-lg-12 col-md-12">
              <p>L’Institut de Recherche Futuris (InReF) est avant tout une structure de recherche mixte et privée, partenaire des établissements d’enseignement supérieur et universitaire. Il a pour but de valoriser la recherche au plus grand bien de la communauté. Il travaille sur plusieurs thématiques notamment le changement climatique, la transition énergétique, la transition écologique, le développement durable.</p>
              <p>L’InReF participe à la mise en œuvre des politiques en matière de l’énergie, de l’environnement, et du développement durable.</p>
              <p>L’InReF veut dynamiser la recherche par l’innovation, dans les domaines suivants :</p>
              <pt>
                <li>Valorisation des déchets et biomasses & gestion des déchets,</li>
                <li>Énergies renouvelables, l’efficacité énergétique,</li>
                <li>Réduction des émissions polluantes,</li>
                <li>Electrification rurale décentralisée, construction durable,</li>
                <li>Transition vers l’économie circulaire.</li>
              </pt>
              <p>L’InReF est agréé aux ministères de la recherche scientifique, de l’industrie, de l’énergie, et de l’environnement de la République Démocratique du Congo.</p>
            </div>
          </div>
          </div>
        </div>
      </section>

      <!--SECTION PUBLICATIONS-->
      <section id="mu-from-blog " style="background-image:url('assets/img/Untitled-4.jpg'); width:100%; height:100%;">
        <div class="container" style="background-color:none;padding:50px 50px;">
          <div class="img-thumbnail " style="background-color:none;padding:50px 50px;">
            <div class="row">
              <div class="col-md-12">
                <div class="mu-from-blog-area" >
                  <!-- start title -->
                  <div class="mu-title" id="precedent">
                    <h2>DERNIERES PUBLICATIONS</h2>
                    <p>N'hésitez de télécharger le version PDF, si cela vous intéresse!</p>
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
                            <a href="#"><img src="assets/img/articles/<?=$post->image?>" style="width:400px; height:200px;"></a>
                            <figcaption class="mu-blog-caption">
                              <h3><a href="#"><?=$post->title;?></a></h3>
                            </figcaption>
                          </figure>
                          <div class="mu-blog-meta">
                            <a href="#">Le <?=date("d/m/y à H:i",strtotime($post->date))?></a>
                            <span><i class="fa fa-comments-o text-danger"><?=$post->type?></i></span>
                          </div>
                          <div class="mu-blog-description">
                            <p><?=substr(nl2br($post->content),0,100)?>...</p>
                            <a class="mu-read-more-btn" href="index.php?page=article&id=<?=$post->id_article?>">Lire la suite</a>
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
                        <h2 class="mu-title" style="color:white;">NOS VALEURS</h2>
                      </div>
                      <p>Comme valeurs, l’InReF prend le bien-être au sérieux. Elle a comme vision la culture de l’excellence et expertise technique, pouvant être mises à la disposition de ses partenaires et de la communauté. </p>
                      <p>Sa culture se fonde autour de valeurs clés partagées par tous les membres et collaborateurs :<hr> <strong>Professionnalisme</strong>, <strong>Innovation</strong>, <strong>Transparence et Bien-être</strong> </p>
                     </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="mu-about-us" style="background-image:url('assets/img/Untitled-4.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-md-12 img img-thumbnail" style="background-color:#fff;padding:50px 50px;">
              <div class="mu-about-us-area">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="mu-about-us-left" id="Mot_directeur">
                      <!-- Start Title -->
                      <div>
                        <h2 class="mu-title">MOTS DU DIRECTEUR</h2>
                      </div>
                      <!-- End Title -->
                      <p>Nous avons eu l’idée de créer cet institut de recherche dans le but d’apporter notre expertise aux problèmes de la communauté, par la recherche et l’innovation. L’InReF a pour principal but de redynamiser la recherche scientifique en République Démocratique du Congo, où la recherche est faite simplement pour des raisons didactique et académiques.</p>
                      <p>Ainsi, l’InReF se veut être le pionner dans le chemin menant à la recherche et réalisation industrielle, pour une technologique exploitable par la communauté.</p>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">

                      <img src="assets/img/ceo.png" alt="img" width="100%" >
                    </a>

                  </div>
                  <!--<div class="col-lg-6 col-md-6">
                    <div class="mu-about-us-right">
                    <a id="mu-abtus-video" href="https://www.youtube.com/embed/HN3pm9qYAUs" target="mutube-video">
                      <img src="assets/img/Directeur.png" alt="img">
                    </a>
                    </div>
                  </div>
                -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
