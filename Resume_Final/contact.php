<?php include 'inc/header.php' ?>


<h1>Contact Me</h1>
<form action="" method="POST">
    <div class="contact">
        <label for="">Name</label>
        <input type="text" class="form-control" id="" name="" placeholder="">
        <div class="invalid-feedback">

        </div>
    </div>

    <div class="contact">
        <label for="">Email</label>
        <input type="text" class="form-control" id="" name="" placeholder="">
        <div class="invalid-feedback">

        </div>
    </div>

    <div class="contact">
        <label for="body" class="form-label">Message</label>
        <textarea class="form-control" id="body" name="body" placeholder="Enter your message"></textarea>
        <div class="invalid-feedback">

        </div>
    </div>

    <div>
        <input type="submit" name="submit" value="Send">
    </div>
</form>



<?php include 'inc/footer.php'; ?>