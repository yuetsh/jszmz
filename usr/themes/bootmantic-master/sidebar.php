<div class="side">
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="block">
        <p class="ui <?php $this->options->labelColor() ?> ribbon label"><?php _e('最新文章'); ?></p>
        <div class="list">
            <?php $this->widget('Widget_Contents_Post_Recent')->to($spost); ?>
            <?php while ($spost->next()) : ?>
                <a href="<?php $spost->permalink(); ?>" class="item" target="_blank"><?php $spost->title(46,'...') ?></a>
            <?php endwhile; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
    <section class="block">
        <p class="ui <?php $this->options->labelColor() ?> ribbon label"><?php _e('最近回复'); ?></p>
        <div class="list">
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li class="item"><a href="<?php $comments->permalink(); ?>" target="_blank"><?php $comments->author(false); ?></a>：<?php $comments->excerpt(35, '...'); ?></li>
        <?php endwhile; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowFriend', $this->options->sidebarBlock)): ?>
    <section class="block friend-list">
        <p class="ui <?php $this->options->labelColor() ?> ribbon label">友情链接</p>
        <div class="animated list friend">
            <?php Links_Plugin::output("<a class=\"item link\" href=\"{url}\" title=\"{name}\" target=\"_blank\" style="display:inline-block;width:31%;"><img class=\" image\"  src=\"{image}\" alt=\"{name}\" /></a>\n", 10); ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="block">
        <p class="ui <?php $this->options->labelColor() ?> ribbon label"><?php _e('分类'); ?></p>
        <div class="animated list category">
            <?php $this->widget('Widget_Metas_Category_List')->parse('<div class="item"><a href="{permalink}" target="_blank">{name}</a> <div class="ui label">{count}</div></div>'); ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <section class="block">
        <p class="ui <?php $this->options->labelColor() ?> ribbon label"><?php _e('归档'); ?></p>
        <div class="animated list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y 年 m 月')->parse('<a href="{permalink}" class="item" target="_blank">{date}</a>'); ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
    <section class="block">
        <p class="ui <?php $this->options->labelColor() ?> ribbon label"><?php _e('其它'); ?></p>
        <div class="animated list">
            <?php if($this->user->hasLogin()): ?>
            <a class="item" href="<?php $this->options->adminUrl(); ?>" target="_blank"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a>
            <a class="item" href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a>
            <?php else: ?>
            <a class="item" href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a>
            <?php endif; ?>
            <a class="item" href="<?php $this->options->feedUrl(); ?>" target="_blank"><?php _e('文章 RSS'); ?></a>
            <a class="item" href="<?php $this->options->commentsFeedUrl(); ?>" target="_blank"><?php _e('评论 RSS'); ?></a>
            <a class="item" href="http://www.typecho.org" target="_blank">Typecho</a>
        </div>
    </section>
    <?php endif; ?>
</div>
