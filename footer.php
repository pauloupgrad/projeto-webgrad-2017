<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Seja o primeiro a receber notícias e vídeos de nosso site.</h2>
                <h3>Deixe seu e-mail abaixo.</h3>
                <form class="form-inline text-center">				

                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Deixe seu e-mail aqui...">

                    <button type="submit" class="btn btn-primary ">Enviar agora</button>
                </form>
            </div>
        </div>
    </div>
</div>
<footer class="rodape">
    <div class="container">
        <div class="row">
            <div class="col-md-4 infofooter">
                <h4><span class="glyphicon glyphicon-star-empty"></span> Webgrad Designer</h4>
                <h5>Seu site de dicas da web, o conhecimento é prioridade!</h5>
                <p>Criada em 2010, a Webgrad Designer está sempre se esforsando 
                    para passar a seus seguidores o melhor conteúdo online!</p>
                <p>A Webgrad tem o propósito de transmitir conhecimento 
                    a seus usuários, pois temos a seguinte opinião tranferir 
                    sabedoria engrandece a alma!</p>
                <p>© Webgrad Designer</p>				
            </div>
            <div class="col-md-4 menufooter">
                <h4><span class="glyphicon glyphicon-th-list"></span> Navegação rápida</h4>
                <h5>Visite nosso site com mais facilidade entre os conteúdos.</h5>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'links_uteis',
                    'container' => ''
                ));
                ?>
            </div>
            <div class="col-md-4 contatofooter">

                <h4><span class="glyphicon glyphicon-screenshot"></span> Contatos e Redes Sociais</h4>
                <h5>Por aqui você encontra a Webgrad Designer facilmente em suas redes sociais.</h5>
                <div class="redesfooter">
                    <a href="#">
                        <img src="<?php bloginfo('template_url'); ?>/images/facebook.png" 
                             class="img-responsive img-circle"></a>
                    <a href="#">
                        <img src="<?php bloginfo('template_url'); ?>/images/google-plus.png" 
                             class="img-responsive img-circle"></a>
                    <a href="#">
                        <img src="<?php bloginfo('template_url'); ?>/images/twitter.png" 
                             class="img-responsive img-circle"></a>
                    <a href="#">
                        <img src="<?php bloginfo('template_url'); ?>/images/youtube.png" 
                             class="img-responsive img-circle"></a>
                    <a href="#">
                        <img src="<?php bloginfo('template_url'); ?>/images/rss.png" 
                             class="img-responsive img-circle"></a>
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/instagram.png" 
                                     class="img-responsive"></a>
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/email.png" class="img-responsive img-circle"></a>
                </div>
                <h4><span class="glyphicon glyphicon-screenshot"></span> Desenvolvedor Designer</h4>
                <p>Este site foi desenvolvida orgulhosamente com Wordpress e Bootstrap, respeitando todos os padrões da W3C.</p>			
                <p>® development by Paulo Upgrad</p>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 copy">
                CopyRight &copy; 2010 - <?php echo date('Y'); ?> | Webgrad Designer - Todos os direitos reservados.
                <p class="permicao">A WEBGRAD DESIGNER NÃO DA PREMIÇAO PARA COPIA DO CONTEÚDO PUBLICADO EM NOSSO SITE.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Modal Cadastro e Login -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Minha Conta</h4>
            </div>

            <div class="modal-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#logar" aria-controls="logar" role="tab" data-toggle="tab">Logar</a></li>
                    <li role="presentation"><a href="#cadastro" aria-controls="cadastro" role="tab" data-toggle="tab">Regras do Site</a></li>			  
                </ul>

                <!-- Tab panes -->
                <div class="tab-content minha_conta">
                    <div role="tabpanel" class="tab-pane active" id="logar">
                        <?php
                          if( is_active_sidebar('sidebar-login') ){
                              dynamic_sidebar('sidebar-login');
                          }
                        ?>
                    </div>

<!--                    <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Usuário</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Usuário">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                            </div>
                            <button type="submit" class="btn btn-primary">Logar</button>
                        </form>-->
                    
                    
                    
                    <div role="tabpanel" class="tab-pane main_normas" id="cadastro">
                        <?php
                        if (is_active_sidebar('sidebar-normas')) {
                            dynamic_sidebar('sidebar-normas');
                        }
                        ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- FIM Modal Cadastro e Login -->
<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>