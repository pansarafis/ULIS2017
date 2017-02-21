
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration | EUROSOI - ULIS 2017</title>
    <?php include 'header.php'?>
</head>
<body>

<div class="container">
    
    
    <?php include 'title.php'?>
    <?php include 'menu.php'?>
 

    <div class="main row mainContainer">

        <div class="chipImg">
            <img alt="background IC" src="images/chipgrey.png" />
        </div>
        
        
        
        
        <div class="col-sm-12">
            <button type="button" class="btn btn-block btn-success btn-lg" data-toggle="modal" data-target="#registrationModal">Late Registration is now Open!</button>
            <br>
        </div>
        
        <div class="col-sm-6 mainContainer">
            <h3>Registration</h3>
            <p>Conference fee includes: </p>
                <ul>
                    <li>Conference material</li>
                    <li>A USB memory stick with the Conference Proceedings</li>
                    <li>Coffee breaks and lunches at the Conference Center</li>
                    <li>Welcome Reception</li>
                    <li>Gala Dinner</li>
                </ul>
            <p>Accompanying person fee includes: </p>
            <ul>
                <li>Welcome Reception</li>
                <li>Gala Dinner</li>
            </ul>
            
            <h3>Early Registration</h3>
            <p>Reduced fees for early registrants will be available up to <b>February 15, 2017</b></p>
        </div>
        <div class="col-sm-6" style="background-color: #f5f5f5">
            <h3>Registration Fees</h3>
            The registration fees are the following: 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td></td><td>Early <br><i>(up to 15/2/2017)</i></td><td>Regular <br><i>(from 16/2/2017)</i></td>	
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Students*</td><td>350 €</td><td>380 €</td>	
                    </tr>
                    <tr>
                        <td>Full Registration</td><td>450 €</td><td>480 €</td>	
                    </tr>
                    <tr>
                        <td>Accompanying person</td><td>100 €</td><td>130 €</td>	
                    </tr>
                </tbody>
            </table>
            <p class="text-right"><em>* The student's status must be certified by a copy of the student card</em></p>
        </div>    
           
       
    </div>
    
    <div class="footer row">
        <p>Copyright EuroSOI-ULIS 2017</p>
    </div>
</div>

<!--Registration Modal-->
        <div class="modal fade col-sm-12" id="registrationModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registration</h4>
              </div>
              <div class="modal-body">
                <iframe src = "https://www.eventora.com/en/embed/eurosoi-ulis-2017" style="max-width:500px" width="100%" height="380px" style="border:0" allowtransparency="true" scrolling="auto" vspace="0" hspace="0" vspace="0" hspace="0" frameborder="0"></iframe
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
    
    
</body>
</html>