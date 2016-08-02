<?php
/**
 * Template Name: Homepage
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sams-site
 */

get_header(); ?>



<body id="home" class="homepage">
<!--header-->
    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
			

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href=""><img src="<?php bloginfo('template_url');?>/images/logo.png" ></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right" id="collapse-menu">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Accueil</a></li>
                        <li class="scroll"><a href="#features">SAMS</a></li>
                        <li class="scroll"><a href="#services">Services</a></li>
                        <li class="scroll"><a href="#portfolio">Nos Pneux</a></li>
                        <li class="scroll"><a href="#blog">Promotions</a></li> 
                        <li class="scroll"><a href="#get-in-touch">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->




<section id="main-slider">
        <div class="owl-carousel">
            <div class="item">
                <div class="slider-inner">
                    <img src="<?php bloginfo('template_url');?>/images/slider/bg1.jpg" style="width:100%;height:initial;">
                </div>
            </div><!--/.item-->
             <div class="item">
                <div class="slider-inner">
                  <img src="<?php bloginfo('template_url');?>/images/slider/bg2.jpg" style="width:100%;height:initial;">
                </div>
            </div><!--/.item-->
            <div class="item">
                <div class="slider-inner">
                    <img src="<?php bloginfo('template_url');?>/images/slider/bg3.jpg" style="width:100%;height:initial;">
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->
    
    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>SAMS- Le prix attractif, la rapidité de livraison, l'efficacité du service clients</h2>
                    <p>Achetez en toute confiance. SAMS vous aideront à choisir les pneus qui vous conviennent. Sauter et explorer notre vaste inventaire de pneus de voiture, pneus de camionnettes, de pneus SUV, pneus de performance, et bien plus encore. <br>
À partir de pneus de performance à pneus durables de l'économie à l'identique pneu SAMS, nous avons des pneus pour vous. L'équipe vous confiance !

                    </p>
                </div>
                <div class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" href="#get-in-touch">Contactez nous!</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">SAMS Pneu Services</h2>
                <p class="text-center wow fadeInDown">MEILLEURES MARQUES DU MONDE <br>  UNE ÉQUIPE QUI VOUS AVEZ CONFIANCE</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/main-feature.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                        <img src="<?php bloginfo('template_url');?>/images/icon3/1.PNG">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Qualité </h4>
                            <p>SAMS Pneus, de par son expérience, garantit la qualité de ses pneus et de son service tout en conservant les prix parmi les plus bas du marché. </p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                           <img src="<?php bloginfo('template_url');?>/images/icon3/3.PNG">
                        </div>

                        <div class="media-body">
                            <h4 class="media-heading">Professionnalisme</h4>
                            <p>Le principal fondement de SAMS Pneus est basé sur le respect du client. Même si votre sécurité n’a pas de prix, pourquoi la payer plus cher.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                          <img src="<?php bloginfo('template_url');?>/images/icon3/2.PNG">
                        </div>

                        <div class="media-body">
                            <h4 class="media-heading">Rapidité</h4>
                            <p>SAMS Pneus assure le changement de vos pneus dans un temps record, sans rendez-vous, tout en conservant un travail de qualité.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                         <img src="<?php bloginfo('template_url');?>/images/icon3/4.PNG">
                        </div>

                        <div class="media-body">
                            <h4 class="media-heading">Expérience</h4>
                            <p>18 ans d'expérience, plus que 100 clients par jour</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <section id="meet-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Offre Promotionelle</h2>
                <p class="text-center wow fadeInDown">Des offres et des promotions exceptionnelles et exclusives ! <br>Economisez vos dépenses et bénéficiez des réductions importantes et des offres qui ne se ratent pas</p>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/team/01.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Energy XM2 Michelin</h3>
                            <span>175/65 R14 TL 82T</span>
                        </div>
                        <p></p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/team/02.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Energy XM2 Michelin</h3>
                            <span>185/65 R14 86H</span>
                        </div>
                        <p></p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/team/03.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Michelin Primacy 3</h3>
                            <span>215/55 R16 TL 93W</span>
                        </div>
                        <p></p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/team/04.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Pilote Sport3 82V</h3>
                            <span>195/50 R15 TL</span>
                        </div>
                        <p></p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                       </ul>
                    </div>
                </div>
            </div>

            
 <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive"src="<?php bloginfo('template_url');?>/images/team/05.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Primacy HP</h3>
                            <span>225/45 R16 TL 91W</span>
                        </div>
                        <p></p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/team/06.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Primacy 3</h3>
                            <span>205/55 R16 TL 91V</span>
                        </div>
                        <p></p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/team/07.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Energy XM2</h3>
                            <span>205/60 R16 92H</span>
                        </div>
                        <p></p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/team/08.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Primacy HP</h3>
                            <span>195/55 R16 87H</span>
                        </div>
                        <p></p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                       </ul>
                    </div>
                </div>
            </div>
              
                           
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>SAMS</span> PNEU SERVICES</h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">Notre équipe se tient derrière chaque pneu que nous vendons <br /></p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#get-in-touch">Contactez nous</a></p>
                <img class="img-responsive wow fadeIn"  src="<?php bloginfo('template_url');?>/images/cta2/cta2-img.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms">
            </div>
        </div>
    </section>

    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Services</h2>
                <p class="text-center wow fadeInDown"> 
Nos spécialistes de l'entretien auto vous proposent leurs services et leurs conseils <br> pour choisir le pneu le plus adapté à votre véhicule et à votre conduite.</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                             <img src="<?php bloginfo('template_url');?>/images/icon/1.png">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Contrôle d'usure</h4>
                                <p>Chez SAMS, Nous effectuerons, gratuitement, pour vous : La vérification de la pression aux codes constructeurs.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                 <img src="<?php bloginfo('template_url');?>/images/icon/2.png">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Réparation crevaison</h4>
                                <p>Faire une crevaison n'est jamais très agréable. Nous disposons de la rapidité nécessaire pour réparer et monter vos pneus.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                               <img src="<?php bloginfo('template_url');?>/images/icon/3.png">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Parallélisme</h4>
                                <p>Chez SAMS, nous vous proposons systématiquement le contrôle du parallélisme, 
qui est compris dans le prix d'achat.
</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                 <img src="<?php bloginfo('template_url');?>/images/icon/4.png">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Montage</h4>
                                <p>Les magasins SAMS, vous proposent les plus grandes marques de Pneumatiques à prix « pas cher » toute l'année.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                 <img src="<?php bloginfo('template_url');?>/images/icon/5.png">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Pose sans RDV</h4>
                                <p>Votre planning est serré ? Avec un rendez-vous, vous êtes sûr d'être prioritaire et pris à l'heure convenue.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                 <img src="<?php bloginfo('template_url');?>/images/icon/6.png">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Equilibrage</h4>
                                <p>L'équilibrage réalisé dans les règles de l'art vous garantira un confort sans vibration.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Nos Pneus</h2>
                <p class="text-center wow fadeInDown">Notre objectif est d'avoir votre entière satisfaction<br> voilà pourquoi nous vous offrons la garantie de protection la plus complète et abordables</p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">Tout</a></li>
                    <li><a href="#" data-filter=".creative">Pneus de voiture</a></li>
                    <li><a href="#" data-filter=".corporate">Pneus de camionnettes</a></li>
                    <li><a href="#" data-filter=".portfolio">Pneus SUV</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/portfolio/01.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                           
                            <a class="preview" href="images/portfolio/01.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/portfolio/02.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                            
                            <a class="preview" href="images/portfolio/02.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" <img src="<?php bloginfo('template_url');?>/images/portfolio/03.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                            
                            <a class="preview" href="images/portfolio/03.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/portfolio/04.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                           
                            <a class="preview" href="images/portfolio/04.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/portfolio/05.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                           
                            <a class="preview" href="images/portfolio/05.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/portfolio/06.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                           
                            <a class="preview" href="images/portfolio/06.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive"  src="<?php bloginfo('template_url');?>/images/portfolio/07.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                            
                            <a class="preview" href="images/portfolio/07.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/portfolio/08.jpg" alt="">
                        <div class="portfolio-info">
                            <h3></h3>
                          
                            <a class="preview" href="images/portfolio/08.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Pourquoi choisir SAMS Pneu Service auto service </h2>
                <p class="text-center wow fadeInDown">Quand il vient à avoir une voiture ou un camion entretenu, la plupart des conducteurs ont plus de questions que de réponses. <br>  Des questions comme «Qu'est-ce rotor resurfaçage et combien ça coûte ?" Et "Que diable est ce bruit sourd ?"</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title">SAMS Pneu Services</h3>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                       <img src="<?php bloginfo('template_url');?>/images/video/1.jpg">
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Vos pneus moins chers</h3>
                    <p>Pendant de nombreuses années, Nos clients nous ont fait confiance pour offrir des réponses claires et services haut de gamme. SAMS pneu propose une vaste gamme de diagnostic, de réparation et de maintenance de routine, soutenu par une des meilleures garanties de services nationaux dans l'entreprise. </p>

                    <p>Ne sais pas quand la raison de votre véhicule pour les services de maintenance de routine ? Goutte à, et nous allons le chercher pour vous !</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> N°1 de la satisfaction client</li>
                                <li><i class="fa fa-check-square"></i> Disponible et à l’écoute</li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Expérience parfaite</li>
                                <li><i class="fa fa-check-square"></i> Très bonne prestation</li>
                            </ul>
                        </div>
                    </div>

                    <a class="btn btn-primary" href="#get-in-touch">Contactez nous</a>

                </div>
            </div>
        </div>
    </section><!--/#about-->

    <section id="work-process">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">SAMS PNEU SERVICES</h2>
                <p class="text-center wow fadeInDown">Expert en pneus <br>
                Le prix attractif la rapidité de livraison l'efficacité du service clients.</p>
            </div>

            <div class="row text-center">
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div>
<img src="<?php bloginfo('template_url');?>/images/icon2/1.png">
                        </div>
                      
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div>
                            <img src="<?php bloginfo('template_url');?>/images/icon2/2.png">
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                       <div>
                           <img src="<?php bloginfo('template_url');?>/images/icon2/3.png">
                        </div>
                       </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                       <div>
                            <img src="<?php bloginfo('template_url');?>/images/icon2/4.png">
                        </div>
                         </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
                        <div>
                            <img src="<?php bloginfo('template_url');?>/images/icon2/5.png">
                        </div>
                         </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">
                        <div>
                            <img src="<?php bloginfo('template_url');?>/images/icon2/6.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#work-process-->

    <section id="meet-team">
        <div class="container">
            


            

            <div class="row">
                <div class="col-sm-4">
                    <h3 class="column-title">Nos compétences</h3>
                    <strong>Performant</strong>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" role="progressbar" data-width="100">100%</div>
                    </div>
                    <strong>Rapide</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="100">100%</div>
                    </div>
                    <strong>Expérience parfaite</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="100">100%</div>
                    </div>
                    <strong>Délais respecte</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" role="progressbar" data-width="100">100%</div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <h3 class="column-title">Nos atouts</h3>
                    <div role="tabpanel">
                        <ul class="nav main-tab nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">Excellent</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" role="tab" data-toggle="tab" aria-controls="tab2" aria-expanded="false">Rapide</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" role="tab" data-toggle="tab" aria-controls="tab3" aria-expanded="false">Réactif</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab4" role="tab" data-toggle="tab" aria-controls="tab4" aria-expanded="false">Impeccable </a>
                            </li>
                        </ul>
                        <div id="tab-content" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">
                                <p>Disponible et à l’écoute.</p>
                             
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2" aria-labelledby="tab2">
                                <p>Simple, bon service</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3" aria-labelledby="tab3">
                                <p>Montage éclair, efficace</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab4" aria-labelledby="tab3">
                                <p>Bon rapport Qualité / Prix</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <h3 class="column-title">
                    Témoignage</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Mohamed Ali Azaiez
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                   Marchandise conforme à la commande. Livraison super rapide, j'ai été étonné de recevoir mes deux pneus trois jours plus tard.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Wajdi Beji
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                   Tout s'est passé pour le mieux de la commande à la livraison, y compris le montage.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Yasmine Sakhri
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Marchandise conforme à la commande. Livraison super rapide, j'ai été étonné de recevoir mes deux pneus trois jours plus tard.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!--/#meet-team-->

    <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">SAMS</h2>
                
          </div>

            <div class="row text-center"></div>
        </div>
    </section><!--/#animated-number-->

   <!--/#pricing--><br>
   <section>
        <div class="container">
           <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Nos Marques</h2>
                <p class="text-center wow fadeInDown">Quelle que soit la marque de pneus que vous choisissez, nous avons ce qu'il vous faut</p>
            </div>
        </div>
    </section>
   

    <section id="testimonial">
        <div class="container">
        </div>
    </section><!--/#testimonial-->

    <section id="blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">PROMOTION</h2>
                
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/blog/01.jpg" alt="">
                                    <span class="post-format post-format-video"><i class="fa fa-shopping-cart"></i></span>
                                </div>
                                <div class="entry-date"></div>
                                <h2 class="entry-title">SAMS PNEU SERVICES</h2>
                            </header>

                            <div class="entry-content">
                                <P>Découvrer nos promotions sur les pneus. Déstockage de pneus, pneus discount</P>
                                <a class="btn btn-primary" href="#get-in-touch">Contactez nous</a>
                            </div>

                           
                      </article>
                    </div>
                </div><!--/.col-sm-6-->
                <div class="col-sm-6">
                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="100ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/blog/02.jpg" alt="">
                                <span class="post-format post-format-gallery"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date"></div>
                                    <h2 class="entry-title">SAMS PNEU SERVICES</h2>
                                </header>

                                <div class="entry-content">
                                    <P>Découvrer nos promotions sur les pneus. Déstockage de pneus, pneus discount</P>
                                    <a class="btn btn-primary" href="#get-in-touch">Contactez nous</a>
                                </div>

                               
                            </div>
                        </article>
                    </div>
                    <div class="blog-post blog-media wow fadeInRight" data-wow-duration="300ms" data-wow-delay="200ms">
                        <article class="media clearfix">
                            <div class="entry-thumbnail pull-left">
                                <img class="img-responsive" src="<?php bloginfo('template_url');?>/images/blog/03.jpg" alt="">
                                <span class="post-format post-format-audio"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                            <div class="media-body">
                                <header class="entry-header">
                                    <div class="entry-date"></div>
                                    <h2 class="entry-title">SAMS PNEU SERVICES</h2>
                                </header>

                                <div class="entry-content">
                                    <P>Découvrer nos promotions sur les pneus. Déstockage de pneus, pneus discount.</P>
                                    <a class="btn btn-primary" href="#get-in-touch">Contactez nous</a>
                                </div>

                              
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Contactez nous</h2>
                <p class="text-center wow fadeInDown">ET MAINTENANT, CONTACTEZ-NOUS C’EST LE MOMENT DE TRAVAILLER ENSEMBLE ! </p>
            </div>
        </div>
    </section><!--/#get-in-touch-->
    

    <script src="js/jquery.js"></script>
   <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC1lNkJaTaPIhv_LOMa-ycU0isfFCjj0Mw'></script>
     
   <section id="contact">
   <div style="overflow:hidden">
	   <div style='overflow:hidden;height:600px;width:100%;'>
		   <div id='gmap_canvas' style='height:600px;width:100%;'></div>
		   <div>
			   <small>
					<a href="http://embedgooglemaps.com"></a>
			   </small>
		   </div>
		   <div>
				<small><a href="http://youtubeembedcode.com"></a></small>
		   </div>
		   <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
	   </div>
   </div>   

</section>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Nous rejoindre</h3>

                            <address>
                              <strong>Atelier & Magasin
                            </strong><br>
                              Avenue de la liberté 4050 Sahloul 2 <br>
                              Sousse Tunisie
							  <br>
                              <abbr title="Phone">P:</abbr> 00216-73-820-596
                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="mailer.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nom" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Objet" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">VALIDER</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>








	
<?php get_footer();?>
