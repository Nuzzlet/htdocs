<!DOCTYPE html>
<html lang="en">
  <head>
<div class="container-fluid">
<?php include('head.php');?>
<?php include('nav.php');?>

  </head>
  <body>

<div class="inner-cover">
  <h2>Contact Me</h2>
    <form action="form_process.php" method="post" name="contact_form">
    <div class="input-group">
      <span class="input-group-addon" id="name">Name</span>
      <Input class="form-control" placeholder="Ronald Mcdonald" name="full_name" type="text"></Input>
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon" id="email">@</span>
      <input class="form-control" placeholder="MrDucki305@gmail.com" name="email" type="text">
    </div>
    <br>
    <div class="input-group">
      <span class="input-group-addon" id="msg">Message</span>

      <textarea class="form-control" placeholder="Message" name="message"></textarea>
      <span class="input-group-addon">
      <button class="btn btn-primary" name="submit" id="submit" value="Submit" type="submit">Submit</button>
      </span>
    </div>
    </form>
    </div>


    <footer>
      <?php include('footer.php');?>
    </footer>
    </div><!--/.container-fluid -->
  </body>
</html>
