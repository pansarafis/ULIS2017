<!DOCTYPE html>
<html lang="en">
<head>
    <title>EUROSOI - ULIS 2017 | Athens, 3-5 April 2017</title>
    <?php include 'header.php'?>
</head>
<body>

<div class="container">
    
    
    <?php include 'title.php'?>
    <?php include 'menu.php'?>
    
    <div class="main row">

        <div class="chipImg">
            <img  alt="background IC" src="images/chipgrey.png" />
        </div>

        <div class="col-sm-10 col-sm-push-2 mainContainer">
            <h2>Welcome!</h2>
            <p>A very warm welcome to the 3rd joined EUROSOI - ULIS 2017 Conference, here in Athens! This Conference aims at gathering together in an interactive forum all scientists and engineers working in the field of SOI technology and advanced nanoscale devices. One of the key objectives of the conference is to promote collaboration and partnership between different academia, research and industry players in the field. This year the joint EUROSOI-ULIS event will be hosted by the Institute of Nanoscience & Nanotechnology of NCSR “Demokritos” in Athens, Greece.</p>

            <h2>Call for Papers</h2> 
            <p>The organizing committee invites scientists and engineers working in the above fields to actively participate by submitting high quality papers. Original 2-page abstracts with illustrations will be accepted for review in pdf format. The accepted abstracts will be published in a Proceedings book with an ISBN. A 4-page follow-up paper delivered before April 3, 2017 will be published in IEEE Xplore Digital Library. The authors of the best papers will be invited to submit a longer version for publication in a special issue of Solid-State Electronics. A best paper award will be attributed to the best paper by the  SINANO institute.</p>

            <h2>Important Dates</h2>
            <p>Abstract Submission Deadline: <strike>January 20, 2017</strike> <b>January 29, 2017</b></p>
            <p>Conference Dates: <b>April 3-5, 2017</b></p>
            <p>Early registration: <b>February 10, 2017</b></p
            

            <h2>Topics include, but are not limited to :</h2>
            <div class="lista">
                <ul>
                    <li>Advanced SOI materials and wafers. Physical mechanisms and innovative SOI-like devices.</li>
                    <li>New channel materials for CMOS: strained Si, strained SOI, SiGe, GeOI, III-V and high mobility materials on insulator; carbon nanotubes; graphene and other two-dimensional materials.</li>
                    <li>Properties of ultra-thin films and buried oxides, defects, interface quality. Thin gate dielectrics: high-k materials for switches and memory. </li>
                    <li>Nanometer scale devices: technology, characterization techniques and evaluation metrics for high performance, low power, low standby power, high frequency and memory applications. </li>
                    <li>Alternative transistor architectures including FDSOI, DGSOI, FinFET, MuGFET, vertical MOSFET, Nanowires, FeFET and Tunnel FET, MEMS/NEMS, Beyond-CMOS nanoelectronic devices. </li>
                    <li>New functionalities in silicon-compatible nanostructures and innovative devices representing the More than Moore domain, nanoelectronic sensors, biosensor devices, energy harvesting devices, RF devices, imagers, etc.</li>
                    <li>CMOS scaling perspectives; device/circuit level performance evaluation; switches and memory scaling. Three-dimensional integration of devices and circuits, heterogeneous integration.</li>
                    <li>Transport phenomena, compact modeling, device simulation, front- and back-end process simulation.</li>
                    <li>Advanced test structures and characterization techniques, parameter extraction, reliability and variability assessment techniques for new materials and novel devices.</li>              
                </ul>
            </div>
        </div>

        <div class="leftColCotainer col-sm-2 col-sm-pull-10">
            <div class="newsContainer">
                <div class="header"> <p>News</p></div>
                <div id="animated" >
                    <dl>
                        <dt>Program Announced</dt>
                        <dd>The <b>Conference Program</b> has been announced. Find it <a href="program.php">here</a><br></dd>
                        <dt><br></dt>
                        <dt>Early Registration Deadline Extended</dt>
                        <dd>The deadline for the early registration has been extended to <b>February 15th, 2017</b>. Submit your abstract <a href="SubmitPaper.php">here</a><br></dd>
                        <dt><br></dt>
                        <dt>Abstract Submission Deadline</dt>
                        <dd>The deadline for the abstract submission has been extended to <b>January 29th, 2017</b>. Submit your abstract <a href="SubmitPaper.php">here</a><br></dd>
                        <dt><br></dt>
                        <dt>Registration</dt>
                        <dd>Registration is now open. Click <a href="registration.php">here</a> to register <br></dd>
                        <dt><br></dt>
                        <dt>Abstract Submission</dt>
                        <dd>Abstract submission is now open. Submit your abstract <a href="SubmitPaper.php">here</a><br></dd>
                        <dt><br></dt>
                        <dt>Updated Deadline</dt>
                        <dd>The deadline for Abstract submission has been updated. The new deadline is 20th January 2017<br></dd>
                        <dt><br></dt>
                        <dt>1st Announcement</dt>
                        <dd>The 1st announcement of the EUROSOI-ULIS 2017 conference is released. Download <a href="files/1st_Announcement_EUROSOI_ULIS_2017.pdf">here</a><br></dd>
                    </dl>
                 </div>
            </div>

            <div class="newsletter">
                <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#newsletterModal">Subscribe to newsletter!</button>
            </div>

            <div class="newsletter">
                <a type="button" class="btn btn-block btn-success" href="registration.php">Register Now!</a>
            </div>

            <div class="sponsorsContainer">
                <div class="sponsorHeader"><p>Sponsors</p></div> 
                <div class="sponsorlogo">
                    <a href="http://www.demokritos.gr"><img class="img-thumbnail" src="images/demokritos_thumb.png"></a>
                </div>
                <div class="sponsorlogo">
                    <a href="http://inn.demokritos.gr"><img class="img-thumbnail" src="images/inn.png"></a>
                </div>
                <div class="sponsorlogo">
                    <a href="http://www.sinano.eu/"><img class="img-thumbnail" src="images/sinano_thumb.png"></a>
                </div>
                <div class="sponsorlogo">
                    <a href="http://eds.ieee.org/"><img class="img-thumbnail" src="images/ieee_eds_thumb.png"></a>
                </div>
            </div>
        
    </div>
    
    <div class="footer row">
       
        <p>Copyright EuroSOI-ULIS 2017</p>
      
        
    </div>
</div>
    

<!--Newsletter Modal-->
<div class="modal fade" id="newsletterModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Newsletter</h4>
      </div>
      <div class="modal-body">
        <p>Newsletter services will be available soon!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>
