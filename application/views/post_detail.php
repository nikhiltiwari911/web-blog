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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css">
    
</head>
<body>


<br>
<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8">
        <img style="width: 100%;height: 300px;border-radius: 5px;margin:5px;"src="<?php echo base_url(); ?>/uploads/<?php echo $posts->post_image; ?>">
        <p>
          <i class="fa fa-folder" aria-hidden="true"></i>&nbsp;<?php echo $posts->post_category;?>&nbsp;&nbsp;&nbsp;
          <i class="fa fa-clock-o" aria-hidden="true"></i>
          <?php echo $posts->date_added;?> </p>
          <h3><?php echo $posts->post_title;?></h3>
          <h4><?php echo $posts->post;?></h4>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="sidebar">
          <div class="col-sm-12 col-xs-12 sidebar-widget widget-popular-posts">
            <div class="row">
              <div class="widget-title widget-popular-posts-title">
                  <h4 class="title">Popular Posts</h4>
              </div>
              <div class="col-sm-12 widget-body">
                <div class="row">
                  <ul class="widget-list w-popular-list" style="padding: 0px;">
                    <?php foreach($all_posts as $post) { ?>
                    <li>
                      <div class="left">
                        <a href="">
                          <img class="img-responsive lazyloaded" src="<?php echo base_url(); ?>/uploads/<?php echo $post['post_image'] ?>">
                        </a>
                      </div>
                      <div class="right">
                        <div class="item-content">
                          <a href="<?php echo base_url(); ?>index.php/blog/post_detail/<?php echo $post['post_id'];?>">
                          <h3 style="margin: 0px;font-size: 14px;" class="title"><?php echo substr($post['post_title'],0,40);?>...</h3>
                          </a>
                          <div class="post-meta">
                            <p class="post-meta-inner">
                            <span>
                              <i class="fa fa-clock-o" aria-hidden="true"></i> Aug 21, 2020    
                            </span>
                            <span>
                              <i class="fa fa-comment" aria-hidden="true"></i> 10    
                            </span>
                            </p>
                        </div>
                      </div>
                    </div>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
   </div>
</div>



        
        
 



</body>
</html>