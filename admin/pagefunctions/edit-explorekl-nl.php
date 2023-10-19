<?php
// ekl nl
if (isset($_POST['upload_eklnl'])) {

    $name = urlencode($_POST['name']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $filename = uploadimage($_FILES["fileToUploadeklnl"], "explorekl/", "nl/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekl_nl (explorekl_nl_title,explorekl_nl_category,explorekl_nl_content,explorekl_nl_location,explorekl_nl_locationurl,explorekl_nl_image,explorekl_nl_hours,explorekl_nl_phone,explorekl_nl_order) 
                                            VALUES('$name','$category','$content','$location','$locationurl','$filename','$hours','$phone','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekl_nl");


}
if (isset($_GET['orderupeklnl'])) {

    // debug_to_console("test");

    $order = $_GET['orderupeklnl'];
    $explorekl_nl_id = $_GET['explorekl_nl_id'];
    $order2 = $order + 1;

    $query = "UPDATE explorekl_nl SET explorekl_nl_order= $order2 WHERE explorekl_nl_id=$explorekl_nl_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdowneklnl'])) {

    // debug_to_console("test");

    $order = $_GET['orderdowneklnl'];
    $explorekl_nl_id = $_GET['explorekl_nl_id'];
    $order2 = $order - 1;

    $query = "UPDATE explorekl_nl SET explorekl_nl_order= $order2 WHERE explorekl_nl_id=$explorekl_nl_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deleteeklnl'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $location = $_POST['location'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['eklnlid'];
    $filename = $_POST['imagenameeklnl'];
    $query = "DELETE FROM explorekl_nl WHERE explorekl_nl_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekl/nl/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editeklnl'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $category = $_POST['category'];
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['eklnlid'];
    $filename = $_POST['imagenameeklnl'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE explorekl_nl SET 
    explorekl_nl_title='$name',
    explorekl_nl_category='$category',
    explorekl_nl_order='$order',
    explorekl_nl_location='$location',
    explorekl_nl_locationurl='$locationurl',
    explorekl_nl_content='$content',
    explorekl_nl_hours='$hours',
    explorekl_nl_phone='$phone'
    
    WHERE explorekl_nl_id=$id ";
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
// ekl nl

?>