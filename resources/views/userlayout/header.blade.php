<!--Modal  -->
<style>
  /* Customize the modal styles for color */

  .modal-content {
    background-color: #d04a4a;
    color: #ffffff;
  }

  .modal-header {
    border-bottom: 1px solid #ffffff;
  }

  .modal-footer {
    border-top: 1px solid #ffffff;
  }

  .btn-primary {
    background-color: #2ecc71;
    border-color: #2ecc71;
  }

  .btn-primary:hover {
    background-color: #27ae60;
    border-color: #27ae60;
  }

  .navbar-nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
  }

  .navbar-nav .nav-item {
    flex-grow: 1;
    text-align: center;
  }

  .icon {
    height: 130px;
  }

  .clgname {
    height: 115px;
  }

  
  @media only screen and (max-width: 600px) {
    .icon {
    height: 90px !important;
  }

  .clgname {
    height: 70px !important;
  }
  .navbar-nav {
    display: flex;
    justify-content: space-between;
    align-items: start !important;
    width: 100%;
  }
}
   
</style>
<div class="modal fade " id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="popupModalLabel">Admissions Are Going On Hurryy !!! </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>CONTACT US </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<!-- Top Arrow starts -->
<!-- <div class="up-arrow">
  <a href="#"><img style="height: 60px; width: 60px;" src="./icons/up-arrow.png" alt=""></a>
</div> -->
<!-- Top Arrow ends-->

<!-- Whatsapp icon code -->
<!-- <div class="whatsapp-icon">
    <a href="https://wa.me/+917660011179" target="_blank">
        <img src="./icons/whatsapp.png" alt="WhatsApp Icon">
    </a>
</div> -->
<!-- Whatsapp icon code -->

<!-- logo section starts -->
<div class="container  logo">
  <div class="container logo d-flex justify-content-end">
    <div class="">
      <a href="">
        <img class="icon me-2" src="./images/logo3.png" alt="logo">
      </a>
    </div>

    <div class="">
      <img id="logo" src="./Images/Bheema2.png" alt="" class="mt-3 clgname">
    </div>
  </div>
</div>
</div>
</div>
<!-- logo section ends-->



<!-- Navigation Bar Section -->


<br>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="display-flex;align-item-end"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">

        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLinkAbout" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            About Us
          </a>
          <ul class="dropdown-menu dropdown-content text-center  drop-width" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="./history.html">History</a></li>
            <li><a class="dropdown-item" href="chairman.html">Chairman</a></li>
            <li><a class="dropdown-item" href="./secretary.html">Secretary & Correspondent</a></li>
            <li><a class="dropdown-item" href="principal.html">Principal</a></li>
            <li><a class="dropdown-item" href="./vision.html">Vision & mission</a></li>
            <li><a class="dropdown-item" href="./comimittes.html">Committees/Cells</a></li>
            <li><a class="dropdown-item" href="./staffbook.html">Staff Handbook</a></li>
            <li><a class="dropdown-item" href="./studentbook.html">Student Handbook</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLinkDepartments" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Departments
          </a>
          <ul class="dropdown-menu dropdown-content text-center drop-width" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="./cse.html">Computer Science & Engineering</a></li>
            <li><a class="dropdown-item" href="./AIML.html">AI & ML</a></li>
            <li><a class="dropdown-item" href="./ece.html">Electronics & Communication Engineering</a></li>
            <li><a class="dropdown-item" href="./eee.html">Electrical & Electronics Engineering</a></li>
            <li><a class="dropdown-item" href="./mech.html">Mechanical Engineering</a></li>
            <li><a class="dropdown-item" href="./civil.html">Civil Engineering</a></li>
            <li><a class="dropdown-item" href="./administration.html">Administration</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLinkDisclosures" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Mandatory-Disclosures
          </a>
          <ul class="dropdown-menu text-center drop-width" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">AICTE</a></li>
            <!-- <li><a class="dropdown-item" href="#">UGC</a></li> -->
            <li><a class="dropdown-item" href="./jntua-section.html">JNTUA</a></li>
            <li><a class="dropdown-item" href="./grc.html">GRIEVANCE REDRESSAL <br>CELL(GRC)</a></li>
            <li><a class="dropdown-item" href="./mou.html">MOU'S</a></li>
            <li><a class="dropdown-item" href="nirf-grc.html">NIRF GRC</a></li>
            <li><a class="dropdown-item" href="./committes.html">Statutory Committees</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLinkPlacements" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Placements
          </a>
          <ul class="dropdown-menu dropdown-content text-center  drop-width" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="tpc.html">Training and Placement Cell</a></li>
            <li><a class="dropdown-item" href="trainingCalender.html">Training Calender</a></li>
            <li><a class="dropdown-item" href="./interpre.html">Interview Preparation</a></li>
            <li><a class="dropdown-item" href="./onlinePracticeLinks.html">Online Practice Links</a></li>
            <li><a class="dropdown-item" href="#">Our Recruiters</a></li>
            <li><a class="dropdown-item" href="./jobs.html">Jobs</a></li>
            <li><a class="dropdown-item" href="./contact.html">Contact Us</a></li>
          </ul>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="./alumini.html">Alumini</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="./contactUs.html">Contact Us</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="./gallery.html">Gallery</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="./rti.html">RTI</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="./admissions.html">Admissions</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white " href="./ecap/html">ECAP</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="./naac.html"> NAAC</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="./webmail.html"> @Webmail</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<!-- Navbar Ends -->



<!-- Principal Section Starts -->
<br>
<div class="title">
  <a href="#">Home</a> /
  <a href="#">Principal Desk</a>
</div>
<div class="container">
  <div class="row">
  <h4 class="block-title mb-3 mt-2 text-center"><span>PRINCIPAL DESK</span></h4>
    <div class="col-lg-6 ol-xl-6 col-md-6 col-sm-12 mt-5">
      <img src="./Images/bitsprincipal.jpg" class="img-fluid">
      <h4
        style="text-align: center; font-size: 25px;font-family:'Times New Roman', Times, serif; padding: 0; color: #4779ad;"
        class="mt-2">Mr. G.S. SURENDRA BABU </h4>

    </div>

    <div class="col-lg-6 ol-xl-6 col-md-6 col-sm-12 mt-4">
      <p style="text-align: justify;" class="mt-3"><span style="color:#008080"><span style="font-size:20px"><span
              style="font-family:Times New Roman,Times,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINCIPAL advise the students to be committed deeply
              towards their chosen goal and they should never deviate. They should repeatedly visit the well-equipped
              and resource library. They must realize that books are ever burning lamps of accumulated wisdom. They must
              keep themselves away from all sorts of political activities and chaos. As the maxim goes,&rdquo; Youth is
              the best time education&rdquo;, they should realize the significance and the essence of their age. Because
              the last opportunity never returns. I advise them to focus their energies towards nothing but their goal
              only.</span></span></span></p>

    </div>


  </div>
</div>


<!-- <div class="col-sm-12" >
        <h4 class="block-title"><span>PRINCIPAL DESK</span></h4>
            <figure>   
            <img src="./Images/bitsprincipal.jpg">
            <figcaption style="text-align: center; font-size: 25px;font-family:'Times New Roman', Times, serif; padding: 0; color: #4779ad;">Mr. G.S. SURENDRA BABU </figcaption>
        </figure>
            <div style="text-align: justify;"><span style="color:#008080"><span style="font-size:20px"><span style="font-family:Times New Roman,Times,serif">PRINCIPAL advise the students to be committed deeply towards their chosen goal and they should never deviate. They should repeatedly visit the well-equipped and resource library. They must realize that books are ever burning lamps of accumulated wisdom. They must keep themselves away from all sorts of political activities and chaos. As the maxim goes,&rdquo; Youth is the best time education&rdquo;, they should realize the significance and the essence of their age. Because the last opportunity never returns. I advise them to focus their energies towards nothing but their goal only.</span></span></span></div>
               
        </div>
    </div>     -->