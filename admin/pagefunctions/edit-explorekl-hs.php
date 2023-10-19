<?php

// ekl hs
if (isset($_POST['upload_eklhs'])) {

    $name = urlencode($_POST['name']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $filename = uploadimage($_FILES["fileToUploadeklhs"], "explorekl/", "hs/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekl_hs (explorekl_hs_title,explorekl_hs_content,explorekl_hs_location,explorekl_hs_locationurl,explorekl_hs_image,explorekl_hs_hours,explorekl_hs_phone,explorekl_hs_order) 
                                            VALUES('$name','$content','$location','$locationurl','$filename','$hours','$phone','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekl_hs");


}
if (isset($_GET['orderupeklhs'])) {

    // debug_to_console("test");

    $order = $_GET['orderupeklhs'];
    $explorekl_hs_id = $_GET['explorekl_hs_id'];
    $order2 = $order + 1;

    $query = "UPDATE explorekl_hs SET explorekl_hs_order= $order2 WHERE explorekl_hs_id=$explorekl_hs_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdowneklhs'])) {

    // debug_to_console("test");

    $order = $_GET['orderdowneklhs'];
    $explorekl_hs_id = $_GET['explorekl_hs_id'];
    $order2 = $order - 1;

    $query = "UPDATE explorekl_hs SET explorekl_hs_order= $order2 WHERE explorekl_hs_id=$explorekl_hs_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deleteeklhs'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $location = $_POST['location'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['eklhsid'];
    $filename = $_POST['imagenameeklhs'];
    $query = "DELETE FROM explorekl_hs WHERE explorekl_hs_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekl/hs/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editeklhs'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['eklhsid'];
    $filename = $_POST['imagenameeklhs'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE explorekl_hs SET 
    explorekl_hs_title='$name',
    explorekl_hs_order='$order',
    explorekl_hs_location='$location',
    explorekl_hs_locationurl='$locationurl',
    explorekl_hs_content='$content',
    explorekl_hs_hours='$hours',
    explorekl_hs_phone='$phone'
    
    WHERE explorekl_hs_id=$id ";
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
// ekl 

?>