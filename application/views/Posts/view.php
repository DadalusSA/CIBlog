<h1><?php echo  $post['title']; ?></h1>
<small class='post-date'>Posted on :<?php echo $post['created_at']?></small></br>
<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_img']; ?>">
<div class= "post-body">
	<?php echo $post['body']; ?>
</div>

<?php if($this->session->userdata('userid') == $post['user_id']): ?>


<?php echo form_open('posts/delete/'. $post['id']); ?>
<hr>
	<a class="btn btn-default" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
		<input type="submit" value="delete" class="btn btn-danger pull-left">
	</form>
<?php endif; ?>
<hr>
<h3>Comments</h3>
<br>
<?php if($comments) : ?>
	<?php foreach($comments as $cmd) : ?>
		<div class="card">
			<h5><?php echo $cmd['body']; ?> [ by 
				<strong style="color:blue"><?php echo $cmd['name']; ?>
				</strong>]</h5>
			</div>
			<br>
		<?php endforeach; ?>
<?php else : ?>
	<p> No Comment To Display</p>
<?php endif; ?>	 
<hr>
<h3>Comment here</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/' . $post['id']); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
	<button class="btn btn-primary" type="submit">Submit</button>

