<?php


// ekl kl4k
if (isset($_POST['upload_eklkl4k'])) {

    $name = urlencode($_POST['name']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $filename = uploadimage($_FILES["fileToUploadeklkl4k"], "explorekl/", "kl4k/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekl_kl4k (explorekl_kl4k_title,explorekl_kl4k_content,explorekl_kl4k_location,explorekl_kl4k_locationurl,explorekl_kl4k_image,explorekl_kl4k_hours,explorekl_kl4k_phone,explorekl_kl4k_order) 
                                            VALUES('$name','$content','$location','$locationurl','$filename','$hours','$phone','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekl_kl4k");


}
if (isset($_GET['orderupeklkl4k'])) {

    // debug_to_console("test");

    $order = $_GET['orderupeklkl4k'];
    $explorekl_kl4k_id = $_GET['explorekl_kl4k_id'];
    $order2 = $order + 1;

    $query = "UPDATE explorekl_kl4k SET explorekl_kl4k_order= $order2 WHERE explorekl_kl4k_id=$explorekl_kl4k_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdowneklkl4k'])) {

    // debug_to_console("test");

    $order = $_GET['orderdowneklkl4k'];
    $explorekl_kl4k_id = $_GET['explorekl_kl4k_id'];
    $order2 = $order - 1;

    $query = "UPDATE explorekl_kl4k SET explorekl_kl4k_order= $order2 WHERE explorekl_kl4k_id=$explorekl_kl4k_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deleteeklkl4k'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $location = $_POST['location'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['eklkl4kid'];
    $filename = $_POST['imagenameeklkl4k'];
    $query = "DELETE FROM explorekl_kl4k WHERE explorekl_kl4k_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekl/kl4k/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editeklkl4k'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['eklkl4kid'];
    $filename = $_POST['imagenameeklkl4k'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE explorekl_kl4k SET 
    explorekl_kl4k_title='$name',
    explorekl_kl4k_order='$order',
    explorekl_kl4k_location='$location',
    explorekl_kl4k_locationurl='$locationurl',
    explorekl_kl4k_content='$content',
    explorekl_kl4k_hours='$hours',
    explorekl_kl4k_phone='$phone'
    
    WHERE explorekl_kl4k_id=$id ";
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