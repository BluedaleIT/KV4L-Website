<?php
// ekl wte sf
if (isset($_POST['upload_eklwtesf'])) {

    $name = urlencode($_POST['name']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $filename = uploadimage($_FILES["fileToUploadeklwtesf"], "explorekl/", "wte/sf/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekl_wte_sf (explorekl_wte_sf_title,explorekl_wte_sf_content,explorekl_wte_sf_website,explorekl_wte_sf_location,explorekl_wte_sf_locationurl,explorekl_wte_sf_image,explorekl_wte_sf_hours,explorekl_wte_sf_phone,explorekl_wte_sf_order) 
                                            VALUES('$name','$content','$website','$location','$locationurl','$filename','$hours','$phone','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekl_wte_sf");


}
if (isset($_GET['orderupeklwtesf'])) {

    // debug_to_console("test");

    $order = $_GET['orderupeklwtesf'];
    $explorekl_wte_sf_id = $_GET['explorekl_wte_sf_id'];
    $order2 = $order + 1;

    $query = "UPDATE explorekl_wte_sf SET explorekl_wte_sf_order= $order2 WHERE explorekl_wte_sf_id=$explorekl_wte_sf_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdowneklwtesf'])) {

    // debug_to_console("test");

    $order = $_GET['orderdowneklwtesf'];
    $explorekl_wte_sf_id = $_GET['explorekl_wte_sf_id'];
    $order2 = $order - 1;

    $query = "UPDATE explorekl_wte_sf SET explorekl_wte_sf_order= $order2 WHERE explorekl_wte_sf_id=$explorekl_wte_sf_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deleteeklwtesf'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $location = $_POST['location'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['eklwtesfid'];

    $filename = $_POST['imagenameeklwtesf'];
    $query = "DELETE FROM explorekl_wte_sf WHERE explorekl_wte_sf_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekl/wte/sf/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editeklwtesf'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['eklwtesfid'];
    $filename = $_POST['imagenameeklwtesf'];
    $website = $_POST['website'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE explorekl_wte_sf SET 
    explorekl_wte_sf_title='$name',
    explorekl_wte_sf_order='$order',
    explorekl_wte_sf_location='$location',
    explorekl_wte_sf_locationurl='$locationurl',
    explorekl_wte_sf_content='$content',
    explorekl_wte_sf_website='$website',
    explorekl_wte_sf_hours='$hours',
    explorekl_wte_sf_phone='$phone'
    
    WHERE explorekl_wte_sf_id=$id ";
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
// ekl  wte sf



// ekl wte c
if (isset($_POST['upload_eklwtec'])) {

    $name = urlencode($_POST['name']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $filename = uploadimage($_FILES["fileToUploadeklwtec"], "explorekl/", "wte/c/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekl_wte_c (explorekl_wte_c_title,explorekl_wte_c_content,explorekl_wte_c_website,explorekl_wte_c_location,explorekl_wte_c_locationurl,explorekl_wte_c_image,explorekl_wte_c_hours,explorekl_wte_c_phone,explorekl_wte_c_order) 
                                            VALUES('$name','$content','$website','$location','$locationurl','$filename','$hours','$phone','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekl_wte_c");


}
if (isset($_GET['orderupeklwtec'])) {

    // debug_to_console("test");

    $order = $_GET['orderupeklwtec'];
    $explorekl_wte_c_id = $_GET['explorekl_wte_c_id'];
    $order2 = $order + 1;

    $query = "UPDATE explorekl_wte_c SET explorekl_wte_c_order= $order2 WHERE explorekl_wte_c_id=$explorekl_wte_c_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdowneklwtec'])) {

    // debug_to_console("test");

    $order = $_GET['orderdowneklwtec'];
    $explorekl_wte_c_id = $_GET['explorekl_wte_c_id'];
    $order2 = $order - 1;

    $query = "UPDATE explorekl_wte_c SET explorekl_wte_c_order= $order2 WHERE explorekl_wte_c_id=$explorekl_wte_c_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deleteeklwtec'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $location = $_POST['location'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['eklwtecid'];

    $filename = $_POST['imagenameeklwtec'];
    $query = "DELETE FROM explorekl_wte_c WHERE explorekl_wte_c_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekl/wte/c/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editeklwtec'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['eklwtecid'];
    $filename = $_POST['imagenameeklwtec'];
    $website = $_POST['website'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE explorekl_wte_c SET 
    explorekl_wte_c_title='$name',
    explorekl_wte_c_order='$order',
    explorekl_wte_c_location='$location',
    explorekl_wte_c_locationurl='$locationurl',
    explorekl_wte_c_content='$content',
    explorekl_wte_c_website='$website',
    explorekl_wte_c_hours='$hours',
    explorekl_wte_c_phone='$phone'
    
    WHERE explorekl_wte_c_id=$id ";
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
// ekl  wte c


// ekl wte c
if (isset($_POST['upload_eklwter'])) {

    $name = urlencode($_POST['name']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $website = $_POST['website'];
    $filename = uploadimage($_FILES["fileToUploadeklwter"], "explorekl/", "wte/r/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO explorekl_wte_r (explorekl_wte_r_title,explorekl_wte_r_content,explorekl_wte_r_category,explorekl_wte_r_website,explorekl_wte_r_location,explorekl_wte_r_locationurl,explorekl_wte_r_image,explorekl_wte_r_hours,explorekl_wte_r_phone,explorekl_wte_r_order) 
                                            VALUES('$name','$content','$category','$website','$location','$locationurl','$filename','$hours','$phone','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New explorekl_wte_r");


}
if (isset($_GET['orderupeklwter'])) {

    // debug_to_console("test");

    $order = $_GET['orderupeklwter'];
    $explorekl_wte_r_id = $_GET['explorekl_wte_r_id'];
    $order2 = $order + 1;

    $query = "UPDATE explorekl_wte_r SET explorekl_wte_r_order= $order2 WHERE explorekl_wte_r_id=$explorekl_wte_r_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdowneklwter'])) {

    // debug_to_console("test");

    $order = $_GET['orderdowneklwter'];
    $explorekl_wte_r_id = $_GET['explorekl_wte_r_id'];
    $order2 = $order - 1;

    $query = "UPDATE explorekl_wte_r SET explorekl_wte_r_order= $order2 WHERE explorekl_wte_r_id=$explorekl_wte_r_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deleteeklwter'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $location = $_POST['location'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['eklwterid'];

    $filename = $_POST['imagenameeklwter'];
    $query = "DELETE FROM explorekl_wte_r WHERE explorekl_wte_r_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/explorekl/wte/r/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editeklwter'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['eklwterid'];
    $filename = $_POST['imagenameeklwter'];
    $website = $_POST['website'];
    $category = $_POST['category'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE explorekl_wte_r SET 
    explorekl_wte_r_title='$name',
    explorekl_wte_r_order='$order',
    explorekl_wte_r_location='$location',
    explorekl_wte_r_locationurl='$locationurl',
    explorekl_wte_r_content='$content',
    explorekl_wte_r_category='$category',
    explorekl_wte_r_website='$website',
    explorekl_wte_r_hours='$hours',
    explorekl_wte_r_phone='$phone'
    
    WHERE explorekl_wte_r_id=$id ";
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
// ekl  wte c
?>