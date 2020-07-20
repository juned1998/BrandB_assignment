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
        <script src="./customjs/app.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <!-- Main Quill library -->
        <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
        <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
        <script>
        if(document.querySelector('#editor')){
            var quill = new Quill('#editor', {
                theme: 'snow'
            });

            if(document.querySelector('#addPostForm')){
                let form = document.querySelector('#addPostForm');
                form.onsubmit = function() {
                    // Populate hidden input on submit
                    let post_content = document.querySelector('input[name=post-content]');
                    post_content.value = quill.root.innerHTML.trim();   
                };
            }else if(document.querySelector('#editPostForm')){
                let form = document.querySelector('#editPostForm');
                // get hidden input
                let post_content = document.querySelector('input[name=post-content]');
                quill.root.innerHTML = post_content.value;

                form.onsubmit = function() {                   
                    //Populate hidden input on submit               
                    post_content.value = quill.root.innerHTML.trim();   
                };
            }
        }   
        </script>

    </body>
</html>
