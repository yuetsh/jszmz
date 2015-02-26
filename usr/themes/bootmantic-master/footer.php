    </div>
</div>

<footer>
    <div class="container">
        <p>
            &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
            <?php _e('Theme By <a href="http://blog.sloger.info" target="_blank">Sloger</a>. '); ?>
            <?php _e('Adapted By <a href="http://cdog.me" target="_blank">CDog</a>. '); ?>
        </p>
<p><a href=" http://www.miitbeian.gov.cn/" rel="nofollow">苏ICP备13006442号-2</a></p>
        <p>囧夏字幕组 版权所有 | <a href="http://code.xkacg.com">夏空社IT开发组搞基策划小分队制作</a></p>
    </div>
</footer>

<?php $this->footer(); ?>
<script src="<?php $this->options->adminUrl('js/jquery.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/script.js'); ?>"></script>
    </body>
</html>
