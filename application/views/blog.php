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

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?php $i = 1;?>
      <?php foreach($all_posts as $post) { ?>

      <?php if($i == 1) {?>
        <div class="item active">
          <img src="<?php echo base_url(); ?>/uploads/<?php echo $post['post_image'] ?>" alt="Chicago" style="width:100%;height: 300px;">
          <div class="text-container">
            <span class="label-post-category1"><?php echo $post['post_category'] ?></span>
            <h3 style="color:#fff;"class="title"><?php echo $post['post_title'];?></h3>
          </div>
        </div>
      <?php } else { ?>
          <div class="item">
          <img src="<?php echo base_url(); ?>/uploads/<?php echo $post['post_image'] ?>" alt="Chicago" style="width:100%;height: 300px;">
          <div class="text-container">
            <span class="label-post-category1"><?php echo $post['post_category'] ?></span>
            <h3 style="color: #fff;" class="title"><?php echo $post['post_title'];?></h3>
          </div>
        </div>
      <?php }
        $i++;
       } ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> 
<br>
<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8">
        <form action="<?php echo base_url();?>index.php/blog/search" method="post"  enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-12">
              <div class="col-sm-8 col-xs-8 col-md-8">
                <input autocomplete="off" class="search_container" type="text" name="search" id="search" value="<?php echo $query; ?>" placeholder="Enter Category to search ...">
              </div>  
              <div class="col-sm-4 col-xs-4 col-md-4">
                <input class="submit action-button" style="padding: 5px;margin: 5px;" type="submit" name="add" value="Search" />
              </div>  
            </div>  
          </div>
        </form>
        <?php foreach($posts as $post) { ?>
          <div class="content">
            <div class="col-xs-12 col-sm-12 posts">
              <div class="row">        
                <div class="post-item-horizontal">
                  <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6"> 
                  <div class="item-image">
                    <span class="label-post-category"><?php echo $post['post_category'] ?></span>
                    <img style="width:100%;height: 200px;" src="<?php echo base_url(); ?>/uploads/<?php echo $post['post_image'] ?>">
                  </div>
                  </div>
                  <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
                  <div class="item-content">
                    <a href="<?php echo base_url(); ?>index.php/blog/post_detail/<?php echo $post['post_id'];?>">
                      <h3 class="title"><?php echo substr($post['post_title'],0,40);?>...</h3>
                    </a>
                    <div class="post-meta">
                      <p class="post-meta-inner">
                          <span>
                            <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $post['date_added'] ?>    
                          </span>
                      </p>
                  </div>
                  <p class="summary"><?php echo substr($post['post'],0,150);?>...</p>
                  <?php if($this->session->userdata('user_type') =='auth') { ?>
                  <div class="action-button-container">
                    <a href="<?php echo base_url(); ?>index.php/blog/new_post">
                    <button class="action-button"><i class="fa fa-plus" aria-hidden="true"></i> add post</button></a>
                    <a href="<?php echo base_url(); ?>index.php/blog/get_edit_data/<?php echo $post['post_id'];?>">
                    <button class="action-button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit post</button></a>
                    <a href="<?php echo base_url(); ?>index.php/blog/deletepost/<?php echo $post['post_id'];?>">
                    <button class="action-button"><i class="fa fa-trash-o"></i> Delete post</button>
                    </a>
                  </div>
                  <?php } ?>
                  </div>
                  
                  </div> 
                        
                </div>
              </div>
            </div>        
          </div>
        <?php }?>
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
                          <h3 style="margin: 0px;font-size: 14px;" class="title"><?php echo substr($post['post_title'],0,60);?>...</h3>
                          </a>
                          <br>
                          <div class="post-meta">
                            <p class="post-meta-inner">
                            <span>
                              <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $post['date_added'] ?>    
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

<div class="container">
  <div class="row">
    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12" >
      <div class="pagination">
        <center><?php echo $pages; ?></center>
      </div>
      
    </div>
  </div>
</div>

        
        
 



</body>
</html>