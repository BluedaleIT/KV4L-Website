<?php
// ekl pwor
if (isset($_POST['upload_eklpwor'])) {

    $name = urlencode($_POST['name']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $filename = uploadimage($_FILES["fileToUploadeklpwor"], "explorekl/", "pwor/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekl_pwor (explorekl_pwor_title,explorekl_pwor_category,explorekl_pwor_content,explorekl_pwor_location,explorekl_pwor_locationurl,explorekl_pwor_image,explorekl_pwor_hours,explorekl_pwor_phone,explorekl_pwor_order) 
                                            VALUES('$name','$category','$content','$location','$locationurl','$filename','$hours','$phone','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekl_pwor");


}
if (isset($_GET['orderupeklpwor'])) {

    // debug_to_console("test");

    $order = $_GET['orderupeklpwor'];
    $explorekl_pwor_id = $_GET['explorekl_pwor_id'];
    $order2 = $order + 1;

    $query = "UPDATE explorekl_pwor SET explorekl_pwor_order= $order2 WHERE explorekl_pwor_id=$explorekl_pwor_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdowneklpwor'])) {

    // debug_to_console("test");

    $order = $_GET['orderdowneklpwor'];
    $explorekl_pwor_id = $_GET['explorekl_pwor_id'];
    $order2 = $order - 1;

    $query = "UPDATE explorekl_pwor SET explorekl_pwor_order= $order2 WHERE explorekl_pwor_id=$explorekl_pwor_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deleteeklpwor'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $location = $_POST['location'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['eklpworid'];
    $filename = $_POST['imagenameeklpwor'];
    $query = "DELETE FROM explorekl_pwor WHERE explorekl_pwor_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekl/pwor/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editeklpwor'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $category = $_POST['category'];
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['eklpworid'];
    $filename = $_POST['imagenameeklpwor'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE explorekl_pwor SET 
    explorekl_pwor_title='$name',
    explorekl_pwor_category='$category',
    explorekl_pwor_order='$order',
    explorekl_pwor_location='$location',
    explorekl_pwor_locationurl='$locationurl',
    explorekl_pwor_content='$content',
    explorekl_pwor_hours='$hours',
    explorekl_pwor_phone='$phone'
    
    WHERE explorekl_pwor_id=$id ";
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
// ekl pwor

?>