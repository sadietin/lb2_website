<?php

if($_POST["message"]) {

mail("christasus@gmail.com", "Hello from [your name here]",

$_POST["insert your message here"]. "From: your@email.address");

}


?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css"><!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap_overrides.css" rel="stylesheet" type="text/css">
  <link href="css/styles.css" rel="stylesheet" type="text/css">

  <title>Contact Us</title>

  <style type="text/css">


* {box-sizing: border-box;}

  input[type=text], select, textarea {
    background-color: #e4e4e4;
    color: #666666;
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  
  input[type=submit] {
    background-color: #585acc;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  .containercontact {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
  </style>
</head>

<body>

  
  <div class="container-fluid">

  <div id="wrapper">

        <!--beginning of nav bar -->
        <nav class="navbar navbar-expand-xl navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand nav-link" id="cas" href="index.html">Christ As Us</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <!--nested dropdown "beginnings"-->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Beginnings</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">  
                  <a class="dropdown-item" href="luli_intro.html">Luli's Introduction </a>
                  <a class="dropdown-item" href="mighty_wind.html">The Coming Mighty Wind</a>
                  <a class="dropdown-item" href="bill_oberdorf.html">Bill Oberdorf's Letter</a> 
                </div> 
              </li>
              </ul><!--end of dropdown "beginnings"-->
    
              <!--nested dropdown "the real pentecost"-->
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  The Real Pentecost</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="pentecost.html">Progressing to Pentecost</a>  
                    <a class="dropdown-item" href="risen_in_us_GB.html">He Is Risen...<i>In Us</i></a>
                    <a class="dropdown-item" href="oberdorf_letter.html">Bill Oberdorf's Letter</a>
                </div> 
              </li>
              </ul>
              <!--end of dropdown "the real pentecost"-->
    
              <!--nested dropdown "influencers"-->
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Influencers</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">  
                    <a class="dropdown-item" href="n_grubb_pg.html">Norman Grubb</a>
                    <a class="dropdown-item" href="w_law_pg.html">William Law</a>
                    <a class="dropdown-item" href="j_boehme_pg.html">Jacob Boehme</a>
                    <a class="dropdown-item" href="w_lanyon_pg.html">Walter Lanyon</a>
                    <a class="dropdown-item" href="misc_writers_pg.html">Miscellaneous Writers</a>
                    <a class="dropdown-item" href="external_sites_pg.html">External Sites</a>
                </div> 
              </li>
              </ul>
              <!--end of dropdown "influencers"-->            
    
              <!--"2 simple links; Q & Responses and Contact Us"-->            
                <li class="nav-item">
                  <a class="nav-link" href="Q_responses.html">Letters</a>
                </li>
    
                <li class="nav-item">
                  <a class="nav-link-active" aria-current="page" href="contactusform.php">Contact Us</a>
                </li>
              </ul>
              <!--end of "Q & Responses and Contact Us links"--> 
    
            </div>
          </div>
      </nav>
      <!--end of nav--> 

<!--stone header image --> 
<section class="container py-0" style:"background-color:none;">
  <div class="row mb-0 py-0 row-col-2 align-items-center justify-content-center">
      <div class="col 3 float-start mb-3 align-center">
        <img src="images/stone_bluish2_lr.png" style="max-width:150px;" alt="crystal with cross">

           <h4 style="text-shadow: 1px 1px hsla(0,0%,0%,.60);"> With deep respect for our bonds in Christ and the Holy Spirit's revelation of Himself: "Christ in you."
        </h4>      
      </div>
      </section> <!-- close (header) container -->


      <!-- HERE's where the contact Us form begins -->

      <div class="container-fluid containercontact" >
     
        <h5>Contact Us</h5>

        <div class="container">
        <form method="post" action="subscriberform.php">

            <input type="text" id="fname" name="firstname" placeholder="Your name">
        
            <input type="text" id="lname" name="email" placeholder="Your email">
        
            <textarea id="subject" name="subject" placeholder="Your message" style="height:200px"></textarea>
        
            <input type="submit" value="Send">
          </form>
        </div><!-- for contact us form -->



</div>  <!-- for wrapper  -->
</div> <!-- for initial top container -->


<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
    </body>   
    </html>