<!DOCTYPE html>
<html>
<head>
   <?php echo head_contents(); ?>
   <title><?php echo $title; ?></title>
   <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="<?php echo $description; ?>"/>
   <link rel="canonical" href="<?php echo $canonical; ?>" />
   <meta name="keywords" content="blog, books, posts, linux, technews, thoughts, papers, analytics ">
   <title>P&aacute;gina Personal de Jos&eacute; Luis Moreno</title>
   <link rel="stylesheet" type="text/css" href="<?php echo theme_path();?>css/style.css">
</head>
<body>

<div class="container" role="document">


   <?php if ( is_index() ){ ?>
      <div class="col-12">
         
         <h1 class="main"><?php echo blog_title(); ?></h1>
         <p class="bio"><?php echo blog_tagline(); ?> </p>

         <hr />
         <p> <?php echo $description; ?> </p>
         <p> Puedes seguirme en <a target="_blank" href="https://mstdn.mx/@morenitux">Mastodon</a> o leer mis <a target="_blank" href="#posts">Todas mis Publicaciones</a>. </p>

         <p> En otras redes me puedes encontrar como @morenitux pero no publico nada relevante. </p>

         <h3>Mis Repos de Git:</h3>
         <ul class="simple-li">
         <a target="_blank" href="https://github.com/morenitux">Github</a> | <a target="_blank" href="https://gitlab.com/morenitux">GitLab</a>
         </ul>

         <hr />
         <h3 id="posts">Últimas Publicaciones:</h3>
         <?php $lists = recent_posts(true);?>
         <ul class="simple-li">
         <?php foreach ($lists as $l):?> 
            <?php if ( !str_contains($l->tag, 'hide') ) { ?>
                  <li><a href="<?php echo $l->url;?>"><?php echo $l->title;?></a></li>
            <?php } ?>
         <?php endforeach;?>
         </ul>

         <hr />
         <?php $static = find_page('favbooks'); ?>
         <h3><?php echo $static['current']->title; ?></h3>

         <div class="static-ul">
         <?php echo $static['current']->body; ?>
         </div>

         <hr>
         <h3>Cloud Tags</h3>
         <?php echo tag_cloud(); ?>
         <hr>
         </div>


      </div> <!--  Finish col-12 -->
   <?php }else{ ?>
      <div class="col-12">
         <?php echo content() ?>
      </div>
   <?php } ?>

   <div class="col-12">
      <p class="note"> <?php echo copyright(); ?> </p>
   </div>



</div>

</body>
</html>