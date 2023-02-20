
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>(H.R.M)CONTACT US</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <style>
        
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body,
input,
textarea {
  font-family: "Poppins", sans-serif;
}

.container {
  position: relative;
  width: 100%;
  min-height: 100vh;
  padding: 2rem;
  background-color: #12192c;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.form {
  width: 100%;
  max-width: 820px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  overflow: hidden;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.contact-form {
  background-color: orange;
  position: relative;
}



.contact-form:before {
  content: "";
  position: absolute;
  width: 26px;
  height: 26px;
  background-color: orange;
  transform: rotate(45deg);
  top: 50px;
  left: -13px;
}

form {
  padding: 2.3rem 2.2rem;
  z-index: 10;
  overflow: hidden;
  position: relative;
}

.title {
  color: #fff;
  font-weight: 500;
  font-size: 1.5rem;
  line-height: 1;
  margin-bottom: 0.7rem;
}

.input-container {
  position: relative;
  margin: 1rem 0;
}

.input {
  width: 100%;
  outline: none;
  border: 2px solid #fafafa;
  background: none;
  padding: 0.6rem 1.2rem;
  color: #fff;
  font-weight: 500;
  font-size: 0.95rem;
  letter-spacing: 0.5px;
  border-radius: 25px;
  transition: 0.3s;
}

textarea.input {
  padding: 0.8rem 1.2rem;
  min-height: 150px;
  border-radius: 22px;
  resize: none;
  overflow-y: auto;
}

.input-container label {
  position: absolute;
  top: 50%;
  left: 15px;
  transform: translateY(-50%);
  padding: 0 0.4rem;
  color: #fafafa;
  font-size: 0.9rem;
  font-weight: 400;
  pointer-events: none;
  z-index: 1000;
  transition: 0.5s;
}

.input-container.textarea label {
  top: 1rem;
  transform: translateY(0);
}

.btn {
  padding: 0.6rem 1.3rem;
  background-color: #fff;
  border: 2px solid #fafafa;
  font-size: 0.95rem;
  color: orange;
  line-height: 1;
  border-radius: 25px;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
  margin: 0;
}

.btn:hover {
  background-color: transparent;
  color: #fff;
}

.input-container span {
  position: absolute;
  top: 0;
  left: 25px;
  transform: translateY(-50%);
  font-size: 0.8rem;
  padding: 0 0.4rem;
  color: transparent;
  pointer-events: none;
  z-index: 500;
}

.input-container span:before,
.input-container span:after {
  content: "";
  position: absolute;
  width: 10%;
  opacity: 0;
  transition: 0.3s;
  height: 5px;
  background-color: orange;
  top: 50%;
  transform: translateY(-50%);
  border: orange 2px solid;
}

.input-container span:before {
  left: 50%;
}

.input-container span:after {
  right: 50%;
}

.input-container.focus label {
  top: 0;
  transform: translateY(-50%);
  left: 25px;
  font-size: 0.8rem;
}

.input-container.focus span:before,
.input-container.focus span:after {
  width: 50%;
  opacity: 1;
}

.contact-info {
  padding: 2.3rem 2.2rem;
  position: relative;
  background-color: #12192c;
  border: orange 2px solid;
}

.contact-info .title {
  color: orange;
}

.text {
  color: #fff;
  margin: 1.5rem 0 2rem 0;
}

.information {
  display: flex;
  color: #fff;
  margin: 0.7rem 0;
  align-items: center;
  font-size: 0.95rem;
}

.icon {
  width: 28px;
  margin-right: 0.7rem;
  color: orange;
}

.social-media {
  padding: 2rem 0 0 0;
  color: orange;
}

.social-media p {
  color: #fff;
}

.social-icons {
  display: flex;
  margin-top: 0.5rem;
}

.social-icons a {
  width: 35px;
  height: 35px;
  border-radius: 5px;
  background: linear-gradient(45deg, orange, red);
  color: #fff;
  text-align: center;
  line-height: 35px;
  margin-right: 0.5rem;
  transition: 0.3s;
}

.social-icons a:hover {
  transform: scale(1.05);
}






.square {
  position: absolute;
  height: 400px;
  top: 50%;
  left: 50%;
  transform: translate(181%, 11%);
  opacity: 0.2;
}

@media (max-width: 850px) {
  .form {
    grid-template-columns: 1fr;
  }

  .contact-info:before {
    bottom: initial;
    top: -75px;
    right: 65px;
    transform: scale(0.95);
  }

  .contact-form:before {
    top: -13px;
    left: initial;
    right: 70px;
  }

  .square {
    transform: translate(140%, 43%);
    height: 350px;
  }

  .big-circle {
    bottom: 75%;
    transform: scale(0.9) translate(-40%, 30%);
    right: 50%;
  }

  .text {
    margin: 1rem 0 1.5rem 0;
  }

  .social-media {
    padding: 1.5rem 0 0 0;
  }
}

@media (max-width: 480px) {
  .container {
    padding: 1.5rem;
  }

  .contact-info:before {
    display: none;
  }

  .square,
  .big-circle {
    display: none;
  }

  form,
  .contact-info {
    padding: 1.7rem 1.6rem;
  }

  .text,
  .information,
  .social-media p {
    font-size: 0.8rem;
  }

  .title {
    font-size: 1.15rem;
  }

  .social-icons a {
    width: 30px;
    height: 30px;
    line-height: 30px;
  }

  .icon {
    width: 23px;
  }

  .input {
    padding: 0.45rem 1.2rem;
  }

  .btn {
    padding: 0.45rem 1.2rem;
  }
}



.credit{
  text-align: center;
  color: #fff;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.credit a{
  text-decoration: none;
  color:#FBAB7E;
  font-weight: bold;
} 


        </style>
  </head>
  <body>
    <div class="container">
      
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch with Green Stream Software</h3>
          <p class="text">
            Green Stream Software is always here for trustworthly Employee and Customber.
            Enjoy with us..
          </p>

          <div class="info">
            <div class="information">
             
              <p>A902, Aangan Enclave, near by BAU Bunglows, Zadeshwar, Bharuch, Gujarat 392011</p>
            </div>
            <div class="information">
              
              <p>GreenStreamSoftware@gmail.com</p>
            </div>
            <div class="information">
              
              <p>+91 7041065488</p>
              
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/greenstreamtechnologies/">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/greenstreaminfo">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.instagram.com/greenstreamlive/?hl=en">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://in.linkedin.com/company/greensteaminfotech">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div><br>
            <div class="credit">Made with <span style="color:tomato">❤</span> by GreenStreamSoftware</a></div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" autocomplete="off" method="post">
            <h3 class="title">CONTACT US</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" placeholder="username">
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" placeholder="email" />
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" placeholder="phone"/>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" placeholder="message"></textarea>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
	  
    </div>
<div style="margin-top:0px;" class="copyrights">
	 <p>All Rights Reserved By Green Streem Software (H.R.M)© <?= date("Y") ?>	</p>
</div>
    <script src="script.js"></script>

</body>
</html>
<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrm_db";

 $username =  $_POST['username'];
 $email =  $_POST['email'];
 $phone =  $_POST['phone'];
 $message =  $_POST['message'];

 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact(username, email,phone,,message)
VALUES ('".$_POST['username']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['message']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>*/