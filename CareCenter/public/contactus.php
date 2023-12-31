<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //Perform form validation and sanitize input data (you can add validation here)

    //Set up email parameters
    $to = 'your@email.com'; //Replace with your email address
    $subject = 'Contact Form Submission';
    $headers = "From: $name <$email>\r\n";

    //Send the email
    $mailSent = mail($to, $subject, $message, $headers);

    if($mailSent){
        //Redirect to a thank-you page after successful submission
        header('Location: thank_you.php');  //Replace with the URL of your thank-you page
        exit;
    } else {
        //Handle email sending failure (optional)
        //You can display an error message or log the error here
        echo "Failed to send the email. Please try again later.";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Above and Beyond Social Services - Contact Us</title>
        <link rel="stylesheet" href="assets/css/aboveandbeyond.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Fourth navbar example">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Above and Beyond Social Services</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse justify-content-lg-center" id="navbarsExample04">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.html">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href=" aboutus.html">About Us</a></li>
                  <li class="nav-item"><a class="nav-link" href=" services.html">Services</a></li>
                  <li class="nav-item"><a class="nav-link" href=" programs.html">Programs</a></li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Get Involved</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href=" careers.html">Careers</a></li>
                      <li><a class="dropdown-item" href=" volunteer.html">Volunteer</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a href=" news.html" class="nav-link">Blog/News</a></li>
                  <li class="nav-item"><a href=" events.html" class="nav-link">Events</a></li>
                  <li class="nav-item"><a href=" faqs.html" class="nav-link">FAQs</a></li>
                  <li class="nav-item"><a href=" contactus.html" class="nav-link">Contact Us</a></li>
                </ul>
              </div>
            </div>
        </nav>

        <h3>Contact us</h3>
        
        <div class="row mb-3 text-center">
          <div class="container py-4 col-sm-6 col-lg-8">
            <form id="contactForm">
              <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" />
              </div>

              <div class="mb-3">
                <label for="InputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="email@email.com">
                <div id="emailHelp" class="form-text"></div>
              </div>

              <div class="mb-3">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-6 col-md-4">
          <h4>Info</h4>
          <p>Above and Beyond Care Center</p>
          <p>Phone Number:</p>
        </div>
        </div>
    </body>
</html>