<?php include 'inc/header.php' ?>


<?php
  $name = $email = $body = $reply = '';
  $nameErr = $emailErr = $bodyErr = '';

  //Form submission
  if(isset($_POST['submit'])){
    //Validate the name
    if(empty($_POST['name'])){
      $nameErr = 'Name is required!';
    } else {
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }


    //Validate the email
    if(empty($_POST['email'])){
      $emailErr = 'Email is required!';
    } else {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }

    
    //Validate the body
    if(empty($_POST['body'])){
      $bodyErr = 'Feedback is required!';
    } else {
      $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    
    if(empty($nameErr) && empty($emailErr) && empty($bodyErr)){
      //If no errors, add to database...
      $sql = "INSERT INTO feedback(name, email, body) VALUES ('$name', '$email', '$body')";
  
      if(mysqli_query($conn, $sql)){
        //If all went well...
        $reply = "Thank you $name for your message. I will email you at $email shortly!";
      } else {
        //If error exists...
        echo 'Error: ' . mysqli_error($conn);
      }
    }
  }


  ?>









<h1>Contact Me</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <div class="contact">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo $nameErr? 'is-invalid' : null; ?>" id="name" name="name" placeholder="Enter your name">
        <div class="invalid-feedback">
            <?php echo $nameErr; ?>
        </div>
    </div>

    <div class="contact">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $emailErr? 'is-invalid' : null; ?>" id="email" name="email" placeholder="Enter your email">
        <div class="invalid-feedback">
            <?php echo $emailErr; ?>
        </div>
    </div>

    <div class="contact">
        <label for="body" class="form-label">Message</label>
        <textarea class="form-control <?php echo $bodyErr? 'is-invalid' : null; ?>" id="body" name="body" placeholder="Enter your message"></textarea>
        <div class="invalid-feedback">
            <?php echo $bodyErr; ?>
        </div>
    </div>

    <div>
        <input type="submit" name="submit" value="Send">
    </div>

    <div>
        <?php echo $reply; ?>
    </div>
</form>



<?php include 'inc/footer.php'; ?>