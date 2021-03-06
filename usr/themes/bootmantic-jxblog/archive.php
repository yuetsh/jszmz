<?php $this->need('header.php'); ?>

<div class="main">
    <div class="category block">
        <p class="ui ribbon label <?php $this->options->labelColor() ?>"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
        </p>
    </div>
    <?php if ($this->have()): ?>
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
    <?php else: ?>
        <article class="block">
            <h2 class="header"><?php _e('没有找到内容'); ?></h2>
        </article>
    <?php endif; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
