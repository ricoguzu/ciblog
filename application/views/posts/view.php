<h2><?php echo $post ['title']; ?></h2>

<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
	<br><br>

<div class="post-body">

	<?php echo $post['body']; ?>

</div>

<hr>

<a class="btn btn-default" href="<?php echo site_url(); ?> posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<hr>

<?php echo form_open('/posts/delete/' .$post['id']); ?>
	<input type="submit" value="Delete" class="btn btn-danger">


</form>