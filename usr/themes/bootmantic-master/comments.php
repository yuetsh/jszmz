<div id="comments" class="block"> 

<?php if($this->allow("comment")): ?>
<!-- Duoshuo Comment BEGIN -->
	<div class="ds-thread" data-thread-key="<?php echo $this->cid;?>" 
	data-title="<?php echo $this->title;?>" data-author-key="<?php echo $this->authorId;?>" data-url=""></div>
	<script type="text/javascript">
	var duoshuoQuery = {short_name:"jxfronttest",theme:"<?php echo ($this->options->Duoshuo_theme) ? $this->options->Duoshuo_theme : 'default'?>"};
	(function() {
		var ds = document.createElement("script");
		ds.type = "text/javascript";ds.async = true;
		ds.src = "http://static.duoshuo.com/embed.js";
		ds.charset = "UTF-8";
		(document.getElementsByTagName("head")[0] 
		|| document.getElementsByTagName("body")[0]).appendChild(ds);
	})();
	</script>
<!-- Duoshuo Comment END -->
<?php else: ?>
<h4><?php _e("评论已关闭"); ?></h4> 
<?php endif; ?> 

</div>