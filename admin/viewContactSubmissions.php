<?php include './includes/header.php' ?>
<?php include './includes/navigation.php' ?>
<?php include './includes/sidenav.php' ?>
<?php include './includes/config.php' ?>
<?php

    //Getting contact records from database
    $query = "SELECT * FROM contactform";
    $select_contacts = mysqli_query($conn, $query);
     
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Contact Form Submissions</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Contact Form Submissions
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Company Name</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Company Name</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                        <tbody>

<?php

while($row = mysqli_fetch_assoc($select_contacts)) {
    $contact_id      = $row['id'];
    $contact_name    = $row['name'];
    $contact_email   = $row['email'];
    $contact_phone   = $row['phone'];
    $contact_company = $row['company'];
    $contact_message = $row['message'];
    $contact_date    = $row['date'];                      
    echo "<tr>";
    echo "<td>$contact_id</td>";
    echo "<td>$contact_name</td>";
    echo "<td>$contact_email</td>";
    echo "<td>$contact_phone</td>";
    echo "<td>$contact_company</td>";
    echo "<td>$contact_message</td>";
    echo "<td>$contact_date</td>";
    echo "</tr>";
}

?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        

    </div>
</main>
                
<?php include './includes/footer.php' ?>
