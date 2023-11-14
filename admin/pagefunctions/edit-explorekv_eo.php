<?php

// explorekv_eo top
if (isset($_POST['upload_explorekv_eo'])) {

    $title = urlencode($_POST['title']);
    $content = urlencode($_POST['content']);
    $content2 = urlencode($_POST['content2']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $website = urlencode($_POST['website']);
    $hours = urlencode($_POST['hours']);
    $category = urlencode($_POST['category']);
    $order = urlencode($_POST['order']);
    $phone = $_POST['phone'];
    $filename = urlencode(uploadimage($_FILES["filetoupload"], "explorekv/eo", $category."/"));
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekv_eo (explorekv_eo_title,explorekv_eo_content,explorekv_eo_content2,explorekv_eo_location,explorekv_eo_locationurl,explorekv_eo_image,explorekv_eo_website,explorekv_eo_hours,explorekv_eo_category,explorekv_eo_order,explorekv_eo_phone) 
                                            VALUES('$title','$content','$content2','$location','$locationurl','$filename','$website','$hours','$category','$order','$phone')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekv_eo");


}

if (isset($_POST['delete_explorekv_eo'])) {

    $id = urlencode($_POST['id']);
    $title = urlencode($_POST['title']);
    $content = urlencode($_POST['content']);
    $content2 = urlencode($_POST['content2']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $website = urlencode($_POST['website']);
    $hours = urlencode($_POST['hours']);
    $category = urlencode($_POST['category']);
    $order = urlencode($_POST['order']);
    $phone = $_POST['phone'];
    $filename = urlencode($_POST['imagename']);
    $query = "DELETE FROM explorekv_eo WHERE explorekv_eo_id='$id' ";
    debug_to_console($filename);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekv_eo/'.$category. '/' . $filename);
        if ($status) {

            array_push($errors2, "Removed");
        } else {
    debug_to_console($query);

            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['edit_explorekv_eo'])) {

    $id = urlencode($_POST['id']);
    $title = urlencode($_POST['title']);
    $content = urlencode($_POST['content']);
    $content2 = urlencode($_POST['content2']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $website = urlencode($_POST['website']);
    $hours = urlencode($_POST['hours']);
    $category = urlencode($_POST['category']);
    $order = urlencode($_POST['order']);
    $phone = $_POST['phone'];
    $filename = urlencode($_POST['imagename']);

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE explorekv_eo SET 
    explorekv_eo_title='$title',
    explorekv_eo_content='$content',
    explorekv_eo_content2='$content2',
    explorekv_eo_location='$location',
    explorekv_eo_locationurl='$locationurl',
    explorekv_eo_website='$website',
    explorekv_eo_hours='$hours',
    explorekv_eo_category='$category',
    explorekv_eo_order='$order',
    explorekv_eo_phone='$phone'
    WHERE explorekv_eo_id='$id' ";
    // echo ($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        // echo "Record updated successfully";
        // debug_to_console("test");

        array_push($errors2, "Edit Saved");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }

}


// explorekv_eo


