<?php

    if(isset($_POST['submit'])) {
        $file = $_FILES['file'];
        $name = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];

        $tempExtension = explode(".", $name);

        $fileExtension = strtolower(end($tempExtension));

        $filesAllowed = ['jpeg', 'jpg', 'png', 'gif'];
        
        if(in_array($fileExtension, $filesAllowed)) {
            if($error === 0) {
                if ($size < 230000) {
                    $newFileName = uniqid('', TRUE) . "." . $fileExtension;
                    $fileDestination = "uploads/" . $newFileName;
                    move_uploaded_file($tmp_name, $fileDestination);

                    header("Location: index.php?uploadsuccessful");

                } else {
                    echo "<p class='text-danger'>Sorry you file is to large.</p>";
                }
            } else {
                echo "<p class='text-danger'>Sorry there was an error, try it again.</p>";
            }
        } else {
            echo "<p class='text-danger'>Sorry file type not accepted.</p>";
        }

    }

 ?>