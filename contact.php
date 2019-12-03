<!DOCTYPE html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="css/style.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <title>Contact | AngelyWu</title>
  </head>
  <body>
    <div class="full-page-wrapper">
      <header class="header-section">
        <div class="content-area">
          <div class="menu-bar">
            <div class="logo">AngelyWu</div>
            <nav class="navigation">
              <a href="index.html">Home</a>
              <a href="portfolio.html">Portfolio</a>
              <a href="contact.php">Contact</a>
            </nav>
            <div class="navigation-mobile">
                <input type="checkbox" class="nav-checkbox" id="nav-toggle" />
                <label for="nav-toggle" class="nav-button">
                  <span class="nav-icon">&nbsp;</span>
                </label>
                <div class="nav-bg">&nbsp;</div>
                <nav class="nav-menu">
                  <ul class="nav-list">
                    <li class="nav-item">
                      <a href="index.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                      <a href="portfolio.html" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                      <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                  </ul>
                </nav>
              </div>
          </div>
          <div class="header-content">
            <div class="contact-section">

                <div class="text-box">
                    <h2>Connect with me</h2>

                  <div class="contact-form">

                      <img class="avatar" src="img/avatar.png" />
                      <div class="form-box">

                        <?php 
                        if(isset($_POST['submit'])){
                            $to = "angely-wu@hotmail.com"; // this is your Email address
                            $from = $_POST['email']; // this is the sender's Email address
                        //    $first_name = $_POST['first_name'];
                            $full_name = $_POST['name'];
                            $subject = "Form submission";
                            $subject2 = "Copy of your form submission";
                            $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
                            $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

                            $headers = "From:" . $from;
                            $headers2 = "From:" . $to;
                            mail($to,$subject,$message,$headers);
                            mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                            echo "<div class='sent'>" . "Mail Sent. Thank you " . $name . ", I will contact you shortly." . "</div>";
                            // You can also use header('Location: thank_you.php'); to redirect to another page.
                            }
                        ?>
                          <p>I am Angely Wu, a vancouver-based UI/UX freelancer. Feel free to reach out to me if you need an quiry or have any questions. Also, you could always just send me a friendly hello.</p>
                          <form id="contactForm" action="" class="form" method="post">
                              <div class="form-groups">
                                <input id="name" name="name" class="form-input" type="text" placeholder="Full name" required>
                                <label for="" class="form-label">Full name</label>
                              </div>
                              <div class="form-groups">
                                  <input id="email" name="email" class="form-input" type="email" placeholder="Email address" required>
                                  <label for="" class="form-label">Email address</label>
                              </div>
                              <div class="form-groups">
                                  <textarea id="message" class="form-field" name="message" type="text" placeholder="Message" required></textarea>                              
                              </div>
                              <button class="btn btn-primary" name="submit" type="submit">Send Message</button>
                              <input type="button" class="btn btn-reset" value="Reset" onclick="myFunction()">
                      </form>
                      
                    <script>
                    function myFunction() {
                      document.getElementById("contactForm").reset();
                    }
                    </script>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </header>

      <footer class="footer">
        <div class="content-area">
          <div class="logo">
          AngelyWu
          </div>
          <div class="social">
            <span class="slogan">© 2019 Angely Wu</span>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
