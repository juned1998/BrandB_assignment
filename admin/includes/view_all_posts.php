<?php 
        $query = "SELECT * from posts";
        $select_posts= mysqli_query($conn, $query);
?>
              
                        









<main>
<div class="container-fluid">
    <h1 class="mt-4">All Posts</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">View All Posts</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-newspaper mr-1"></i>
            All Posts
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>View</th>   
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>View</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>

                    <?php
        while($row = mysqli_fetch_assoc($select_posts))
        {
            $post_id = $row['post_id'];
            $post_title = $row['post_title'];      
            $post_status = $row['post_status'];  
            $post_image = $row['post_image'];  
            $post_date = $row['post_date'];

            echo "<tr>";                                     
            echo "<td>{$post_id}</td>";
            echo "<td>{$post_title}</td>";
            echo "<td>{$post_date}</td>";
            echo "<td>{$post_status}</td>";
            echo "<td><img width=100 src='../images/$post_image' alt='image'></td>";
            echo "<td><a href='../posts.php?&p_id={$post_id}'>View Post</a></td>";
            echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Update</a></td>";
            echo "<td><a rel='$post_id' href='javascript:void(0)' class='delete_link' >Delete</a></td>";     
        }
                        
?>  
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</main>