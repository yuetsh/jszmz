<?php

/**
 * 这是Sloger的包含bootstrap和semantic的主题
 * 
 * @package Boot-Sematic Theme
 * @author Sloger
 * @version 1.0
 * @link http://blog.sloger.info
 */
 
    $this->need('header.php');
?>
<div class="main">
<?php if (!isset($_GET['allcate'])):  ?>

    <?php while($this->next()):  
    $i=""; ?>
    <article class="block post">
        <span class="round-date <?php $this->options->labelColor() ?>">
            <span class="month"><?php $this->date('m月'); ?></span>
            <span class="day"><?php $this->date('d'); ?></span>
        </span>
        <p class="title"><a href="<?php $this->permalink() ?>" target="_blank"><?php $this->title(56,'...'); ?></a><br/>
        <span class="article-meta">发布者： <?php $this->author(); ?>&nbsp&nbsp&nbsp&nbsp&nbsp分类： <?php $this->category(','); ?></span>
        </p>
        <?php if (($i=Thumbnail_Plugin::show($this))!="") : ?>
            <div class="Thumb">
                <img src="<?php echo $i; ?>" />
            </div>
        <?php endif; ?>
        
    <!--    <div class="ui ribbon label <?php $this->options->labelColor() ?>"><?php $this->category(','); ?></div>
    -->
       <div class="article-content<?php echo $i ? "-thumb" : "-noimg"; ?> <?php $this->options->labelColor() ?>">
                 <?php $this->excerpt(180, '...');  ?>
            </div>
        </article>
    <?php endwhile; ?>
    <?php $this->pageNav('<< 上一页', '下一页 >>'); ?>

<?php else: ?>
    <?php $this->widget('Widget_Metas_Category_List')->to($catelist) ?>
    <?php while($catelist->next()):  ?>
    <article class="block post">
        
        <p class="title"><a href="<?php $catelist->permalink() ?>" target="_parent"><?php $catelist->name(56,'...'); ?></a><br/>
        <span class="article-meta">文章数： <?php $catelist->count(); ?></span>
        </p>
        
       <div class="article-content <?php $this->options->labelColor() ?>">
                 <?php echo $catelist->description ? $catelist->description : "暂无简介";  ?>
            </div>
        </article>
    <?php endwhile; ?>
<?php endif; ?>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
