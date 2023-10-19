<?php
// beyondkl h

if (isset($_POST['upload_bklh'])) {

    $name = urlencode($_POST['name']);
    // $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    // $hours = urlencode($_POST['hours']);
    // $phone = $_POST['phone'];
    $filename = uploadimage($_FILES["fileToUploadbklh"], "beyondkl/", "h/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO beyondkl_h (beyondkl_h_title,beyondkl_h_content,beyondkl_h_locationurl,beyondkl_h_image,beyondkl_h_order) 
                                            VALUES('$name','$content','$locationurl','$filename','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New beyondkl_h");


}
if (isset($_GET['orderupbklh'])) {

    // debug_to_console("test");

    $order = $_GET['orderupbklh'];
    $beyondkl_h_id = $_GET['beyondkl_h_id'];
    $order2 = $order + 1;

    $query = "UPDATE beyondkl_h SET beyondkl_h_order= $order2 WHERE beyondkl_h_id=$beyondkl_h_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdownbklh'])) {

    // debug_to_console("test");

    $order = $_GET['orderdownbklh'];
    $beyondkl_h_id = $_GET['beyondkl_h_id'];
    $order2 = $order - 1;

    $query = "UPDATE beyondkl_h SET beyondkl_h_order= $order2 WHERE beyondkl_h_id=$beyondkl_h_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deletebklh'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['bklhid'];
    $filename = $_POST['imagenamebklh'];
    $query = "DELETE FROM beyondkl_h WHERE beyondkl_h_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/beyondkl/h/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editbklh'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $locationurl = urlencode($_POST['locationurl']);
    // $hours = urlencode($_POST['hours']);
    // $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['bklhid'];
    $filename = $_POST['imagenamebklh'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE beyondkl_h SET 
    beyondkl_h_title='$name',
    beyondkl_h_order='$order',
    beyondkl_h_locationurl='$locationurl',
    beyondkl_h_content='$content'

    
    WHERE beyondkl_h_id=$id ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        // echo "Record updated successfully";
        // debug_to_console("test");

        array_push($errors2, "Edit Saved");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }

}

// beyondkl h
?>