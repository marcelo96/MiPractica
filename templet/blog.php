<?php

//$this->pre(['p'=>$data,'t'=>'Variables disponibles']);
$blog_templet = $data['blog_templet'];
$blog = $data['resultados'];
?>
<!-- Page title -->
<div class="page-title background2">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">                    
                <div class="page-title-heading">
                    <h1 class="title jmy_web_div" id="titulo_blog" data-page="blog" data-editor="no">
                        <?php $this->pnt('titulo_blog','Blog'); ?>
                       </span></h1>
                </div><!-- /.page-title-captions -->
                <div class="breadcrumbs jmy_web_div" id="sub_titulo_blog" data-page="blog"  data-editor="no">
                    <?php $this->pnt('sub_titulo_blog','<ul>
                        <li><a>Sub titulo o desripción</a></li>
                    </ul>                   '); ?>                    
                </div><!-- /.breadcrumbs -->   
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div><!-- /.page-title --> 

<!-- Blog posts -->
<section class="main-content blog-posts background4 background_bottom">
    <div class="container">
        <div id="jmy_web_agregar_blog"></div>
        <div class="row">
            <div class="wrap-content-post">
                <div class="post-wrap">
                    <?php
                    for($i=0;$i<count($blog['otKey']);$i++){
                        $tmp=$blog['ot'][$blog['otKey'][$i]];
                        if($tmp['url']!='' && $tmp['titulo']!='' ){
                            $t =explode('src="', $tmp['imagen']);
                            $t =explode('"', $t[1]);
                            $tmp['imagen']=$t[0];
                            $img=($tmp['imagen']!='')?$tmp['imagen']:RUTA_ACTUAL.BASE_TEMPLET.'images/blog/1.jpg';
                            echo '<article class="post clearfix">
                                <div class="featured-post">
                                    <img src="'.$img.'" alt="image">
                                    <ul class="post-comment">           '.$tmp['fecha'].'
                                    </ul><!-- /.post-comment -->
                                </div><!-- /.feature-post -->
                                <div class="content-post">
                                    <h2 class="title-post"><a href="'.RUTA_ACTUAL.'blog/'.$tmp['url'].'">'.$tmp['titulo'].'</a></h2>
                                    <div class="entry-post excerpt">                              
                                        <p>'.$tmp['subtitulo'].'
                                        </p>
                                        <div class="more-link">
                                        <a href="'.RUTA_ACTUAL.'blog/'.$tmp['url'].'">Leer más</a>
                                        </div>
                                    </div>
                                </div><!-- /.content-post -->
                            </article>';
                        }
                    }?>
                    
                </div><!-- /.post-wrap -->  
                 <div class="blog-pagination">
                    <ul class="flat-pagination clearfix">    
                        <li class="next">
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </li>                               
                    </ul><!-- /.flat-pagination -->
                </div><!-- /.blog-pagination -->                  
            </div><!-- /.content-post -->  

            <div class="sidebar-post">
                <div class="sidebar">                 

                    <div class="widget widget_text widget_info lateral-blog">
                        <h5 class="widget-title jmy_web_div" id="titulo_desc_blog" data-page="blog" data-editor="no"><?php $this->pnt('titulo_desc_blog','Descripcion del blog'); ?></h5>
                        <div class="textwidget">                                
                            <p class="jmy_web_div" id="descripcion_blog" data-page="blog" data-editor="no">
                                <?php $this->pnt('descripcion_blog','Sed pellentesque nibh enim, quis euismod enim lacinia nec. Phasellus quam diam, semper in erat eu. Consectetur adipiscing elit. Sed pellentesque nibh enim, quis euismod enim lacinia nec.'); ?></p>
                            <div class="social-links">

                                <a href="https://twitter.com/SocialComsis"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/SocialComsis/?ref=http://social.comsis.mx/"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/socialcomsis/?hl=es-la"><i class="fa fa-pinterest"></i></a>

                               
                            </div>                              
                        </div><!-- /.textwidget -->
                    </div>                            

                   <?php /*
                    <div class="widget widget_tag">
                        <h5 class="widget-title">Tags</h5>
                        <div class="tag-list">
                            <a class="active" href="#">Graphic Design</a>
                            <a href="#">Lifestyle</a>
                            <a href="#">Road Trip</a>
                            <a href="#">Vintage</a>
                            <a href="#">Photography</a>  
                            <a href="#">Branding</a>              
                        </div>
                    </div><!-- /.widget-tag -->
                    */ ?>
                </div><!-- /.sidebar -->
            </div><!-- /.sidebar-post -->            
        </div><!-- /.row -->           
    </div><!-- /.container -->   
</section>        