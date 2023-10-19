<?php
// medical tourism healthcare 
if (isset($_POST['upload_mthc'])) {

    $name = urlencode($_POST['name']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $filename = uploadimage($_FILES["fileToUploadhc"], "medical_tourism", "hc/");
    // echo "  asd" . $filename;

    $query = "INSERT INTO medical_tourism_hc (medical_tourism_hc_title,medical_tourism_hc_content,medical_tourism_hc_location,medical_tourism_hc_locationurl,medical_tourism_hc_image,medical_tourism_hc_hours,medical_tourism_hc_phone,medical_tourism_hc_order) 
                                            VALUES('$name','$content','$location','$locationurl','$filename','$hours','$phone','0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New Medical Tourism Healthcare");


}
if (isset($_GET['orderupMTH'])) {

    // debug_to_console("test");

    $order = $_GET['orderupMTH'];
    $medical_tourism_hc_id = $_GET['medical_tourism_hc_id'];
    $order2 = $order + 1;

    $query = "UPDATE medical_tourism_hc SET medical_tourism_hc_order= $order2 WHERE medical_tourism_hc_id=$medical_tourism_hc_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdownMTH'])) {

    // debug_to_console("test");

    $order = $_GET['orderdownMTH'];
    $medical_tourism_hc_id = $_GET['medical_tourism_hc_id'];
    $order2 = $order - 1;

    $query = "UPDATE medical_tourism_hc SET medical_tourism_hc_order= $order2 WHERE medical_tourism_hc_id=$medical_tourism_hc_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deletemthc'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $location = $_POST['location'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['mthcid'];
    $filename = $_POST['imagenamemthc'];
    $query = "DELETE FROM medical_tourism_hc WHERE medical_tourism_hc_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/medical_tourism/hc/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editmthc'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['mthcid'];
    $filename = $_POST['imagenamemthc'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE medical_tourism_hc SET 
    medical_tourism_hc_title='$name',
    medical_tourism_hc_order='$order',
    medical_tourism_hc_location='$location',
    medical_tourism_hc_locationurl='$locationurl',
    medical_tourism_hc_content='$content',
    medical_tourism_hc_hours='$hours',
    medical_tourism_hc_phone='$phone'
    
    WHERE medical_tourism_hc_id=$id ";
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
// end medical tourism healthcare


// medical tourism dtl
if (isset($_POST['upload_mtdtl'])) {

    $name = urlencode($_POST['name']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];

    $filename = uploadimage($_FILES["fileToUploaddtl"], "medical_tourism", "dtl/");
    // echo "  asd" . $filename;


    $query = "INSERT INTO medical_tourism_dtl (medical_tourism_dtl_title,medical_tourism_dtl_content,medical_tourism_dtl_location,medical_tourism_dtl_locationurl,medical_tourism_dtl_image,medical_tourism_dtl_hours,medical_tourism_dtl_phone,medical_tourism_dtl_order) 
                                            VALUES('$name','$content','$location','$locationurl','$filename','$hours','$phone', '0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New Medical Tourism Dental");


}
if (isset($_GET['orderupMTDTL'])) {

    // debug_to_console("test");

    $order = $_GET['orderupMTDTL'];
    $medical_tourism_dtl_id = $_GET['medical_tourism_dtl_id'];
    $order2 = $order + 1;

    $query = "UPDATE medical_tourism_dtl SET medical_tourism_dtl_order= $order2 WHERE medical_tourism_dtl_id=$medical_tourism_dtl_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdownMTDTL'])) {

    // debug_to_console("test");

    $order = $_GET['orderdownMTDTL'];
    $medical_tourism_dtl_id = $_GET['medical_tourism_dtl_id'];
    $order2 = $order - 1;

    $query = "UPDATE medical_tourism_dtl SET medical_tourism_dtl_order= $order2 WHERE medical_tourism_dtl_id=$medical_tourism_dtl_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deletemtDTL'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $location = $_POST['location'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['mtdtlid'];
    $filename = $_POST['imagenamemtdtl'];
    $query = "DELETE FROM medical_tourism_dtl WHERE medical_tourism_dtl_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/medical_tourism/dtl/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editmtDTL'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['mtdtlid'];
    $filename = $_POST['imagenamemtdtl'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE medical_tourism_dtl SET 
    medical_tourism_dtl_title='$name',
    medical_tourism_dtl_order='$order',
    medical_tourism_dtl_location='$location',
    medical_tourism_dtl_locationurl='$locationurl',
    medical_tourism_dtl_content='$content',
    medical_tourism_dtl_hours='$hours',
    medical_tourism_dtl_phone='$phone'

    WHERE medical_tourism_dtl_id=$id ";
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
// end medical tourism dtl


// medical tourism der
if (isset($_POST['upload_mtder'])) {

    $name = urlencode($_POST['name']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];

    $filename = uploadimage($_FILES["fileToUploadder"], "medical_tourism", "der/");
    // echo "  asd" . $filename;


    $query = "INSERT INTO medical_tourism_der (medical_tourism_der_title,medical_tourism_der_content,medical_tourism_der_location,medical_tourism_der_locationurl,medical_tourism_der_image,medical_tourism_der_hours,medical_tourism_der_phone,medical_tourism_der_order) 
                                            VALUES('$name','$content','$location','$locationurl','$filename','$hours','$phone', '0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New Medical Tourism Dental");


}
if (isset($_GET['orderupMTDER'])) {

    // debug_to_console("test");

    $order = $_GET['orderupMTDER'];
    $medical_tourism_der_id = $_GET['medical_tourism_der_id'];
    $order2 = $order + 1;

    $query = "UPDATE medical_tourism_der SET medical_tourism_der_order= $order2 WHERE medical_tourism_der_id=$medical_tourism_der_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdownMTDER'])) {

    // debug_to_console("test");

    $order = $_GET['orderdownMTDER'];
    $medical_tourism_der_id = $_GET['medical_tourism_der_id'];
    $order2 = $order - 1;

    $query = "UPDATE medical_tourism_der SET medical_tourism_der_order= $order2 WHERE medical_tourism_der_id=$medical_tourism_der_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deletemtDER'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $location = $_POST['location'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['mtderid'];
    $filename = $_POST['imagenamemtder'];
    $query = "DELETE FROM medical_tourism_der WHERE medical_tourism_der_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/medical_tourism/der/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editmtDER'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['mtderid'];
    $filename = $_POST['imagenamemtder'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE medical_tourism_der SET 
    medical_tourism_der_title='$name',
    medical_tourism_der_order='$order',
    medical_tourism_der_location='$location',
    medical_tourism_der_locationurl='$locationurl',
    medical_tourism_der_content='$content',
    medical_tourism_der_hours='$hours',
    medical_tourism_der_phone='$phone'

    WHERE medical_tourism_der_id=$id ";
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


// end medical tourism der


// medical tourism oph
if (isset($_POST['upload_mtoph'])) {

    $name = urlencode($_POST['name']);
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $content = urlencode($_POST['content']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];

    $filename = uploadimage($_FILES["fileToUploadoph"], "medical_tourism", "oph/");
    // echo "  asd" . $filename;


    $query = "INSERT INTO medical_tourism_oph (medical_tourism_oph_title,medical_tourism_oph_content,medical_tourism_oph_location,medical_tourism_oph_locationurl,medical_tourism_oph_image,medical_tourism_oph_hours,medical_tourism_oph_phone,medical_tourism_oph_order) 
                                            VALUES('$name','$content','$location','$locationurl','$filename','$hours','$phone', '0')";
    mysqli_query($db, $query);
    array_push($errors2, "Added New Medical Tourism Oph");


}
if (isset($_GET['orderupMTOPH'])) {

    // debug_to_console("test");

    $order = $_GET['orderupMTOPH'];
    $medical_tourism_oph_id = $_GET['medical_tourism_oph_id'];
    $order2 = $order + 1;

    $query = "UPDATE medical_tourism_oph SET medical_tourism_oph_order= $order2 WHERE medical_tourism_oph_id=$medical_tourism_oph_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_GET['orderdownMTOPH'])) {

    // debug_to_console("test");

    $order = $_GET['orderdownMTOPH'];
    $medical_tourism_oph_id = $_GET['medical_tourism_oph_id'];
    $order2 = $order - 1;

    $query = "UPDATE medical_tourism_oph SET medical_tourism_oph_order= $order2 WHERE medical_tourism_oph_id=$medical_tourism_oph_id";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {
        array_push($errors2, "Order Changed");

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['deletemtOPH'])) {


    $name = $_POST['name'];
    $order = $_POST['order'];
    $location = $_POST['location'];
    $locationurl = $_POST['locationurl'];
    $content = $_POST['content'];
    $id = $_POST['mtophid'];
    $filename = $_POST['imagenamemtoph'];
    $query = "DELETE FROM medical_tourism_oph WHERE medical_tourism_oph_id='$id' ";
    debug_to_console($query);
    $update = mysqli_query($db, $query);
    if ($update) {


        $status = unlink('../assets/img/medical_tourism/oph/' . $filename);
        if ($status) {
            array_push($errors2, "Removed");
        } else {
            array_push($errors2, "Failed to remove");
        }

    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}
if (isset($_POST['editmtOPH'])) {


    $name = urlencode($_POST['name']);
    $order = $_POST['order'];
    $location = urlencode($_POST['location']);
    $locationurl = urlencode($_POST['locationurl']);
    $hours = urlencode($_POST['hours']);
    $phone = $_POST['phone'];
    $content = urlencode($_POST['content']);
    $id = $_POST['mtophid'];
    $filename = $_POST['imagenamemtoph'];

    // $filename = $_POST['filename'];
    // $id = $_POST['id'];

    $query = "UPDATE medical_tourism_oph SET 
    medical_tourism_oph_title='$name',
    medical_tourism_oph_order='$order',
    medical_tourism_oph_location='$location',
    medical_tourism_oph_locationurl='$locationurl',
    medical_tourism_oph_content='$content',
    medical_tourism_oph_hours='$hours',
    medical_tourism_oph_phone='$phone'

    WHERE medical_tourism_oph_id=$id ";
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

// end medical tourism dtl

?>