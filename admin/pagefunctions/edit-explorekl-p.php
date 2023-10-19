<?php
// ekl p
if (isset($_POST['upload_eklp'])) {

    $name = urlencode($_POST['name']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $filename = uploadimage($_FILES["fileToUploadeklp"], "explorekl/", "p/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekl_p (explorekl_p_title,explorekl_p_content,explorekl_p_location,explorekl_p_locationurl,explorekl_p_image,explorekl_p_hours,explorekl_p_phone,explorekl_p_order) 
                                            VALUES('$name','$content','$location','$locationurl','$filename','$hours','$phone','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekl_p");


}
if (isset($_GET['orderupeklp'])) {

    // debug_to_console("test");

    $order = $_GET['orderupeklp'];
    $explorekl_p_id = $_GET['explorekl_p_id'];
    $order2 = $order + 1;

    $query = "UPDATE explorekl_p SET explorekl_p_order= $order2 WHERE explorekl_p_id=$explorekl_p_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdowneklp'])) {

    // debug_to_console("test");

    $order = $_GET['orderdowneklp'];
    $explorekl_p_id = $_GET['explorekl_p_id'];
    $order2 = $order - 1;

    $query = "UPDATE explorekl_p SET explorekl_p_order= $order2 WHERE explorekl_p_id=$explorekl_p_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deleteeklp'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $location = $_POST['location'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['eklpid'];
    $filename = $_POST['imagenameeklp'];
    $query = "DELETE FROM explorekl_p WHERE explorekl_p_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekl/p/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editeklp'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['eklpid'];
    $filename = $_POST['imagenameeklp'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE explorekl_p SET 
    explorekl_p_title='$name',
    explorekl_p_order='$order',
    explorekl_p_location='$location',
    explorekl_p_locationurl='$locationurl',
    explorekl_p_content='$content',
    explorekl_p_hours='$hours',
    explorekl_p_phone='$phone'
    
    WHERE explorekl_p_id=$id ";
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