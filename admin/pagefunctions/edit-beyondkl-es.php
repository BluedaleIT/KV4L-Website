<?php
// beyondkl es

if (isset($_POST['upload_bkles'])) {

    $name = urlencode($_POST['name']);
    // $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    // $hours = urlencode($_POST['hours']);
    // $phone = $_POST['phone'];
    $filename = uploadimage($_FILES["fileToUploadbkles"], "beyondkl/", "es/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO beyondkl_es (beyondkl_es_title,beyondkl_es_content,beyondkl_es_locationurl,beyondkl_es_image,beyondkl_es_order) 
                                            VALUES('$name','$content','$locationurl','$filename','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New beyondkl_es");


}
if (isset($_GET['orderupbkles'])) {

    // debug_to_console("test");

    $order = $_GET['orderupbkles'];
    $beyondkl_es_id = $_GET['beyondkl_es_id'];
    $order2 = $order + 1;

    $query = "UPDATE beyondkl_es SET beyondkl_es_order= $order2 WHERE beyondkl_es_id=$beyondkl_es_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdownbkles'])) {

    // debug_to_console("test");

    $order = $_GET['orderdownbkles'];
    $beyondkl_es_id = $_GET['beyondkl_es_id'];
    $order2 = $order - 1;

    $query = "UPDATE beyondkl_es SET beyondkl_es_order= $order2 WHERE beyondkl_es_id=$beyondkl_es_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deletebkles'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['bklesid'];
    $filename = $_POST['imagenamebkles'];
    $query = "DELETE FROM beyondkl_es WHERE beyondkl_es_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/beyondkl/es/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editbkles'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $locationurl = urlencode($_POST['locationurl']);
    // $hours = urlencode($_POST['hours']);
    // $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['bklesid'];
    $filename = $_POST['imagenamebkles'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE beyondkl_es SET 
    beyondkl_es_title='$name',
    beyondkl_es_order='$order',
    beyondkl_es_locationurl='$locationurl',
    beyondkl_es_content='$content'

    
    WHERE beyondkl_es_id=$id ";
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

// beyondkl es
?>