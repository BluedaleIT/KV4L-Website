<?php

// explorekv_ss top
if (isset($_POST['upload_explorekv_ss'])) {

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
    $filename = urlencode(uploadimage($_FILES["filetoupload"], "explorekv_ss/", $category."/"));
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekv_ss (explorekv_ss_title,explorekv_ss_content,explorekv_ss_content2,explorekv_ss_location,explorekv_ss_locationurl,explorekv_ss_image,explorekv_ss_website,explorekv_ss_hours,explorekv_ss_category,explorekv_ss_order,explorekv_ss_phone) 
                                            VALUES('$title','$content','$content2','$location','$locationurl','$filename','$website','$hours','$category','$order','$phone')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekv_ss");


}

if (isset($_POST['delete_explorekv_ss'])) {

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
    $query = "DELETE FROM explorekv_ss WHERE explorekv_ss_id='$id' ";
    debug_to_console($filename);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekv_ss/'.$category. '/' . $filename);
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
if (isset($_POST['edit_explorekv_ss'])) {

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

    $query = "UPDATE explorekv_ss SET 
    explorekv_ss_title='$title',
    explorekv_ss_content='$content',
    explorekv_ss_content2='$content2',
    explorekv_ss_location='$location',
    explorekv_ss_locationurl='$locationurl',
    explorekv_ss_website='$website',
    explorekv_ss_hours='$hours',
    explorekv_ss_category='$category',
    explorekv_ss_order='$order',
    explorekv_ss_phone='$phone'
    WHERE explorekv_ss_id='$id' ";
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


// explorekv_ss


