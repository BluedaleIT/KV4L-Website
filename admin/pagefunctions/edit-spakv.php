<?php

// spakv top
if (isset($_POST['upload_spakv'])) {

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
    $filename = urlencode(uploadimage($_FILES["filetoupload"], "spakv", ""));
    // echo "  asd" . $filename;

    $query = "INSERT INTO spakv (spakv_title,spakv_content,spakv_content2,spakv_location,spakv_locationurl,spakv_image,spakv_website,spakv_hours,spakv_category,spakv_order,spakv_phone) 
                                            VALUES('$title','$content','$content2','$location','$locationurl','$filename','$website','$hours','$category','$order','$phone')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New spakv");


}

if (isset($_POST['delete_spakv'])) {

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
    $query = "DELETE FROM spakv WHERE spakv_id='$id' ";
    debug_to_console($filename);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/spakv/'.$category. '/' . $filename);
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
if (isset($_POST['edit_spakv'])) {

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

    $query = "UPDATE spakv SET 
    spakv_title='$title',
    spakv_content='$content',
    spakv_content2='$content2',
    spakv_location='$location',
    spakv_locationurl='$locationurl',
    spakv_website='$website',
    spakv_hours='$hours',
    spakv_category='$category',
    spakv_order='$order',
    spakv_phone='$phone'
    WHERE spakv_id='$id' ";
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


// spakv


