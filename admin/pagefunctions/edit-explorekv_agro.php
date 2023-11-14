<?php

// explorekv_agro top
if (isset($_POST['upload_explorekv_agro'])) {

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
    $filename = urlencode(uploadimage($_FILES["filetoupload"], "explorekv/agro", ""));
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekv_agro (explorekv_agro_title,explorekv_agro_content,explorekv_agro_content2,explorekv_agro_location,explorekv_agro_locationurl,explorekv_agro_image,explorekv_agro_website,explorekv_agro_hours,explorekv_agro_category,explorekv_agro_order,explorekv_agro_phone) 
                                            VALUES('$title','$content','$content2','$location','$locationurl','$filename','$website','$hours','$category','$order','$phone')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekv_agro");


}

if (isset($_POST['delete_explorekv_agro'])) {

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
    $query = "DELETE FROM explorekv_agro WHERE explorekv_agro_id='$id' ";
    debug_to_console($filename);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekv_agro/'.$category. '/' . $filename);
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
if (isset($_POST['edit_explorekv_agro'])) {

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

    $query = "UPDATE explorekv_agro SET 
    explorekv_agro_title='$title',
    explorekv_agro_content='$content',
    explorekv_agro_content2='$content2',
    explorekv_agro_location='$location',
    explorekv_agro_locationurl='$locationurl',
    explorekv_agro_website='$website',
    explorekv_agro_hours='$hours',
    explorekv_agro_category='$category',
    explorekv_agro_order='$order',
    explorekv_agro_phone='$phone'
    WHERE explorekv_agro_id='$id' ";
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


// explorekv_agro


