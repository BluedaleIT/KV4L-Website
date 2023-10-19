<?php
// place to shop
if (isset($_POST['upload_pts'])) {

    $name = urlencode($_POST['name']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $filename = uploadimage($_FILES["fileToUpload"], "place_to_shop/", "");
    // echo "  asd" . $filename;

    $query = "INSERT INTO place_shop (place_shop_title,place_shop_content,place_shop_location,place_shop_locationurl,place_shop_image,place_shop_hours,place_shop_phone,place_shop_order) 
                                            VALUES('$name','$content','$location','$locationurl','$filename','$hours','$phone','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New place_shop");


}
if (isset($_GET['orderupPTS'])) {

    // debug_to_console("test");

    $order = $_GET['orderupPTS'];
    $place_shop_id = $_GET['place_shop_id'];
    $order2 = $order + 1;

    $query = "UPDATE place_shop SET place_shop_order= $order2 WHERE place_shop_id=$place_shop_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdownPTS'])) {

    // debug_to_console("test");

    $order = $_GET['orderdownPTS'];
    $place_shop_id = $_GET['place_shop_id'];
    $order2 = $order - 1;

    $query = "UPDATE place_shop SET place_shop_order= $order2 WHERE place_shop_id=$place_shop_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deletepts'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $location = $_POST['location'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['ptsid'];
    $filename = $_POST['imagenamepts'];
    $query = "DELETE FROM place_shop WHERE place_shop_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/place_to_shop/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editpts'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['ptsid'];
    $filename = $_POST['imagenamepts'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE place_shop SET 
    place_shop_title='$name',
    place_shop_order='$order',
    place_shop_location='$location',
    place_shop_locationurl='$locationurl',
    place_shop_content='$content',
    place_shop_hours='$hours',
    place_shop_phone='$phone'
    
    WHERE place_shop_id=$id ";
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

// end place to shop
?>