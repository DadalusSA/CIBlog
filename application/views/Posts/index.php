<h1><?= $title ?></h1>

<?php foreach ($posts as $post) : ?>
	</br>
	<h3><?php echo $post['title']; ?></h3>
	<div class="row">
		<div class="col-sm-3">
			<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_img']; ?>">
		</div>
		<div class="col-sm-9">
			<small class='post-date'>Posted on <?php echo $post['created_at']?> in <strong><?php echo $post['name']; ?></strong></small></br>
			<?php /*echo word_limiter 50*/echo $post['body_title'] /*50*/; ?></br></br>
			<p><a class="btn btn-default" href="<?php echo site_url('/posts/' . $post['slug']); ?>">Read more</a></p>
		</div>
	</div>

<?php endforeach; ?>
<div class='pagination-links'>
	<?php echo $this->pagination->create_links(); ?>
</div>
