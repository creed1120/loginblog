<?php include('templates/header.php'); ?>

<?php
$sql = "SELECT * FROM users WHERE id = 3";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<div class="row">
    <?php if ($result): ?>
        <?php foreach($result as $user): ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $user['first_name'] ?> <?php echo $user['last_name'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $user['username'] ?></h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="mailto:<?php echo $user['email'] ?>" class="card-link"><?php echo $user['email'] ?></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?php mysqli_close($conn); ?>

    <?php else: ?>
        <p>No results found.</p>
    <?php endif; ?>
</div>

<?php include('templates/footer.php'); ?>