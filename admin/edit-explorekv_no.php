<?php include('functions.php');


if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KLTG ADMIN - Edit WTD KV4L</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('nav.php'); ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include('topnav.php'); ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">WTD Night Out Page</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales TOP -->

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Top Places To Stay In KL <button class="btn btn-link" data-toggle="collapse" data-target="#table1" aria-expanded="true" aria-controls="table1">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                                </a>
                            </h6>

                        </div>

                        <div class="collapse show" id="table1">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col"><a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal2">
                                                        <i class="fas fa-plus"></i>
                                                        New
                                                    </a>
                                                </th>
                                                <th scope="col">title</th>
                                                <th scope="col" class="th-lg">Content</th>
                                                <th scope="col" class="th-lg">Content2</th>
                                                <th scope="col" class="th-lg">Location</th>
                                                <th scope="col">Location URL</th>
                                                <th scope="col">Website</th>
                                                <th scope="col">image</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Hours</th>
                                                <th scope="col">category</th>
                                                <th scope="col">order</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php

                                            $query = "SELECT * FROM explorekv_no  ORDER BY explorekv_no_ORDER DESC";
                                            $result = mysqli_query($db, $query);
                                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                                <tr>
                                                    <td id="id-<?php echo $row['explorekv_no_id'] ?>">
                                                        <?php echo $row['explorekv_no_id'] ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php
                                                        echo '<a href="#" class="" onclick="editmodal(' . $row['explorekv_no_id'] . ');" id="modaledit"><i class="fas fa-pen"></i></a><br>';
                                                        ?>
                                                    </td>
                                                    <td id="title-<?php echo $row['explorekv_no_id'] ?>">
                                                        <?php echo $row['explorekv_no_title']; ?>
                                                    </td>

                                                    <td id="content-<?php echo $row['explorekv_no_id'] ?>">
                                                        <?php echo $row['explorekv_no_content']; ?>
                                                    </td>

                                                    <td id="content2-<?php echo $row['explorekv_no_id'] ?>">
                                                        <?php echo $row['explorekv_no_content2']; ?>
                                                    </td>

                                                    <td id="location-<?php echo $row['explorekv_no_id'] ?>">
                                                        <?php echo $row['explorekv_no_location']; ?>
                                                    </td>

                                                    <td id="locationurl-<?php echo $row['explorekv_no_id'] ?>">
                                                        <?php echo $row['explorekv_no_locationurl']; ?>
                                                    </td>

                                                    <td id="website-<?php echo $row['explorekv_no_id'] ?>">
                                                        <?php echo $row['explorekv_no_website']; ?>
                                                    </td>

                                                    <td id="image-<?php echo $row['explorekv_no_id'] ?>">
                                                        <?php echo $row['explorekv_no_image']; ?>
                                                    </td>

                                                    <td id="phone-<?php echo $row['explorekv_no_id'] ?>">
                                                        <?php echo $row['explorekv_no_phone']; ?>
                                                    </td>

                                                    <td id="hours-<?php echo $row['explorekv_no_id'] ?>">
                                                        <?php echo $row['explorekv_no_hours']; ?>
                                                    </td>

                                                    <td id="category-<?php echo $row['explorekv_no_id'] ?>">
                                                        <?php echo $row['explorekv_no_category']; ?>
                                                    </td>

                                                    <td id="order-<?php echo $row['explorekv_no_id'] ?>">
                                                        <?php echo $row['explorekv_no_order']; ?>
                                                    </td>
                                                </tr>


                                            <?php

                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>


        <!-- End of Content Wrapper -->



    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="?logout=1">Logout</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Add New Acco TOP-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Accomodation Top</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="?addnew#table1" method="post" enctype="multipart/form-data" id="atop">

                    <div class="modal-body" id="tagdiv2">

                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" placeholder="title" name="title">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control form-control-user"  placeholder="content" name="content" rows="1"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control form-control-user" placeholder="content2" name="content2" rows="3"></textarea>
                        </div>


                        <div class="form-group">
                            <textarea type="text" class="form-control form-control-user" placeholder="location" name="location" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control form-control-user" placeholder="locationurl" name="locationurl" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control form-control-user" placeholder="website" name="website" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control form-control-user" placeholder="phone" name="phone" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control form-control-user"placeholder="hours" name="hours" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control form-control-user" placeholder="category" name="category" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control form-control-user"placeholder="order" name="order" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Select image to upload :</label>
                            <input type="file" class="form-control-file" id="filetoupload" name="filetoupload">
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button class="btn btn-primary" type="submit" value="Upload Image" name="upload_explorekv_no">Create</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal Top-->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Top Places To Stay In KL</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="?edit#table1" method="post" enctype="multipart/form-data">

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title-form">Name</label>
                            <input type="text" class="form-control" id="title-form" name="title">
                        </div>
                        <div class="form-group">
                            <label for="content-form">Content</label>
                            <textarea type="text" class="form-control" id="content-form" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="content2-form">Content2</label>
                            <textarea type="text" class="form-control" id="content2-form" name="content2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="location-form">Location</label>
                            <textarea type="text" class="form-control" id="location-form" name="location"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="locationurl-form">Location URL</label>
                            <input type="text" class="form-control" id="locationurl-form" name="locationurl">
                        </div>
                        <div class="form-group">
                            <label for="website-form">Website</label>
                            <textarea class="form-control" id="website-form" name="website"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="phone-form">Phone (Put "/" for new line )</label>
                            <textarea class="form-control" id="phone-form" name="phone"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="hours-form">Operating Hours</label>
                            <input type="text" class="form-control" id="hours-form" name="hours">
                        </div>
                        <div class="form-group">
                            <label for="category-form">Category</label>
                            <input type="text" class="form-control" id="category-form" name="category">
                        </div>
                        <div class="form-group">
                            <label for="order-form">Order</label>
                            <input type="text" class="form-control" id="order-form" name="order">
                        </div>
                        <input class="form-control" id="id-form" name="id" hidden></input>
                        <input class="form-control" id="imagename-form" name="imagename" hidden></input>

                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-danger " name="delete_explorekv_no">Delete</button>
                        <button class="btn btn-primary" type="submit" name="edit_explorekv_no">Save
                            Changes</button>

                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Toast -->
    <div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;">
        <div id="liveToast" class="toast " role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
            <div class="toast-header">
                <img src="../assets/img/favicon-32x32.png" class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bluedale</strong>
                <!-- <small>11 mins ago</small> -->
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body" id="toast-body">
                Test
            </div>
        </div>
    </div>
    <!-- End Toast -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/edita.js"></script>
    <script>
        document.getElementById("editnav").classList.add('active');
    </script>
    <!-- <script src="js/banner.js"></script> -->
    <?php include('errors2.php'); ?>




</body>

</html>