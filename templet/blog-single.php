<?php
    
   // $blogS = $data[$data['id']];
    //$this ->pnt(id, place holder);
   // $this ->pre(['p'=>$data,'t'=>'data']);
   // $this ->pre(['p'=>$blogS,'t'=>'blogS']);
   // $this ->pre(['p'=>$data['id'],'t'=>'blogS']);
    $blog = $data['blog']['id'];
    $ultimos = $data['ultimos'];
   // echo $blog;
?>
<!-- Page title -->
<div class="page-title background2">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">                    
                <div class="page-title-heading">
                    <h1 class="title jmy_web_div" data-tabla="blog" data-page="<?php echo $blog; ?>" id="titulo" ><?php $this->pnt('titulo','Titulo del blog.'); ?></span></h1>
                </div><!-- /.page-title-captions -->
                <div class="breadcrumbs jmy_web_div" data-tabla="blog" data-page="<?php echo $blog; ?>" id="subtitulo" ><?php $this->pnt('subtitulo','<ul><li>Descripción corta</li></ul>'); ?>
                </div><!-- /.breadcrumbs -->   
            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div><!-- /.page-title --> 

<!-- Blog posts -->
<section class="main-content blog-posts blog-single  background6">
    <div class="container">
        <div class="row">
            <div class="wrap-content-post">
                <div class="post-wrap">
                    <article class="post clearfix">
                        <div class="featured-post jmy_web_div" id="imagen" data-page="<?php echo $blog; ?>" data-tabla="blog">
                            <?php $this->pnt('imagen','
                            <img src="'.$this->url_templet(["return"=>true]).'images/blog/1.jpg" alt="image">'); ?>
                        </div><!-- /.feature-post -->

                        <div class="content-post">
                            <h4 class="title-post jmy_web_div" id="fecha" data-page="<?php echo $blog; ?>" data-tabla="blog" data-editor="no"><?php $this->pnt('fecha',date('Y').'/'.date('m').'/'.date('d')); ?></h4>                          
                            <ul class="meta-post clearfix">
                                <li class="author">
                                    <a href="#" class=" jmy_web_div" id="nombre_autor" data-page="<?php echo $blog; ?>" data-tabla="blog" data-editor="no"> <?php $this->pnt('nombre_autor','Nombre del autor'); ?></a>    
                                </li>
                                <li class="categories jmy_web_div bsk_tags" id="tags" data-page="<?php echo $blog; ?>" data-tabla="blog" data-editor="no"> <?php $this->pnt('tags','Tag 1, Tag 2, separado por comas'); ?>
                                </li>
                            </ul><!-- /.meta-post -->
                            

                            <div class="entry excerpt jmy_web_div" id="post" data-page="<?php echo $blog; ?>" data-tabla="blog"><?php $this->pnt('post','<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat sit amet, consectetuer adipiscing elit, sed diam nonumm. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat sit amet, consectetuer adipiscing elit, sed diam nonumm.
                                </p>
                                <blockquote>                                        
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.
                                </blockquote>                                
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>'); ?></div>
                            <!--
                            <div class="direction">
                                <ul>                                        
                                    <li>
                                        <div class="black-button"><a href="#" rel="prev">Prev Post</a></div>
                                    </li>                 
                                    
                                    <li>
                                        <div class="accent-button"><a href="" rel="next">Next Post</a></div>
                                    </li>                                             
                                </ul>
                            </div>
                        -->
                        </div><!-- /.content-post -->
                    </article>    

                    
                </div><!-- /.post-wrap -->                 
            </div><!-- /.content-post -->  

            <div class="sidebar-post">

                    <div class="widget widget_text widget_info lateral-blog">
                        <h5 class="widget-title jmy_web_div" id="titulo_desc_blog" data-page="blog" data-editor="no"><?php $this->pnt('titulo_desc_blog','Descripcion del blog',["secundario"=>"tema_blog"]); ?></h5>
                        <div class="textwidget">                                
                            <p class="jmy_web_div" id="descripcion_blog" data-page="blog" data-editor="no">
                                <?php $this->pnt('descripcion_blog','Sed pellentesque nibh enim, quis euismod enim lacinia nec. Phasellus quam diam, semper in erat eu. Consectetur adipiscing elit. Sed pellentesque nibh enim, quis euismod enim lacinia nec.',["secundario"=>"tema_blog"]); ?></p>
                            <div class="social-links">

                                <a href="https://twitter.com/SocialComsis"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/SocialComsis/?ref=http://social.comsis.mx/"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/socialcomsis/?hl=es-la"><i class="fa fa-pinterest"></i></a>

                               
                            </div>                              
                        </div><!-- /.textwidget -->
                    </div>                                

                    <div class="widget widget-recent-news lateral-blog">
                        <h5 class="widget-title jmy_web_div" id="ultimos_post" data-page="blog" data-editor="no"><?php $this->pnt('ultimos_post','Últimos Post',["secundario"=>"tema_blog"]); ?></h5>
                        <ul class="popular-news clearfix">

                             <?php
                    for($i=0;$i<count($ultimos['otKey']);$i++){
                        $tmp=$ultimos['ot'][$ultimos['otKey'][$i]];
                        if($tmp['url']!='' && $tmp['titulo']!='' ){
                            $t =explode('src="', $tmp['imagen']);
                            $t =explode('"', $t[1]);
                            $tmp['imagen']=$t[0];
                            $img=($tmp['imagen']!='')?$tmp['imagen']:RUTA_ACTUAL.BASE_TEMPLET.'images/blog/1.jpg';
                           
                            echo '<li>
                                    <div class="thumb">
                                       <img src="'.$img.'" alt="image">
                                    </div>
                                    <div class="text">                        
                                        <h6>
                                            <a href="'.RUTA_ACTUAL.'blog/'.$tmp['url'].'">'.$tmp['titulo'].'</a>
                                        </h6>    
                                        <p>'.$tmp['fecha'].'</p>               
                                    </div>
                                </li>';

                        }
                    }?>
                    <li>
                        <div class="text">                        
                            <h6>
                                <a href="<?php echo RUTA_ACTUAL.'blog/'; ?>" class=" jmy_web_div" id="ver_mas_post" data-page="blog" data-editor="no"><?php $this->pnt('ver_mas_post','Ver más posts',["secundario"=>"tema_blog"]); ?></a>
                            </h6>              
                        </div>
                    </li>
                        </ul><!-- /.popular-news -->
                    </div><!-- /.widget-popular-news -->

                    <div class="widget widget_tag lateral-blog">
                        <h5 class="widget-title jmy_web_div" id="titulo_categorias" data-page="blog" data-editor="no"><?php $this->pnt('titulo_categorias','Categorías',["secundario"=>"tema_blog"]); ?></h5>
                        <div class="tag-list">
                            <?php 
                            $tmp = $this->pnt('tags','',["return"=>true]);
                            $tmp = explode(",", $tmp);
                            for($i=0;$i<count($tmp);$i++){
                                echo '<a href="'.RUTA_ACTUAL.'categorias/'.trim($tmp[$i]).'">'.trim($tmp[$i]).'</a>';
                            }
                            ?>
                            

                        </div>
                    </div><!-- /.widget-tag -->
                </div><!-- /.sidebar -->
            </div><!-- /.sidebar-post -->            
        </div><!-- /.row -->           
    </div><!-- /.container -->   
</section>   
