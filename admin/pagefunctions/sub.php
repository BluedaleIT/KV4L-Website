<?php 

if (isset($_POST['editmail'])) {
    // debug_to_console("test");
// echo "sd";
    $querycontent = "";
    if ($_POST['emailtitle']) {

        $emailtitle = $_POST['emailtitle'];
        if ($querycontent) {
            $querycontent .= ",";
        }
        $querycontent .= "title='$emailtitle'";

    }
    if ($_POST['emailcontent']) {
        $emailcontent = $_POST['emailcontent'];
        if ($querycontent) {
            $querycontent .= ",";
        }
        $querycontent .= "content='$emailcontent'";

    }

    if ($querycontent) {
        // debug_to_console($querycontent);

        $query = "UPDATE welcomeemail SET " . $querycontent . "WHERE id='1' ";
        $update = mysqli_query($db, $query);
        // echo $query;
        if ($update) {
            // echo "Record updated successfully";
            debug_to_console("test");

            array_push($errors2, "Edit Saved");

        } else {
            echo "Error updating record: " . mysqli_error($db);
        }

    }

    // $filename = $_POST['filename'];
// $id = $_POST['id'];

    //     $query = "UPDATE indexpage SET 
// hero_title='$title',
// hero_title='$title2',
// hero_title='$subtitle'

    // WHERE id='1' ";
    // debug_to_console($query);
    // $update = mysqli_query($db, $query);
    // if ($update) {
    // echo "Record updated successfully";
    // debug_to_console("test");

    // array_push($errors2, "Edit Saved");

    // } else {
    //     echo "Error updating record: " . mysqli_error($db);
    // }

}?>