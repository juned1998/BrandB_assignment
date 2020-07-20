<?php

   
if(isset($_GET['p_id'])){

$the_post_id = $_GET['p_id'];
}
        $query = "SELECT * from posts WHERE post_id = $the_post_id";
        $select_posts_by_id= mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($select_posts_by_id))
        {
          $post_id = $row['post_id']; 
          $post_title = $row['post_title'];
          $post_content = $row['post_content'];     
          $post_status = $row['post_status'];  
          $post_image = $row['post_image'];  
        }
    
        if(isset($_POST['update_post'])){
            $post_title        = mysqli_real_escape_string($conn,$_POST['post-title']);

            $post_status       = mysqli_real_escape_string($conn,$_POST['post-status']);    

            $post_image        = mysqli_real_escape_string($conn,$_FILES['post-image']['name']);

            $post_image_temp   = $_FILES['post-image']['tmp_name'];
            
            move_uploaded_file($post_image_temp , "../img/blog/".$post_image);
            
            $post_content      = mysqli_real_escape_string($conn,$_POST['post-content']);
  
            if(empty($post_image)) {
        
              $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
              $select_image = mysqli_query($conn,$query);
                  
              while($row = mysqli_fetch_array($select_image)) {
                  
                $post_image = $row['post_image'];
              
              }
            }
            
            $query = "UPDATE posts SET ";
            $query .="post_title  = '{$post_title}', ";
            $query .="post_update   =  now(), ";
            $query .="post_status = '{$post_status}', ";
            $query .="post_content= '{$post_content}', ";
            $query .="post_image  = '{$post_image}' ";
            $query .= "WHERE post_id = {$the_post_id} ";
            
            $update_post = mysqli_query($conn,$query);

            if(!$update_post){

              die("Query failed".mysqli_error($conn));

            }else{
              echo "<div class='alert alert-success' role='alert'>Post Updated. <a target='_blank' href='../blog_post.php?post_id={$the_post_id}'>View Post </a> or <a href='posts.php'>Edit More Posts</a></div>";                  
            }
        }
?>


















<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Post</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard
            </li>
            <li class="breadcrumb-item active">Edit Post</li>
        </ol>
        

        <form  id="addPostForm" action="" method="POST" enctype="multipart/form-data" >

            <div class="form-group">
            <label for="post-title">Post Title</label>
            <input class="form-control" id="blog-title" type="text" name="post-title" value="<?php echo $post_title; ?>">
            </div>

            <img width="100" src="../img/blog/<?php echo $post_image;?>">
            <div class="form-group">
                <label for="post-Image">Post Image</label>
                <div class="custom-file">
                <input type="file"  id="customFile" name="post-image">  
                </div>
            </div>


            <div class="form-group">
            <label for="post-content">Enter Post</label>
            <input type="hidden" name="post-content">
            <div id="editor">

            <?php echo $post_content;?>
            
            </div>
            </div>

            <div class="form-group">
                <label for="post-status">Post Status</label>
                <select class="form-control" id="post-status" name="post-status">
                <option value='<?php echo $post_status;?>'><?php echo $post_status;?></option>
                      <?php
                      if($post_status == 'draft'){
                          echo "<option value='published'>Publish</option>";
                      }
                      else {
                          echo "<option value='draft'>Draft</option>";
                      }
                      ?>
                </select>
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="update_post" value="Save Post">

            </div>

        </form>
            
        
    </div>
</main>