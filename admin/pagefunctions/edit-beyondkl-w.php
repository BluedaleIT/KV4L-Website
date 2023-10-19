<?php

// beyondkl w

if (isset($_POST['upload_bklw'])) {

    $name = urlencode($_POST['name']);
    // $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    // $hours = urlencode($_POST['hours']);
    // $phone = $_POST['phone'];
    $filename = uploadimage($_FILES["fileToUploadbklw"], "beyondkl/", "w/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO beyondkl_w (beyondkl_w_title,beyondkl_w_content,beyondkl_w_locationurl,beyondkl_w_image,beyondkl_w_order) 
                                            VALUES('$name','$content','$locationurl','$filename','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New beyondkl_w");


}
if (isset($_GET['orderupbklw'])) {

    // debug_to_console("test");

    $order = $_GET['orderupbklw'];
    $beyondkl_w_id = $_GET['beyondkl_w_id'];
    $order2 = $order + 1;

    $query = "UPDATE beyondkl_w SET beyondkl_w_order= $order2 WHERE beyondkl_w_id=$beyondkl_w_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdownbklw'])) {

    // debug_to_console("test");

    $order = $_GET['orderdownbklw'];
    $beyondkl_w_id = $_GET['beyondkl_w_id'];
    $order2 = $order - 1;

    $query = "UPDATE beyondkl_w SET beyondkl_w_order= $order2 WHERE beyondkl_w_id=$beyondkl_w_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deletebklw'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['bklwid'];
    $filename = $_POST['imagenamebklw'];
    $query = "DELETE FROM beyondkl_w WHERE beyondkl_w_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/beyondkl/w/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editbklw'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $locationurl = urlencode($_POST['locationurl']);
    // $hours = urlencode($_POST['hours']);
    // $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['bklwid'];
    $filename = $_POST['imagenamebklw'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE beyondkl_w SET 
    beyondkl_w_title='$name',
    beyondkl_w_order='$order',
    beyondkl_w_locationurl='$locationurl',
    beyondkl_w_content='$content'

    
    WHERE beyondkl_w_id=$id ";
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

// beyondkl w

?>