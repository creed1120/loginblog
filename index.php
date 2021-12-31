<?php include('templates/header.php'); ?>

    <h2>Home Page</h2>

    <?php
        

    ?>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input type="email" name="email" id="mail">

        <input type="file" name="file" id="image">

        <input type="submit" name="submit" value="submit">
    </form>

<?php include('templates/footer.php'); ?>