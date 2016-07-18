<?php
echo
'<nav class="navbar navbar-inverse navbar-fixed-top ">
    <div class="navbar-header navbar-right">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
        </button>
        <p class="navbar-inverse navbar-brand">EuroSOI - ULIS 2017</p>
    </div>

    <div class="collapse navbar-collapse " id="myNavbar">
        <ul class="nav navbar-nav">
            <li class=""><a href="index.php">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Information<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Call for Papers</a></li>
                    <li><a href="">Important Dates</a></li>
                    <li><a href="">Plenary Talks</a></li>
                    <li><a href="#">Conference Program</a></li>
                    <li><a href="">Social events</a></li>
                    <li><a href="">Committee</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Participate<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Paper Submission</a></li>
                    <li><a href="#">Registration</a></li>
                    <li><a href="sinanoaward.php">SINANO Award</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Venue<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="venue.php">Venue</a></li>
                    <li><a href="#">Accommodation</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">About Athens</a></li>
                </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>    
</nav>';
?>