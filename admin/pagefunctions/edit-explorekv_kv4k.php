<?php

// explorekv_kv4k top
if (isset($_POST['upload_explorekv_kv4k'])) {

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
    $filename = urlencode(uploadimage($_FILES["filetoupload"], "wtd/kv4kids", ""));
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekv_kv4k (explorekv_kv4k_title,explorekv_kv4k_content,explorekv_kv4k_content2,explorekv_kv4k_location,explorekv_kv4k_locationurl,explorekv_kv4k_image,explorekv_kv4k_website,explorekv_kv4k_hours,explorekv_kv4k_category,explorekv_kv4k_order,explorekv_kv4k_phone) 
                                            VALUES('$title','$content','$content2','$location','$locationurl','$filename','$website','$hours','$category','$order','$phone')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekv_kv4k");


}

if (isset($_POST['delete_explorekv_kv4k'])) {

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
    $query = "DELETE FROM explorekv_kv4k WHERE explorekv_kv4k_id='$id' ";
    debug_to_console($filename);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekv_kv4k/'.$category. '/' . $filename);
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
if (isset($_POST['edit_explorekv_kv4k'])) {

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

    $query = "UPDATE explorekv_kv4k SET 
    explorekv_kv4k_title='$title',
    explorekv_kv4k_content='$content',
    explorekv_kv4k_content2='$content2',
    explorekv_kv4k_location='$location',
    explorekv_kv4k_locationurl='$locationurl',
    explorekv_kv4k_website='$website',
    explorekv_kv4k_hours='$hours',
    explorekv_kv4k_category='$category',
    explorekv_kv4k_order='$order',
    explorekv_kv4k_phone='$phone'
    WHERE explorekv_kv4k_id='$id' ";
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


// explorekv_kv4k


