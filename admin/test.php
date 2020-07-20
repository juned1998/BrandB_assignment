<?php
  //  echo '<p>df<span style="font-family: &quot;Arial Black&quot;;">ksdkfjkkjdskfjsdkjkjsdf</span></p>';

 if(isset($_POST)) {

//     $post_title        = escape($_POST['title']);
//     $post_image        = escape($_FILES['image']['name']);
//     $post_image_temp   = escape($_FILES['image']['tmp_name']);
     $post_content      = $_POST['post_content'];
//     $post_status       = escape($_POST['post_status']);
//     $post_date         = escape(date('d-m-y'));
echo $post_content;

//     move_uploaded_file($post_image_temp, "../img/blog/$post_image" );


//     $query = "INSERT INTO posts(post_title, post_date,post_image,post_content,post_status) ";

//     $query .= "VALUES('{$post_title}',now(),'{$post_image}','{$post_content}','{$post_status}') "; 
            
//     $create_post_query = mysqli_query($conn, $query);  
        
//     if(!$create_post_query){
//         die("Query failed".mysqli_error($conn));
//     }

//     $the_post_id = mysqli_insert_id($connection);


//      echo "<p class='bg-success'>Post Created. <a href='../post.php?p_id={$the_post_id}'>View Post </a> or <a href='posts.php'>Edit More Posts</a></p>";
       
}
       
?>