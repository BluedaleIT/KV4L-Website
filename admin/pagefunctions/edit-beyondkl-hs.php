<?php

// beyondkl hs

if (isset($_POST['upload_bklhs'])) {

    $name = urlencode($_POST['name']);
    // $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    // $hours = urlencode($_POST['hours']);
    // $phone = $_POST['phone'];
    $filename = uploadimage($_FILES["fileToUploadbklhs"], "beyondkl/", "hs/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO beyondkl_hs (beyondkl_hs_title,beyondkl_hs_content,beyondkl_hs_locationurl,beyondkl_hs_image,beyondkl_hs_order) 
                                            VALUES('$name','$content','$locationurl','$filename','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New beyondkl_hs");


}
if (isset($_GET['orderupbklhs'])) {

    // debug_to_console("test");

    $order = $_GET['orderupbklhs'];
    $beyondkl_hs_id = $_GET['beyondkl_hs_id'];
    $order2 = $order + 1;

    $query = "UPDATE beyondkl_hs SET beyondkl_hs_order= $order2 WHERE beyondkl_hs_id=$beyondkl_hs_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdownbklhs'])) {

    // debug_to_console("test");

    $order = $_GET['orderdownbklhs'];
    $beyondkl_hs_id = $_GET['beyondkl_hs_id'];
    $order2 = $order - 1;

    $query = "UPDATE beyondkl_hs SET beyondkl_hs_order= $order2 WHERE beyondkl_hs_id=$beyondkl_hs_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deletebklhs'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['bklhsid'];
    $filename = $_POST['imagenamebklhs'];
    $query = "DELETE FROM beyondkl_hs WHERE beyondkl_hs_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/beyondkl/hs/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editbklhs'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $locationurl = urlencode($_POST['locationurl']);
    // $hours = urlencode($_POST['hours']);
    // $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['bklhsid'];
    $filename = $_POST['imagenamebklhs'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE beyondkl_hs SET 
    beyondkl_hs_title='$name',
    beyondkl_hs_order='$order',
    beyondkl_hs_locationurl='$locationurl',
    beyondkl_hs_content='$content'

    
    WHERE beyondkl_hs_id=$id ";
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

// beyondkl hs



?>