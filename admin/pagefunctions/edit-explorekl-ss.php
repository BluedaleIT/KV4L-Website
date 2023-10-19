<?php
// ekl ss
if (isset($_POST['upload_eklss'])) {

    $name = urlencode($_POST['name']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $filename = uploadimage($_FILES["fileToUploadeklss"], "explorekl/", "ss/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekl_ss (explorekl_ss_title,explorekl_ss_category,explorekl_ss_content,explorekl_ss_location,explorekl_ss_locationurl,explorekl_ss_image,explorekl_ss_hours,explorekl_ss_phone,explorekl_ss_order) 
                                            VALUES('$name','$category','$content','$location','$locationurl','$filename','$hours','$phone','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekl_ss");


}
if (isset($_GET['orderupeklss'])) {

    // debug_to_console("test");

    $order = $_GET['orderupeklss'];
    $explorekl_ss_id = $_GET['explorekl_ss_id'];
    $order2 = $order + 1;

    $query = "UPDATE explorekl_ss SET explorekl_ss_order= $order2 WHERE explorekl_ss_id=$explorekl_ss_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdowneklss'])) {

    // debug_to_console("test");

    $order = $_GET['orderdowneklss'];
    $explorekl_ss_id = $_GET['explorekl_ss_id'];
    $order2 = $order - 1;

    $query = "UPDATE explorekl_ss SET explorekl_ss_order= $order2 WHERE explorekl_ss_id=$explorekl_ss_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deleteeklss'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $location = $_POST['location'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['eklssid'];
    $filename = $_POST['imagenameeklss'];
    $query = "DELETE FROM explorekl_ss WHERE explorekl_ss_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekl/ss/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editeklss'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $category = $_POST['category'];
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['eklssid'];
    $filename = $_POST['imagenameeklss'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE explorekl_ss SET 
    explorekl_ss_title='$name',
    explorekl_ss_category='$category',
    explorekl_ss_order='$order',
    explorekl_ss_location='$location',
    explorekl_ss_locationurl='$locationurl',
    explorekl_ss_content='$content',
    explorekl_ss_hours='$hours',
    explorekl_ss_phone='$phone'
    
    WHERE explorekl_ss_id=$id ";
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
// ekl ss

?>