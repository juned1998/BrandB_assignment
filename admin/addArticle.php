<?php include './includes/header.php' ?>
<?php include './includes/navigation.php' ?>
<?php include './includes/sidenav.php' ?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Add Article</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Add Article</li>
        </ol>
        

            <form>
            <div class="form-group"><label for="blog-title">Blog Title</label><input class="form-control" id="blog-title" type="text" name="blog-title" placeholder="Enter blog title"></div>

            <div class="form-group">
                <label for="blog-Image">Blog Image</label>
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose Header Image File</label>
                </div>
            </div>

            <!-- Create the editor container -->
            <div class="form-group">
                <label for="blog-content">Enter Post</label>
                <div id="editor">
                <p>Hello World!</p>
                <p>Some initial <strong>bold</strong> text</p>
                <p><br></p>
                </div>
            </div>
        </form>
            
        
    </div>
</main>
        
<footer class="py-4 bg-light mt-auto">
<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between small">
        <div class="text-muted">Copyright &copy; Brand & Beyond 2020</div>
        <div>
            <a href="#">Privacy Policy</a>
            &middot;
            <a href="#">Terms &amp; Conditions</a>
        </div>
    </div>
</div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<!-- Initialize Quill editor -->
<script>
    var quill = new Quill('#editor', {
    theme: 'snow'
    });
</script>

<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
</body>
</html>
