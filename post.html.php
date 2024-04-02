<?php if (!defined('HTMLY')) die('HTMLy'); ?>

<div class="navbar-top">
   <a class="back-page" href="<?php echo site_url();?>"> Inicio </a>
</div>

<div class="post">
    <div class="main">
        <?php if (!empty($p->link)) { ?>
        <h1 class="title-post" itemprop="name"><a target="_blank" href="<?php echo $p->link ?>"><?php echo $p->title ?> &rarr;</a></h1>
        <?php } else { ?>
        <h1 class="title-post" itemprop="name"><?php echo $p->title ?></h1>
        <?php } ?>

        <?php if (!empty($p->image)) { ?>
            <div class="featured-image">
                <a href="<?php echo $p->url ?>"><img src="<?php echo $p->image; ?>" alt="<?php echo $p->title ?>"/></a>
            </div>
        <?php } ?>
        <?php if (!empty($p->video)) { ?>
            <div class="featured-video">
                <iframe src="https://www.youtube.com/embed/<?php echo get_video_id($p->video); ?>" width="560" height="315" frameborder="0" allowfullscreen></iframe>
            </div>
        <?php } ?>
        <?php if (!empty($p->audio)) { ?>
            <div class="featured-audio">
                <iframe width="560" height="315" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $p->audio;?>&amp;auto_play=false&amp;visual=true"></iframe>
            </div>
        <?php } ?>
        <?php if (!empty($p->quote)) { ?>
            <div class="featured-quote">
                <blockquote><?php echo $p->quote ?></blockquote>
            </div>
        <?php } ?>
        <div class="post-body post-<?php echo $p->date;?>" itemprop="articleBody">
            <?php echo $p->body; ?>
        </div>
        <div>
            <small>
               <strong>Autor:</strong> <?php echo $author->name ?> | 
               <strong>Fecha: </strong> <?php echo format_date($p->date) ?> <br>
               <strong>Categoría: </strong> <?php echo $p->category; ?> | 
               <strong> Tags:</strong> <?php echo $p->tag;?><br>
            </small>

         </div>
    </div>
    
    <hr>

    <div class="postnav">
        <?php if (!empty($next)): ?>
            <span><a href="<?php echo($next['url']); ?>" ><?php echo($next['title']); ?></a></span>
        <?php endif; ?>
        <?php if (!empty($prev)): ?>
            <span><a href="<?php echo($prev['url']); ?>" ><?php echo($prev['title']); ?></a></span>
        <?php endif; ?>
    </div>

</div>