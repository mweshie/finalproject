<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fitness Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" integrity="sha512-Oy+sz5W86PK0ZIkawrG0iv7XwWhYecM3exvUtMKNJMekGFJtVAhibhRPTpmyTj8+lJCkmWfnpxKgT2OopquBHA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
 <!...................header.........................>
 <section id="Header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
           <a class="navbar-brand" href="#"><img src="Images/icon.jpg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color: deepskyblue">
               <span class="navbar-toggler-icon"></span>
               <!-- //commented out is the font awesome bar icon-->
               <!-- <i class="fas fa-bars"></i>-->
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link active" aria-current="page" href="#Header" style="color: #0000bf">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About" style="color: #0000bf">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" style="color: #0000bf">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials" style="color: #0000bf">TESTIMONIALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#workouts" style="color: #0000bf">WORKOUTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#subscription" style="color: #0000bf">CHARGES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact_us" style="color: #0000bf">CONTACT US</a>
                    </li>
                </ul>
            </div>
<?php
if (isset($_SESSION['account'])) {
?>
<button type="button" class="me-3 btn btn-sm btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-plus"></i> Account</button>
<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu2">
    <li><a href="#" class="dropdown-item" style="<?php echo $_SESSION['account']['color']; ?>"><i class="fa fa-star"> <span style="text-transform: capitalize;"><?php echo $_SESSION['account']['active']; ?></span></i></a></li>
    <li><button class="dropdown-item" type="button"><?php echo $_SESSION['account']['fname']; ?> <?php echo $_SESSION['account']['sname']; ?> <?php echo $_SESSION['account']['lname']; ?></button></li>
    <li><button class="dropdown-item" type="button"><?php echo $_SESSION['account']['email']; ?></button></li>
    <li><a href="logout.php"><button class="dropdown-item" type="button">Logout</button></a></li>
  </ul>
<?php
}
else{
?>
<button type="button" class="me-3 btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#Modal1"><i class="fa fa-user-plus"></i> Register
</button>
<button type="button" class="me-3 btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#Modal2"><i class="fa fa-user"></i> Login
</button>
<?php
}
?>
        </div>
    </nav>
</section>
<!--------------Welcome text------------->

<section id="welcome">
    <div class="container">
        <div class="welcome text-center">
            <a href="#About"><button type="button" class="btn home-btn">click me</button></a>
            <h1> THIS IS THE HOME OF FITNESS</h1>
            <p style="color: indigo">All what you need to get fit is here in our gym. Come all let us burn down the calories together</p>
            

        </div>
    </div>

</section>
<!-----------------------About Us------------------------->
<section id="About">
    <div class="container">
        <div class="row">
          <div class="col-md-6 text-center">
             <img src="Images/pic%205.jpg" style="width: 500px" class="image-fluid">
          </div>
            <div class="col-md-6 text-justify">
                <h3>Knowledge, Skill and Hardwork</h3>
                <p>All what you need to get fit is here in our gym. Come all let us burn down the calories together</p>
                <p>All what you need to get fit is here in our gym. Come all let us burn down the calories together</p>
            </div>
            <div class="col-md-6 text-justify">
                <h3>Work hard in silence</h3>
                <p>All what you need to get fit is here in our gym. Come all let us burn down the calories together</p>
                <p>All what you need to get fit is here in our gym. Come all let us burn down the calories together</p>
            </div>
            <div class="col-md-6">
                <!-----------embedd a youtube video here-->
                <div class="embed-responsive embed-responsive-16y9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/j6UyNq_TwGA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div  >
        </div>
    </div>
</section>
 <!-------------our subscriptions------------>
<!--<section id="subscription">
    <div class="container">
        <div style="height: 100px;"></div>
        <h4 class="text-center" style="color: darkblue"> OUR SUBSCRIPTIONS</h4>
        <p class="text-center" style="color: black"> We have three subscription plans for all our members depending on what you want and its very much flexible</p>
        <div class="row mb-4">
            <div class="col-md review m-1 justify-content-center">
                <h1 class="d-flex justify-content-center" style="color: #b08d57;"><i class="bi bi-star-fill"></i> Bronze</h1>
                <h3 class="d-flex justify-content-center">Daily Subscription</h3>
                <h4 style="text-align: center; color: darkgoldenrod"> 150 Kshs</h4>
                <p class="" style="color: black"> This gym offers the best training that you need to achieve your goals. All what you want is here to be achieved and keep your body fit. This gym has flexible time and you can workout any time you need to since its open 24hours and trainers are available all the time</p>
                <div class="d-flex justify-content-center">
                <form action="connect.php" method="post">
                <input type="text" name="id" value="<?php echo $_SESSION['account']['id'] ?>" hidden="">
                <input type="text" name="subc" value="bronze" hidden="">
                <input type="text" name="color" value="color: #b08d57;" hidden="">
                <button type="submit" name="sub" class="btn btn-warning">Subscribe</button>
            </form>
        </div>
            </div>
        <div class="col-md review m-1">
            <h1 class="d-flex justify-content-center" style="color: #aaa9ad;"><i class="bi bi-star-fill"></i> Silver</h1>
            <h3 class="d-flex justify-content-center">Monthly Subscription</h3>
            <h4 style="text-align: center; color: darkgoldenrod"> 3500 Kshs</h4>
            <p class="" style="color: black"> This gym offers the best training that you need to achieve your goals. All what you want is here to be achieved and keep your body fit. This gym has flexible time and you can workout any time you need to since its open 24hours and trainers are available all the time</p>
            <div class="d-flex justify-content-center">
                <form action="connect.php" method="post">
                <input type="text" name="id" value="<?php echo $_SESSION['account']['id'] ?>" hidden="">
                <input type="text" name="subc" value="silver" hidden="">
                <input type="text" name="color" value="color: #aaa9ad;" hidden="">
                <button type="submit" name="sub" class="btn btn-warning">Subscribe</button>
            </form>
        </div>

        </div>
        <div class="col-md review m-1">
            <h1 class="d-flex justify-content-center" style="color: #d4af37;"><i class="bi bi-star-fill"></i> Gold</h1>
            <h3 class="d-flex justify-content-center">Annual Subscription</h3>
            <h4 style="text-align: center; color: darkgoldenrod"> 40,000 Kshs</h4>
            <p class="" style="color: black"> This gym offers the best training that you need to achieve your goals. All what you want is here to be achieved and keep your body fit. This gym has flexible time and you can workout any time you need to since its open 24hours and trainers are available all the time</p>
            <div class="d-flex justify-content-center">
            <form action="connect.php" method="post">
                <input type="text" name="id" value="<?php echo $_SESSION['account']['id'] ?>" hidden="">
                <input type="text" name="subc" value="gold" hidden="">
                <input type="text" name="color" value="color: #d4af37;" hidden="">
                <button type="submit" name="sub" class="btn btn-warning">Subscribe</button>
            </form>
            
        </div>
            

        </div>
        </div>
    </div>
</section>-->
<!------------------------------services ---------------------------->
<section id="services">
    <div class="container">
        <h3 style="text-align: center">THESE ARE THE SERVICES THAT WE OFFER</h3><br>
        <div class="row" >
            <div class="col-md-3">
                <h4 style="font-size: larger;font-size: 15px;color: darkorange">FUNCTIONAL TRAINING AREA</h4>
                <img src="Images/pic%206.jpg" style="width: 268px;height: 180px" class="image-fluid">
                <p style="color: white;font-size: 13px;">Functional training has become one of the trendiest most effective workouts possible. For this reason we have added a new turf area in our gym allowing everyone to benefit from this type of training. This turf area is available for all of our members at all time and is never reserved. In addition, we have a selection plyometric boxes are available on the turf strip for all members to use. Turn your workout up a notch and try these out at the gym!These boxes can make any workout more intense</p>

            </div>
            <div class="col-md-3">
                <h4 style="font-size: larger;font-size: 15px; color: darkorange">SPINNING STUDIO</h4>
                <img src="Images/pic%209.jpg" style="width: 268px;height: 180px" class="image-fluid">
                <p style="color: white;font-size: 13px;">Whether you are a seasoned spinner, an avid road biker or just eager to test out a class for the first time, Klub20 spinning has you covered! Our spacious spin room is equipped with 40 spin bikes making it easy to cater to everyone’s indoor cycling needs. Our diverse class schedule offers 6am classes for the early morning  bird, noon classes to those looking to take advantage of an indoor ride on their lunch break, and those looking to let lose after a long day of work. The environment in a spin class is unbeatable! The instructors create a high-energy atmosphere.</p>
                
            </div>
            <div class="col-md-3">
                <h4 style="font-size: larger;font-size: 15px;color: darkorange">YOGA CLASSES</h4>
                <img src="Images/pioc%208.jpg" style="width: 268px;height: 180px" class="image-fluid">
                <p style="color: white;font-size: 13px;">At peshie's, we understand that life can get busy and tiring. That is why we have so many different classes available to you from sun rise to sun set. In the recent years, yoga has gained a huge following and has increased in popularity. Many people are starting to practice yoga and are seeing the great physical and mental benefits. Yoga practice is a great way to strengthen the bond between your mind and your body.It is also a great way to learn to appreciate your body and its abilities.Yoga is about creating the opportunity to focus on our breathing, and developing mindfulness.</p>
                
            </div>
            <div class="col-md-3">
                <h4 style="font-size: larger;font-size: 15px;color: darkorange">ZUMBA CLASSES</h4>
                <img src="Images/pic%207.jpg" style="width: 268px;height: 180px" class="image-fluid">
                <p style="color: white;font-size: 13px;">At peshie's gym, Join the party! Zumba is a dance based workout. The styles of dance include hip hop, samba, mambo , salsa and more. If you love to swing your hips and groove to the beat – Zumba is a must try. The instructors create a lively environment with great music and great peopleallowing you to burn calories without even realizing you are working out! This high calorie burning workout will help shed excess body fat and tone and tighten all the right places! The choreographed dance moves will help get your heart pumping and increase your endurance.Zumba all!.</p>
                
            </div>
        </div>
    </div>
</section>
 <!--------------------services 2----------------------------->
 <section id="services2" style="font-size: 10px; color: white !important;">
    <div class="container">
        <div class="row" style="font-size: 13px;">
            <div class="col-md-3" style="font-size: 13px;">
                <h4 style="font-size: larger; color: darkorange">OPEN 24 HOURS</h4>
                <img src="Images/pic%2017.jpg" style="width: 268px" class="image-fluid">
                <p style="color: white;font-size: 13px;">Being a 24/7 gym is one of our best amenities because we can offer our members unrestricted freedom of access from sun up to sun down and everywhere in between. You no longer have to worry about cramming in gym time before we close!  The flexibility of having access to the gym 24/7 makes it easier for your to plan your schedule and cut down on the excuses of not being able to go to the gym.Whether you are an early morning bird and or a night owl, you will find a comfortable workout environment that will fit your needs.Squeezing in a workout before closing, are now a past thing.</p>
                
            </div>
            <div class="col-md-3" style="font-size: 13px;">
                <h4 style="font-size: larger;color: darkorange">PRIVATE WOMEN ONLY STUDIO</h4>
                <img src="Images/pic%2018.jpeg" style="width: 268px" class="image-fluid">
                <p style="color: white;font-size: 13px;">we have a special section reserved and accessed by only women. This woman’s only section is a huge asset for us at Klub 20 because it is known that one of the barriers experienced by women includes discomfort or shyness when surrounded by many people working out. The women’s only gym can also be used as a transition into working out in the main gym. As many of our new members are first-time gym members, this area is a perfect place to familiarize yourself with what a gym is all about. Note that everyone has to start somewhere, and it is never too late to improve your health! K</p>
            </div>
            <div class="col-md-3" style="font-size: 13px;">
                <h4 style="font-size: larger;color: darkorange">AEROBICS CLASSES</h4>
                <img src="Images/pic%2019.jpg" style="width: 268px;height: 180px" class="image-fluid">
                <p style="color: white;font-size: 13px;">If you enjoy taking classes, then Klub 20 has got you covered. We have group fitness classes all week long and throughout the day. Aerobic classes are meant to make you move, sweat and get a little out of breath – it’s all part of the Klub 20 fun! We host a variety of different classes that cater to all kinds of interests.  Whether you want to focus more on muscular endurance, flexibility or simply improve your cardio-vascular endurance, we have many different classes for you to choose from. We have many classes that include the use of free weights, kettle balls, exercise balls, and </p>
            </div>
            <div class="col-md-3" style="font-size: 13px;">
                <h4 style="font-size: larger;color: darkorange">PERSONAL TRAINING</h4>
                <img src="Images/pic%2020.jpg" style="width: 300px;height: 180px" class="image-fluid">
                <p style="color: white;font-size: 13px;">At peshie' gym, our personal trainers are here to help all members seeking to make the most out of their workouts. A personal trainer can help you establish a timeline for realistic goals and break them down into smaller components. They are very friendly, knowledgeable and highly motivated in helping you achieve your fitness goals. On your first session, you can expect to share a little bit about yourself, your medical history and what your lifestyle consists of. Personal training is the best form of adapted training because your experience has been catered for you! You will have individualized training</p>
            </div>
        </div>
    </div>
</section>
<!--------------------------features------------------------->
 <section id="features">
     <div class="container">
         <h4 style="color: darkgoldenrod;text-align: center">OUR FEATURES</h4>
        <div class="row">
            <div class="col-md-6 ">
             <img src="Images/pic%2010.png" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="features-box">
                    <div class="features-left">
                        <i class="fa fa-certificate" aria-hidden="true" style="position: relative"></i>

                    </div>
                    <div class="features-right">
                        <h4 style="color: darkgoldenrod">Certified Trainers</h4>
                        <p style="color: #b08d57">Our Gym is has the best trainers that are certified by our country in providing guidelines on how to exercise and help us achieve that fit body we all what to have</p>

                    </div>
                </div>
                <div class="features-box">
                    <div class="features-left">
                        <i class="fa-solid fa-tbeat"></i>
                    </div>
                    <div class="features-right">
                        <h4 style="color: darkgoldenrod">Free Consultation</h4>
                        <p style="color: #b08d57">Our Gym offers free consultation to any member that has issues and needs them to be addressed</p>

                    </div>
                </div>
                <div class="features-box">
                    <div class="features-left">
                        <i class="fa-solid fa-tbeat"></i>
                    </div>
                    <div class="features-right">
                        <h4 style="color: darkgoldenrod">Flexible Time</h4>
                        <p style="color: #b08d57">This gym has flexible time and you can workout any time you need to since its open 24hours and trainers are available all the time</p>

                    </div>
                </div>
            </div>
        </div>
     </div>
 </section>
<!----------------Testimonials-------------->
<section id="testimonials">
    <div class="container">
        <h4 class="text-center" style="color: darkblue"> MEET OUR CLIENTS</h4>
        <p class="text-center" style="color: black"> This gym offers the best training that you need to achieve your goals.
        <div class="row mb-4">
            <div class="col-md review m-1">
                <img src="Images/pic%2013.jpg"style="width: 120px">
                <p class="" style="color: black"> This gym offers the best training that you need to achieve your goals. All what you want is here to be achieved and keep your body fit. This gym has flexible time and you can workout any time you need to since its open 24hours and trainers are available all the time</p>
            </div>
        <div class="col-md review m-1">
            <img src="Images/pic%2014.jpg"style="width: 120px">
            <p class="" style="color: black"> This gym offers the best training that you need to achieve your goals. All what you want is here to be achieved and keep your body fit. This gym has flexible time and you can workout any time you need to since its open 24hours and trainers are available all the time</p>
            

        </div>
        <div class="col-md review m-1">
            <img src="Images/pic%2015.jpg"style="width: 120px">
            <p class="" style="color: black"> This gym offers the best training that you need to achieve your goals. All what you want is here to be achieved and keep your body fit. This gym has flexible time and you can workout any time you need to since its open 24hours and trainers are available all the time</p>
            

        </div>
        </div>
    </div>
</section>

<!------------------------------------------Register here------------------->

<div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="Modal2Label" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" >
    <div class="modal-content" style="background-color: aquamarine;">
      <div class="modal-header">
        <h5 class="modal-title text-black" id="Modal2Label"><i class="fa fa-user-plus"></i> Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="login-box">
        <form action="connect.php" method="post">
            <label>Email</label>
            <input type="email" name="email" placeholder="" />
            <label>Password</label>
            <input type="password" name="password" placeholder="" />
            <label></label>
            <button type="submit" name="login" class="btn btn-success col-12" >Submit</button>
        </form>
    </div>
    <label class="text-black">
        Not have an account? <a data-bs-toggle="modal" data-bs-target="#Modal1" class="text-blue">Sign Up Here</a>
    </label>
      </div>
  </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="Modal1Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" >
    <div class="modal-content" style="background-color: aquamarine;">
      <div class="modal-header">
        <h5 class="modal-title text-black" id="Modal1Label"><i class="fa fa-user-plus"></i> Sign Up to join the Gym</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="connect.php" method="post">
        <div class="row">
            <div class="col-md">
            <label>First Name</label>
            <input type="text" required="" name="fname" placeholder="" />
            <label>Second Name</label>
            <input type="text"  required="" name="sname" placeholder="" />
            <label>Last Name</label>
            <input type="text"  required="" name="lname" placeholder="" />
            <label>Phone Number</label>
            <input type="tel"  required="" name="phone" placeholder="" />
        </div>
        <div class="col-md">
            <label>Email</label>
            <input type="email"  required="" name="email" placeholder="" />
            <label>Password</label>
            <input type="password"  required="" name="password" placeholder="" />
            <label>Confirm Password</label>
            <input type="password"  required="" name="cpassword" placeholder="" />
            
        </div>
    </div>
        
      </div>
      <div class="modal-footer d-flex justify-content-between">
        <label class="text-black">
        Already have an account? <a class="text-blue" data-bs-toggle="modal" data-bs-target="#Modal2">Login here</a></label>
         
        <button type="submit" name="sign_up" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
        <!--<p>
            By clicking the Sign Up button,you agree to our <br />
            <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
        </p>-->
    
    

<!---------------------------work outs----------------------->
<section id="workouts">
    <div class="container">
    <br>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="3"></li>
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="3"></li>
  </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active" style="height:500px; overflow: hidden;">
                <img class="w-100 h-100" src="Images/pic%2017.jpg" alt="Chania" >
                <div class="carousel-caption">
                    <h3 style="color: darkorange">legs workout</h3>
                    <p>This is how you can make your legs stronger.</p>
                </div>
            </div>

            <div class="carousel-item" style="height:500px;">
                <img class="w-100 h-100"src="Images/pic 10.png" alt="Chania" >
                <div class="carousel-caption">
                    <h3 style="color: darkorange">Hands workout</h3>
                    <p>This will make your hands stronger.</p>
                </div>
            </div>

            <div class="carousel-item" style="height:500px;">
                <img class="w-100 h-100"src="Images/pic 11.jpg" alt="Flower" >
                <div class="carousel-caption">
                    <h3 style="color: darkorange">chest workout</h3>
                    <p>The perfect way to make your chest large</p>.</p>
                </div>
            </div>

            <div class="carousel-item" style="height:500px;">
                <img class="w-100 h-100"src="Images/pic%2021.avif" alt="Flower" >
                <div class="carousel-caption">
                    <h3 style="color: darkorange">Zumba</h3>
                    <p>dance zumba with us.</p>
                </div>
            </div>
            <div class="carousel-item" style="height:500px;">
                <img class="w-100 h-100"src="Images/pic%2022.webp" alt="Flower" >
                <div class="carousel-caption">
                    <h3 style="color: darkorange">General Body Workout</h3>
                    <p>This is the workout you need for your whole body</p>
                </div>
            </div>

        </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
</div>

</section>
 <!-------------our subscriptions------------>
 <section id="subscription">
    <div class="container">
        <div style="height: 100px;"></div>
        <h4 class="text-center" style="color: darkblue"> OUR SUBSCRIPTIONS</h4>
        <p class="text-center" style="color: black"> We have three subscription plans for all our members depending on what you want and its very much flexible</p>
        <div class="row mb-4">
            <div class="col-md review m-1 justify-content-center">
                <h1 class="d-flex justify-content-center" style="color: #b08d57;"><i class="bi bi-star-fill"></i> Bronze</h1>
                <h3 class="d-flex justify-content-center">Daily Subscription</h3>
                <h4 style="text-align: center; color: darkgoldenrod"> 150 Kshs</h4>
                <p class="" style="color: black"> This gym offers the best training that you need to achieve your goals. All what you want is here to be achieved and keep your body fit. This gym has flexible time and you can workout any time you need to since its open 24hours and trainers are available all the time</p>
                <div class="d-flex justify-content-center">
                <form action="connect.php" method="post">
                <input type="text" name="id" value="<?php echo $_SESSION['account']['id'] ?>" hidden="">
                <input type="text" name="subc" value="bronze" hidden="">
                <input type="text" name="color" value="color: #b08d57;" hidden="">
                <button type="submit" name="sub" class="btn btn-warning">Subscribe</button>
            </form>
        </div>
            </div>
        <div class="col-md review m-1">
            <h1 class="d-flex justify-content-center" style="color: #aaa9ad;"><i class="bi bi-star-fill"></i> Silver</h1>
            <h3 class="d-flex justify-content-center">Monthly Subscription</h3>
            <h4 style="text-align: center; color: darkgoldenrod"> 3500 Kshs</h4>
            <p class="" style="color: black"> This gym offers the best training that you need to achieve your goals. All what you want is here to be achieved and keep your body fit. This gym has flexible time and you can workout any time you need to since its open 24hours and trainers are available all the time</p>
            <div class="d-flex justify-content-center">
                <form action="connect.php" method="post">
                <input type="text" name="id" value="<?php echo $_SESSION['account']['id'] ?>" hidden="">
                <input type="text" name="subc" value="silver" hidden="">
                <input type="text" name="color" value="color: #aaa9ad;" hidden="">
                <button type="submit" name="sub" class="btn btn-warning">Subscribe</button>
            </form>
        </div>

        </div>
        <div class="col-md review m-1">
            <h1 class="d-flex justify-content-center" style="color: #d4af37;"><i class="bi bi-star-fill"></i> Gold</h1>
            <h3 class="d-flex justify-content-center">Annual Subscription</h3>
            <h4 style="text-align: center; color: darkgoldenrod"> 40,000 Kshs</h4>
            <p class="" style="color: black"> This gym offers the best training that you need to achieve your goals. All what you want is here to be achieved and keep your body fit. This gym has flexible time and you can workout any time you need to since its open 24hours and trainers are available all the time</p>
            <div class="d-flex justify-content-center">
            <form action="connect.php" method="post">
                <input type="text" name="id" value="<?php echo $_SESSION['account']['id'] ?>" hidden="">
                <input type="text" name="subc" value="gold" hidden="">
                <input type="text" name="color" value="color: #d4af37;" hidden="">
                <button type="submit" name="sub" class="btn btn-warning">Subscribe</button>
            </form>

        </div>


        </div>
        </div>
    </div>
</section>
<!--------------------------Contact Us---------------------------------->
<section class="container" id="contact_us">
    <div class="container">
        <div class="row">
        <div class="col-6 contact text-center text-white">
            <h3> You can contact us here</h3> 
            <form action="connect.php" method="post">
            <?php if (isset($_SESSION['account'])) {
            ?>
                <h6><?php echo $_SESSION['account']['fname']; ?> <?php echo $_SESSION['account']['sname']; ?> <?php echo $_SESSION['account']['lname']; ?></h6>
                <h6 ><?php echo $_SESSION['account']['email']; ?></h6>
            <input type="text" name="id" hidden="" value="<?php echo $_SESSION['account']['id']; ?>">
            <input type="text" name="name" hidden="" value="<?php echo $_SESSION['account']['fname']; ?> <?php echo $_SESSION['account']['sname']; ?> <?php echo $_SESSION['account']['lname']; ?>">
            <input type="text" name="email" hidden="" value="<?php echo $_SESSION['account']['email']; ?>">
            <div class="input-group">
                <textarea  name="message" rows="8" class="form-control" placeholder="Your message"></textarea>
            </div>
            <button type="submit" name="contact_" class=" input-group  btn-warning btn">Submit</button>
            <?php
            } else{?>
            <div class="input-group">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="input-group">
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="input-group">
                <textarea  name="message" rows="6" class="form-control" placeholder="Your message"></textarea>
            </div>
                <button type="submit" name="contact_" class=" input-group  btn-warning btn">Submit</button>
            <?php
        }?>
            </form>
        </div>
        <div class="col-6 row">
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63821.25130607436!2d36.88070473841894!3d-1.2764758116493515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f15a4ebd3587f%3A0x54082ac8c3e9f96e!2sSkymax%20gym%20and%20fitness%20centre!5e0!3m2!1sen!2ske!4v1646160170073!5m2!1sen!2ske" width="550" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    </div>
</section>
<section>
<div class="">
    <div class="fs-5 bg-warning p-2 text-white d-flex justify-content-between">
        <h class="text-black"> emobilis netscape evening class</h>
        <h class="text-black"> phone no: 078965432456</h>
        <h class="text-black">email address:info@gmail.com</h>
    </div>
</div>
</section>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>