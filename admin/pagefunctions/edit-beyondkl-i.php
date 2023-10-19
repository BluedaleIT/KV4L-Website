<?php

// beyondkl i

if (isset($_POST['upload_bkli'])) {

    $name = urlencode($_POST['name']);
    // $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    // $hours = urlencode($_POST['hours']);
    // $phone = $_POST['phone'];
    $filename = uploadimage($_FILES["fileToUploadbkli"], "beyondkl/", "i/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO beyondkl_i (beyondkl_i_title,beyondkl_i_content,beyondkl_i_locationurl,beyondkl_i_image,beyondkl_i_order) 
                                            VALUES('$name','$content','$locationurl','$filename','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New beyondkl_i");


}
if (isset($_GET['orderupBKLI'])) {

    // debug_to_console("test");

    $order = $_GET['orderupBKLI'];
    $beyondkl_i_id = $_GET['beyondkl_i_id'];
    $order2 = $order + 1;

    $query = "UPDATE beyondkl_i SET beyondkl_i_order= $order2 WHERE beyondkl_i_id=$beyondkl_i_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdownBKLI'])) {

    // debug_to_console("test");

    $order = $_GET['orderdownBKLI'];
    $beyondkl_i_id = $_GET['beyondkl_i_id'];
    $order2 = $order - 1;

    $query = "UPDATE beyondkl_i SET beyondkl_i_order= $order2 WHERE beyondkl_i_id=$beyondkl_i_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deletebkli'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['bkliid'];
    $filename = $_POST['imagenamebkli'];
    $query = "DELETE FROM beyondkl_i WHERE beyondkl_i_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/beyondkl/i/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editbkli'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $locationurl = urlencode($_POST['locationurl']);
    // $hours = urlencode($_POST['hours']);
    // $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['bkliid'];
    $filename = $_POST['imagenamebkli'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE beyondkl_i SET 
    beyondkl_i_title='$name',
    beyondkl_i_order='$order',
    beyondkl_i_locationurl='$locationurl',
    beyondkl_i_content='$content'

    
    WHERE beyondkl_i_id=$id ";
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

// beyondkl i

?>