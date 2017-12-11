<h1><?= $title; ?></h1>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
<form>
  	<div class="form-group">
   		 <label>Title</label>
    	 <input type="text" class="form-control" name="title" placeholder="Write title">
  	</div>
  	<div class="form-group">
   		 <label>Short Description</label>
   		 <input type="text" class="form-control" name="short" placeholder="Short body description">
  	</div>
  	<div class="form-group">
    	 <label >Body Description</label>
    	 <textarea id="editor1" class="form-control" name="body" placeholder='Full text here!'></textarea>
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
    <div class="form-group">
      <label>Upload IMG</label>
      <br>
      <input type="file" name="userfile" size="20">
    </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>