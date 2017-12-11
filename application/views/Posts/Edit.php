<h1><?= $title; ?></h1>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  	<div class="form-group">
   		 <label>Title</label>
    	 <input type="text" class="form-control" name="title" placeholder="Write title" value="<?php echo $post['title'];?>">
  	</div>
  	<div class="form-group">
   		 <label>Short Description</label>
   		 <input type="text" class="form-control" name="short" placeholder="Short body description"
       value="<?php echo $post['body_title'];?>">
  	</div>
  	<div class="form-group">
    	 <label >Body Description</label>
    	 <textarea id="editor1" class="form-control" name="body" placeholder="Full text here!"><?php echo $post['body'];?>
       </textarea>
    </div>
    <div class="form-group">
      <label>Categories</label>
      <select name="categories_id" class="form_control">
        <?php foreach($categories as $category): ?>
          <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>