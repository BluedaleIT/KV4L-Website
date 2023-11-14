<?php

// explorekv_pwor top
if (isset($_POST['upload_explorekv_pwor'])) {

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
    $filename = urlencode(uploadimage($_FILES["filetoupload"], "explorekv/pwor", $category."/"));
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekv_pwor (explorekv_pwor_title,explorekv_pwor_content,explorekv_pwor_content2,explorekv_pwor_location,explorekv_pwor_locationurl,explorekv_pwor_image,explorekv_pwor_website,explorekv_pwor_hours,explorekv_pwor_category,explorekv_pwor_order,explorekv_pwor_phone) 
                                            VALUES('$title','$content','$content2','$location','$locationurl','$filename','$website','$hours','$category','$order','$phone')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekv_pwor");


}

if (isset($_POST['delete_explorekv_pwor'])) {

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
    $query = "DELETE FROM explorekv_pwor WHERE explorekv_pwor_id='$id' ";
    debug_to_console($filename);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekv_pwor/'.$category. '/' . $filename);
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
if (isset($_POST['edit_explorekv_pwor'])) {

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

    $query = "UPDATE explorekv_pwor SET 
    explorekv_pwor_title='$title',
    explorekv_pwor_content='$content',
    explorekv_pwor_content2='$content2',
    explorekv_pwor_location='$location',
    explorekv_pwor_locationurl='$locationurl',
    explorekv_pwor_website='$website',
    explorekv_pwor_hours='$hours',
    explorekv_pwor_category='$category',
    explorekv_pwor_order='$order',
    explorekv_pwor_phone='$phone'
    WHERE explorekv_pwor_id='$id' ";
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


// explorekv_pwor


