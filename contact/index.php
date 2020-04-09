
<!DOCTYPE html>
<html>
<head>
<title>DSFA: Contact Us</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="../css/global.css">
<link rel="stylesheet" href="../css/slider.css">

<style type="text/css">
/* Style inputs */
input[type=text], select, textarea {
    font-family: 'Montserrat', Arial, Verdana, sans-serif!important;
    width:100%;
    font-size:2em;
    padding:24px;
    border:3px solid #ccc;
    margin-top:20px;
    margin-bottom:40px;
    resize: vertical;
    box-sizing: border-box;
}
label, .button {
    font-size:2em;
}

input[type=submit] {
    width:100%;
    margin:auto;
    cursor:pointer;
}
    
input[type=submit]:hover {
    
}
    
@media only screen and (min-width :1024px) {
input[type=text], select, textarea {
    font-size:1em;
    padding:12px;
    border:1px solid #ccc;
    margin-top:10px;
    margin-bottom:20px;
}
label, .button {
    font-size:1em;
}
}
</style>    

</head>
        
<body>
    
<div class="navbar">
    <div class="navbar-logo">
        <a href="http://dsfastudents.org/"><img src="../images/logo-color.png"></a>
    </div>
    <div>
        <div class="navbar-items">
            <div class="hamburger"><i class="fas fa-bars"></i></div>
            <div class="navbar-list">
            <a href="http://dsfastudents.org/profiles">Students</a>
            <a href="http://dsfastudents.org/projects">Projects</a>
            <a href="http://dsfastudents.org/visits">Visits</a>
            <a href="http://dsfastudents.org/about">About Us</a>
            <a href="http://dsfastudents.org/contact">Contact Us</a>
            </div>
        </div>
    </div>
</div>

<!-- HERO -->

<section class="hero" style="height:60%;background-image:url(images/hero.jpg);background-position: 50% 100%;">
    <div class="overlay"></div>
    <div class="txt-white abs-centered container-txt">
        <h1>Digital Skills For All</h1>
        <h2>Digital Skills For All is our initiative to provide underserved youth ages 14-24 with the Computer Science skills they need to succeed in entry level technology job opportunities in the Seattle area.</h2>
    </div>
</section>

<section class="bg-white spacing-section">
    <div class="container-txt">
        <form action="mailto:andrew@computingforall.org">
            <label for="fname">Name</label>
            <input type="text" id="fname" name="name" placeholder="Your Name">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject">
            <label for="body">Body</label>
            <textarea id="body" name="body" placeholder="Enter Message" style="height:200px"></textarea>
            <input type="submit" value="Send" class="button btn-blue">
        </form>
    </div>
</section>
    
<section class="bg-blue spacing-section">
    <div class="container-txt centered txt-white">
        <h1>Preparing Future Industry Professionals</h1>
        <p>We want to prepare the next generation of technology leaders by creating pathways for students to thrive in technology and innovation. DSFA currently offers a small stipend to students at the end of each eight-week training to encourage and support their participation as well as assist with any economic barriers to their attendance.</p>
    </div>
</section>
    
<section class="bg-green spacing-section">
    <div class="txt-white container-txt centered">
        <h1>Looking To Work With Us?</h1>
        <p>Are you interested in setting up an internship or job shadow opportunity with us, working directly with us in our education, donating help to our program, or would simply like to come share your knowledge with us? Then please go to our <a href="http://dsfastudents.org/contact">contact page</a> and send our administrators an email with your name and interest in our pilot program. We look forward to hearing from you!</p>
        <div class="button-padding"><a href="http://dsfastudents.org/contact" class="button btn-white">Contact Us</a></div>
    </div>
</section>
    
<section class="bg-black spacing-section">
    <div class="container-txt centered txt-white">
        <div class="spacing-txt">
            <h1>Where We Are Located</h1>
            <p>Our classroom is located at the Delridge Community Center at 4501 Delridge Way SW, Seattle, WA 98106.</p>
        </div>
        <div class="videoWrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2692.2332043272227!2d-122.3666568125683!3d47.563250878086514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549040525d7b6c61%3A0x5a277288d8a6c3e9!2s4501+Delridge+Way+SW%2C+Seattle%2C+WA+98106!5e0!3m2!1sen!2sus!4v1564691259154!5m2!1sen!2sus" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>
    
<footer>
	<div class="soc-icons-footer">
		<a href="https://www.facebook.com/youthdsfa/" target="_blank"><i class="fab fa-facebook-square"></i></a>
		<a href="https://www.instagram.com/dsfa.students/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
	</div>
	<div class="footer-legal"><i class="far fa-copyright"></i> copyright 2020 - Digital Skills For All</div>
</footer>
    
<script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="../js/slides.js"></script>

<script type="text/javascript">
    // You can also use "$(window).load(function() {"
    $(function () {
      $(".slider_imgs").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 1000,
		timeout: 4000,
        namespace: "large-btns"
      });

    });
</script>
    
</body>
    
</html>