<?php get_header(); ?>
<!-- Destague -->
<main class="container">
    <div class="row">
        <div class="col-md-8">
            
            <section class="slider">
                <h1 class="fontzero">Nossas Tecnologias:</h1>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $posts_slides = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        ));
                        $i = 1;
                        while($posts_slides->have_posts()) : $posts_slides->the_post();
                        ?>
                        <div class="item <?php if($i == 1) echo 'active';?>">
                            <?php the_post_thumbnail('thumbnail-slide');?>
                            <div class="carousel-caption visible-lg">
                                <h3><?php the_title();?></h3>
<!--                                <p>Aqui vai o testo da postagem que estou fazendo agora.</p>-->
                            </div>
                        </div>
                        <?php $i++; endwhile; wp_reset_postdata();?>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
        </div>
        <div class="col-md-4">
            <aside class="destaques">
                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs posts" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#ultimospost" aria-controls="home" role="tab" data-toggle="tab">Últimos posts</a>
                        </li>
                        <li role="presentation">
                            <a href="#vistos" aria-controls="profile" role="tab" data-toggle="tab">Maisvistos</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="ultimospost">
                            <!-- Ultimas Postagens -->
                            <ul class="list-group">
                                <li class="list-group-item"><span class="badge">1</span>Ultimas Postagens</li>
                                <li class="list-group-item"><span class="badge">2</span>Ultimas Postagens</li>
                                <li class="list-group-item"><span class="badge">3</span>Ultimas Postagens</li>
                                <li class="list-group-item"><span class="badge">4</span>Ultimas Postagens</li>
                                <li class="list-group-item"><span class="badge">5</span>Ultimas Postagens</li>
                            </ul>
                        </div><!--/ Ultimas Postagens -->
                        <div role="tabpanel" class="tab-pane" id="vistos">
                            <!-- Mais Vistos -->
                            <ul class="list-group">
                                <li class="list-group-item"><span class="badge">1</span>Mais Vistos</li>
                                <li class="list-group-item"><span class="badge">2</span>Mais Vistos</li>
                                <li class="list-group-item"><span class="badge">3</span>Mais Vistos</li>
                                <li class="list-group-item"><span class="badge">4</span>Mais Vistos</li>
                                <li class="list-group-item"><span class="badge">5</span>Mais Vistos</li>
                            </ul>                     
                        </div><!--/ Mais Vistos -->
                    </div><!--/ Tab panes -->
                </div>
                <a href="#"><img src="https://placehold.it/360x105" class="img-responsive img-thumbnail" alt="Plublicidade" title="Publicidade"></a>
            </aside>
        </div>
    </div><!--/ Destaque -->
    <!-- Box Noticias e Tutoriais-->
    <siction class="box-noticias-tutoriais">
        <!--Notícias-->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="h2noticias">NOTÍCIAS QUE VOCÊ DEVE LER</h2>			   
                        <div class="row">		   
                            <div class="col-md-6 noticias">			   			    
                                <a href="#"><img src="https://placehold.it/360x220" class="img-responsive  img-thumbnail" alt="Plublicidade" title="Publicidade"></a>                                
                                <h3><a href="#">Titulo sobre a categoria notícias</a></h3>
                                <a href="#" class="btn btn-warning">Veja mais</a>
                            </div><!--/ 2 col-md-6-->
                            <div class="col-md-6 noticias">			   			    
                                <a href="#"><img src="https://placehold.it/360x220" class="img-responsive img-thumbnail" alt="Plublicidade" title="Publicidade"></a>                                
                                <h3><a href="#">Titulo sobre a categoria notícias</a></h3>
                                <a href="#" class="btn btn-warning">Veja mais</a>
                            </div><!--/ 2 col-md-6-->
                        </div><!--/ 3 row -->
                    </div><!--/ 1 col-md-6-->

                    <div class="col-md-6">
                        <h2 class="h2tutoriais">TUTORIAIS QUE VOCÊ DEVE LER</h2>			   
                        <div class="row">		   
                            <div class="col-md-6 tutoriais">			   			    
                                <a href="#"><img src="https://placehold.it/360x220" class="img-responsive  img-thumbnail" alt="Plublicidade" title="Publicidade"></a>                                
                                <h3><a href="#">Titulo sobre a categoria tutoriais</a></h3>
                                <a href="#" class="btn btn-primary">Veja mais</a>
                            </div><!--/ 2 col-md-6-->
                            <div class="col-md-6 tutoriais">			   			    
                                <a href="#"><img src="https://placehold.it/360x220" class="img-responsive  img-thumbnail img-thumbnail" alt="Plublicidade" title="Publicidade"></a>                                
                                <h3><a href="#">Titulo sobre a categoria tutoriais</a></h3>
                                <a href="#" class="btn btn-primary">Veja mais</a>
                            </div><!--/ 2 col-md-6-->
                        </div><!--/ 3 row -->
                    </div><!--/ 1 col-md-6-->
                </div><!--/ 2 row -->			  
            </div><!--/ col-md-12-->	
        </div><!--//1 row-->		
    </siction>

    <!-- Box Games e Vídeos-->
    <siction class="box-games-videos">
        <!--Notícias-->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="h2games">CATEGORIA GAMES</h2>			   
                        <div class="row">		   
                            <div class="col-md-12 games">

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-responsive img-thumbnail" src="https://placehold.it/220x140" alt="Games">
                                        </a>
                                    </div>
                                    <div class="media-body ">									
                                        <h3 class="media-heading">
                                            <a href="#">Titulo sobre a categoria games 1</a>
                                        </h3>
                                        <p class="visible-lg">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque deserunt pariatur dolores elit. Neque deserunt pariatur dolores.
                                        </p>
                                        <a href="#" class="btn btn-success">Veja mais</a>
                                        
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object img-responsive img-thumbnail" src="https://placehold.it/220x140" alt="Games">
                                        </a>
                                    </div>
                                    <div class="media-body ">									
                                        <h3 class="media-heading">
                                            <a href="#">Titulo sobre a categoria games 2</a>
                                        </h3>
                                        <p class="visible-lg">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque deserunt pariatur dolores elit. Neque deserunt pariatur dolores.
                                        </p>
                                        <a href="#" class="btn btn-success">Veja mais</a>
                                        
                                    </div>
                                </div>
                            </div><!--/ 1 col-md-12-->
                        </div><!--/ 3 row -->
                    </div><!--/ 1 col-md-6-->

                    <div class="col-md-5">
                        <h2 class="h2video">VÍDEO DA SEMANA</h2>			   
                        <div class="row">

                            <div class="col-md-12 video">			   			    
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/p4lxqbpcSSg"></iframe>
                                </div>
                                <span><a href="#">Veja mais</a></span>
                                <h3><a href="#">Abertura Webgrad designer</a></h3>
                            </div><!--/ 1 col-md-12-->

                        </div><!--/ 3 row -->
                    </div><!--/ 1 col-md-6-->
                </div><!--/ 2 row -->			  
            </div><!--/ col-md-12-->	
        </div><!--//1 row-->		
    </siction>
</main>
<?php get_footer(); ?>
    