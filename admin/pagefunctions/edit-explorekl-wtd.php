<?php
// explorekl wtd

if (isset($_POST['upload_eklwtd'])) {

    $name = urlencode($_POST['name']);
    // $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    // $hours = urlencode($_POST['hours']);
    // $phone = $_POST['phone'];
    $filename = uploadimage($_FILES["fileToUploadeklwtd"], "explorekl/", "wtd/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekl_wtd (explorekl_wtd_title,explorekl_wtd_content,explorekl_wtd_locationurl,explorekl_wtd_image,explorekl_wtd_order) 
                                            VALUES('$name','$content','$locationurl','$filename','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekl_wtd");


}
if (isset($_GET['orderupeklwtd'])) {

    // debug_to_console("test");

    $order = $_GET['orderupeklwtd'];
    $explorekl_wtd_id = $_GET['explorekl_wtd_id'];
    $order2 = $order + 1;

    $query = "UPDATE explorekl_wtd SET explorekl_wtd_order= $order2 WHERE explorekl_wtd_id=$explorekl_wtd_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdowneklwtd'])) {

    // debug_to_console("test");

    $order = $_GET['orderdowneklwtd'];
    $explorekl_wtd_id = $_GET['explorekl_wtd_id'];
    $order2 = $order - 1;

    $query = "UPDATE explorekl_wtd SET explorekl_wtd_order= $order2 WHERE explorekl_wtd_id=$explorekl_wtd_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deleteeklwtd'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['eklwtdid'];
    $filename = $_POST['imagenameeklwtd'];
    $query = "DELETE FROM explorekl_wtd WHERE explorekl_wtd_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekl/wtd/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editeklwtd'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $locationurl = urlencode($_POST['locationurl']);
    // $hours = urlencode($_POST['hours']);
    // $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['eklwtdid'];
    $filename = $_POST['imagenameeklwtd'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE explorekl_wtd SET 
    explorekl_wtd_title='$name',
    explorekl_wtd_order='$order',
    explorekl_wtd_locationurl='$locationurl',
    explorekl_wtd_content='$content'

    
    WHERE explorekl_wtd_id=$id ";
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

// explorekl wtd

?>