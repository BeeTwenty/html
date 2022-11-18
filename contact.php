<!DOCTYPE html>         
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Contact</title>
<link rel="script" href="/script.js">
<link rel="icon" href="img/favicons/favicon.png.jpg">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php include("mail.php")?>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
    <div class="container">
        <a href="index.html" class="navbar-brand">Contact</a>
        
        <button 
                class="navbar-toggler"
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navmenu"
                aria-controls="navmenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
            <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="navmenu"> 
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                  <a class="nav-link " href="index.html">Home </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link " href="/mcbservers.html">Bedrock</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/mcserver.html">Minecraft</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="/ecoservers.html">Eco</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link active" href="/contact.html">Contact</a>
                  </li>
            </ul>
<form action="https://www.paypal.com/donate" method="post" target="_top">
<input type="hidden" name="hosted_button_id" value="KQ6R3ZC5EPWVG" />
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
<img alt="" border="0" src="https://www.paypal.com/en_NO/i/scr/pixel.gif" width="1" height="1" />
</form>
        </div>
    </div>
    
</nav>
<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5 ">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 ">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" placeholder="Your Name" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 gy-1" >
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" placeholder="Your Email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12 gy-1">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" placeholder="Subject" class="form-control">
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12 gy-1">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" placeholder="Your Message" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="validateForm();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        

    </div>

</section>
<!--Section: Contact v.2-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>

function validateForm() {
  var name =  document.getElementById('name').value;
  if (name == "") {
      document.querySelector('.status').innerHTML = "Name cannot be empty";
      return false;
  }
  var email =  document.getElementById('email').value;
  if (email == "") {
      document.querySelector('.status').innerHTML = "Email cannot be empty";
      return false;
  } else {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(!re.test(email)){
          document.querySelector('.status').innerHTML = "Email format invalid";
          return false;
      }
  }
  var subject =  document.getElementById('subject').value;
  if (subject == "") {
      document.querySelector('.status').innerHTML = "Subject cannot be empty";
      return false;
  }
  var message =  document.getElementById('message').value;
  if (message == "") {
      document.querySelector('.status').innerHTML = "Message cannot be empty";
      return false;
  }
  document.querySelector('.status').innerHTML = "Sending...";
}
formData = {
  'name': $('input[name=name]').val(),
  'email': $('input[name=email]').val(),
  'subject': $('input[name=subject]').val(),
  'message': $('textarea[name=message]').val()
};


$.ajax({
  url: "mail.php",
  type: "POST",
  data: formData,
  success: function (data, textStatus, jqXHR) {

    $('#status').text(data.message);
    if (data.code) //If mail was sent successfully, reset the form.
      $('#contact-form').closest('form').find("input[type=text], textarea").val("");
  },
  error: function (jqXHR, textStatus, errorThrown) {
    $('#status').text(jqXHR);
  }
});
</script>
</body>
<footer class="bg-light text-center text-lg-start fixed-bottom">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="https://au11no.com/">au11no.com</a>
  </div>
  <!-- Copyright -->
</footer>
</html>
