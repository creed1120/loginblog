<?php include('templates/header.php'); ?>

<?php
    if(isset($_POST['submit'])) {
        $myFile = fopen("uploads/file.txt", "a");

        $txt = $_POST['age'] . "\n";

        fwrite($myFile, $txt);

        fclose($myFile);
    }

?>

<div class="col-md-3">
    <form action="fileput.php" method="POST">
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="text" name="age" class="form-control" id="age">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include('templates/footer.php'); ?>