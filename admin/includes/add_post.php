<?php
   

if(isset($_POST['create_post'])) {

    $post_title        = escape($_POST['title']);
    $post_image        = escape($_FILES['image']['name']);
    $post_image_temp   = escape($_FILES['image']['tmp_name']);
    $post_content      = escape($_POST['post_content']);
    $post_status       = escape($_POST['post_status']);
    $post_date         = escape(date('d-m-y'));


    move_uploaded_file($post_image_temp, "../img/blog/$post_image" );


    $query = "INSERT INTO posts(post_title, post_date,post_image,post_content,post_status) ";

    $query .= "VALUES('{$post_title}',now(),'{$post_image}','{$post_content}','{$post_status}') "; 
            
    $create_post_query = mysqli_query($conn, $query);  
        
    if(!$create_post_query){
        die("Query failed".mysqli_error($conn));
    }

    $the_post_id = mysqli_insert_id($connection);


    // echo "<p class='bg-success'>Post Created. <a href='../post.php?p_id={$the_post_id}'>View Post </a> or <a href='posts.php'>Edit More Posts</a></p>";
       
}
       
?>


<main>
    <div class="container-fluid">
        <h1 class="mt-4">Add Post</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard
            </li>
            <li class="breadcrumb-item active">Add Article</li>
        </ol>
        

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group"><label for="post-title">Post Title</label><input class="form-control" id="blog-title" type="text" name="post-title" placeholder="Enter post title"></div>

            <div class="form-group">
                <label for="poat-Image">Post Image</label>
                <div class="custom-file">
                    <input type="file"  id="customFile">
                </div>
            </div>

            <!-- Create the editor container -->
            <div class="form-group">
                <label for="post-content">Enter Post</label>
                <input name="post-content" type="hidden">
                <div id="editor">
                <p>Hello World!</p>
                <p>Some initial <strong>bold</strong> text</p>
                <p><br></p>
                </div>
            </div>

            <div class="form-group">
                <label for="post-status">Post Status</label><select class="form-control" id="post-status">
                    <option>Publish</option>
                    <option>Draft</option>
                </select>
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">

            </div>

        </form>
            
        
    </div>
</main>



<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<!-- Initialize Quill editor -->
<script>
    var quill = new Quill('#editor', {
    theme: 'snow'
    });

    var form = document.querySelector('form');
    form.onsubmit = function() {
  
        // Populate hidden form on submit
        var blog_content = document.querySelector('input[name=blog-content]');
        blog_content.value = JSON.stringify(quill.getContents());
        
        console.log("Submitted", $(form).serialize(), $(form).serializeArray());
    }
</script>



