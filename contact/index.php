<?php include('../templates/header.php'); ?>

<div class="col-md-3">

    <h2>Get in Touch</h2>
    <p>Please fill out form below</p>

    <form action="contact.php" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name">
        <p><?php echo $errors['name']; ?></p>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Subject</label>
        <input type="text" name="subject" class="form-control" id="subject">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" width="100%"></textarea>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include('../templates/footer.php'); ?>