<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home </title>
    <link rel="stylesheet" href="after-login.css">
</head>
<body>


    <div class="hero">
        <nav>
            <h2 class="logo"> Welcome </h2>
            <ul>
                <li><a target="_blank" href="../cms/prime.html">Prime Classes</a></li>
                <li><a target="_blank" href="../cms/About.html">About </a></li>
                <li><a target="_blank" href="../cms/course.html">Course</a></li>
            </ul>
            <img src="images/user.png" class="user-pic" onclick="toggleMenu()">

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="images/user.png">
                        <h3> Name </h3>
                    </div>
                    <hr>

                    <a href="#" class="sub-menu-link">
                        <img src="images/profile.png">
                        <p>Edit Profile</p>
                        <span> > </span>
                    </a>

                    <a href="#" class="sub-menu-link">
                        <img src="images/privacy.png">
                        <p>Privacy & Security</p>
                        <span> > </span>
                    </a>

                    <a href="#" class="sub-menu-link">
                        <img src="images/help.png">
                        <p>Help & Support</p>
                        <span> > </span>
                    </a>

                    <a href="../cms/logout.php" class="sub-menu-link">
                        <img src="images/logout.png">
                        <p>Logout</p>
                        <span> > </span>
                    </a>

                </div>
            </div>

        </nav>
        <div class="back-text">
        <h1>Coaching Center</h1>
        <p>Education is the most powerful weapon in the world</p>
    </div>
    </div>

    <script>
    let subMenu = document.getElementById("subMenu");
    
    function toggleMenu(){
        subMenu.classList.toggle("open-menu");
    }
</script>
      

    <!--Contact us-->
    <div class="contact">
      <div class="contact-title"> 
      <h1 id="Contact">Contact us</h1>
      </div>
      <div class="container">
        <div class="contact-info">
          <div class="box">
            <div class="icon"><img src="../cms/placeholder.png"></div>
              <div class="text">
                    <h2>Address</h2>
                    <p>Hirapur, near Golf ground <br>
                      Dhanbad,Jharkhand <br>
                      826001 </p>
            </div>
          </div>
          <div class="box">
            <div class="icon"><img src="../cms/gmail.png"></div>
              <div class="text">
                    <h2>E-mail</h2>
                    <p>randhirkumar4554@gmail.com
                    </p>
              </div>
          </div>
          <div class="box">
             <div class="icon"><img src="../cms/phone.png"></div>
                <div class="text">
                      <h2>Phone</h2>
                      <p>+91 76675 12556 <br>+91 92343 72770 <br>+91 80021 11171 </p>
                  </div>
          </div>
      </div>
      <div class="contact-form">
        <form>
          <h2>Send Message</h2>
          <div class="inputBox">
            <input type="text" name="" required="required">
            <span>Full Name</span>
          </div>
          <div class="inputBox">
            <input type="text" name="" required="required">
            <span>E-mail</span>
          </div>
          <div class="inputBox">
            <textarea required="required"></textarea>
            <span>Type your Message...</span>
          </div>
          <div class="inputBox">
            <input type="submit" name="" value="Send">

          </div>
        </form>
    </div>
          
  </body>
</html>
