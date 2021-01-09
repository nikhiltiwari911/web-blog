<!DOCTYPE html>
<html>
<head>
	<title>WebBlog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css">
    
    <style type="text/css">
		label {
		  font-weight: 100;
		}
    </style>
</head>
<body>
	
	<div class="container">
		<div class="row">

			<h2 class="text-center"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Post</h2>
      
			<form  id="uploadForm" action="<?= base_url()?>index.php/blog/editpost/<?php echo $post_data->post_id; ?>" method="post"  enctype="multipart/form-data">
			<div class="col-md-1"></div>
			<div class="col-md-5">
				<h4><label>Post image :</label></h4>
          <input type="hidden" name="image_get_name" id="image_get_name" value="<?php echo $post_data->post_image; ?>">
	 				<img id="blah" src="<?php echo base_url(); ?>uploads/<?php echo $post_data->post_image; ?>" style="width: 90%; border: 1px solid #ddd; border-radius: 5px;" alt="your image" />
	 				<input type="file" name="userfile" onchange="readURL(this);" />
			</div>
			<div class="col-md-5 col-lg-5">
	 			<div class="form-group">
                <h4><label for="post_category">Choose post category:</label></h4>
                <select id="post_category" name="post_category" class="form-control">
                  <option value="<?php echo $post_data->post_category; ?>"><?php echo $post_data->post_category; ?></option>
                  <!-- <option value="Tavel">Tavel</option>
                  <option value="Fashion">Fashion</option> -->
                </select>
              	</div> 	
	 			<p>
	 				<h4><label>Post Title</label> </h4>
	 				<input class="form-control" type="text" name="post_title" value="<?php echo $post_data->post_title; ?>" />
	 			</p>
	 			<p>
	 				<h4><label>Post Description</label></h4>
	 				<textarea class="form-control" name="post"><?php echo $post_data->post; ?></textarea>
	 			</p>
        <br>
	 			<p>
	 				<input class="submit action-button" type="submit" name="add" value="Publish" />
	 			</p>
	 		</div>
	 		<div class="col-md-1"></div>
	 		</form>
			</div>	
		</div>	
	

	
	<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</body>
</html>





