<!DOCTYPE html>
<head>
  <title>Bapatla Engineering College</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
 .header {
	z-index: 99;
	position: sticky;
	top: 0;
}

.navbar-header {
	display: flex;
	justify-content: space-around;
	align-items: baseline;
	width: 100%;
	background-color: #fff;
}

.no1-pic {
	width: 250px;
	height: 125px;
}

.header-mid-section {
	display: flex;
}

.college-logo {
	margin-right: 40px;
	height: fit-content;
}

.college-logo-img {
	height: 145px;
	background-color: transparent;
	width: 120px;
	cursor: pointer;
}
.college-title1 {
	font-family: Poppins, sans-serif;
	font-weight: bolder;
	color: #0060b1;
	font-size: var(--desktop-heading-fontsize);
}

.college-autonomous {
	display: flex;
	justify-content: center;
	font-size: var(--desktop-bodytext-fontsize);
	color: #000;
	font-weight: normal;
	font-weight: bold;
}

.college-affiliation {
	display: flex;
	justify-content: center;
	color: #000;
 font-size: var(--desktop-bodytext-fontsize);
	font-weight:normal;
	font-weight:bold;
}

.header-mid-section-dates {
	display: flex;
	justify-content: space-between;
}

.college-estd {
	color: #000;
	font-weight: bold;
	font-size: var(--desktop-bodytext-fontsize);
}

.college-eamcet-code {
	color: #000;
	font-weight: bold;
	font-size: var(--desktop-bodytext-fontsize);
}

.naac-pic {
	width: 190px;
	height: 110px;
}
.left-navcontent{
  color: black;
  width: 500px;
  /* background-color:aliceblue; */
}
.Events{
  height:max-content;
  width:max-content
}
.card{
    border:none;
    position:relative;
    overflow:hidden;
    border-radius:8px;
    cursor:pointer;
}

.card:before{
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#E1BEE7;
    transform:scaleY(1);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:after{
    
    content:"";
    position:absolute;
    left:0;
    top:0;
    width:4px;
    height:100%;
    background-color:#8E24AA;
    transform:scaleY(0);
    transition:all 0.5s;
    transform-origin: bottom
}

.card:hover::after{
    transform:scaleY(1);
}
body{
overflow-x: hidden;
}

.fonts{
    font-size:11px;
}

.social-list{
    display:flex;
    list-style:none;
    justify-content:center;
    padding:0;
}

.social-list li{
    padding:10px;
    color:#8E24AA;
    font-size:19px;
}


.buttons button:nth-child(1){
       border:1px solid #8E24AA !important;
       color:#8E24AA;
       height:40px;
}

.buttons button:nth-child(1):hover{
       border:1px solid #8E24AA !important;
       color:#fff;
       height:40px;
       background-color:#8E24AA;
}

.buttons button:nth-child(2){
       border:1px solid #8E24AA !important;
       background-color:#8E24AA;
       color:#fff;
        height:40px;
}
.nav-lin:hover{
  transition: scale(1.1);  
}
.technical:hover{
  transform: scale(1.1);
}
.onstage:hover{
  transform: scale(1.1);
}
.offstage:hover{
  transform: scale(1.1);
}
.gaming:hover{
  transform: scale(1.1);
}
.latest:hover{
  transform: scale(1.1);
}
  </style>
</head>
<header class="header">
			<div class="navbar-header">
				<div class="number-one">
					<img
						alt="Number one college"
						class="no1-pic"
						src="../images/no1-pic.jpeg"
					/>
				</div>
				<div class="header-mid-section">
					<div class="college-logo">
						<img
							alt="College Logo"
							class="college-logo-img"
							src="../images/bec_logo.jpeg"
						/>
					</div>
					<div class="header-mid-section-info">
						<div class="college-title1">BAPATLA ENGINEERING COLLEGE</div>
						<div class="college-autonomous">(AUTONOMOUS)</div>
						<div class="college-affiliation">
							Affiliated to Acharaya Nagarajuna University, Guntur
						</div>
						<div class="header-mid-section-dates">
							<div class="college-estd">ESTD: 1981</div>
							<div class="college-eamcet-code">EAMCET CODE: BECB</div>
						</div>
					</div>
				</div>
				<div class="naac-grade">
					<img
						alt="NAAC Grade"
						class="naac-pic"
						src="../images/naac-pic.jpeg"
					/>
				</div>
			</div>
			<b><hr></b>
      <div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-address-card-o"></i>&nbsp;Events</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;Add Events</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-cloud-download" aria-hidden="true"></i>&nbsp;Download</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;Contant Info</a>
    </div>
  </div>
  <div class="left-navcontent">
  <div class="col-9">
    <div class="tab-content max-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
     
        <div class="text-center justify-content-md-center">
      <button type="button" class="btn btn-primary technical">Technical Events</button><br><br>
      <button type="button" class="btn btn-primary onstage">On Stage Events</button><br><br>
      <button type="button" class="btn btn-primary offstage">Off Stage Events</button><br><br>
      <button type="button" class="btn btn-primary gaming">Gaming &nbsp; Events</button><br><br>
      <button type="button" class="btn btn-primary center latest">&nbsp; Latest&nbsp Events</button><br><br>
      </div>

      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
	  <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Event ID</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Event Id">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Event Title</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Event title">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Event Venue</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Event Venue">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">No of Participants</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Event Participants">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
      <div>
	  <p class="font-weight-normal">Please Click here to <a href="http://localhost/becfest/students_data.php" class="fa fa-download">&nbsp;Download</a></p>
	  </div>
	  </div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
	  <div class="container">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                
                <div class="text-center">
                    <img src="https://i.imgur.com/bDLhJiP.jpg" width="100" class="rounded-circle">
                </div>
                
                <div class="text-center mt-3">
                    <span class="bg-secondary p-1 rounded text-white">Board Member</span>
                    <h5 class="mt-2 mb-0">Dr K V L N Acharayallu</h5>
                    <span>Associate Professor, Dept of Mathematics</span>
                    
                    <div class="px-4 mt-1">
                        <p class="fonts">Ct labore eti ut aliquip ex ea commodo consequat. </p>
                    
                    </div>
                    
                     <ul class="social-list">
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-dribbble"></i></li>
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                        <li><i class="fa fa-google"></i></li>
                    </ul>
                    
        </div>
    </div>
</div>
      </div>
      <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                
                <div class="text-center">
                    <img src="https://i.imgur.com/bDLhJiP.jpg" width="100" class="rounded-circle">
                </div>
                
                <div class="text-center mt-3">
                    <span class="bg-secondary p-1 rounded text-white">Board Member</span>
                    <h5 class="mt-2 mb-0">Dr K V L N Acharayallu</h5>
                    <span>Associate Professor, Dept of Mathematics</span>
                    
                    <div class="px-4 mt-1">
                        <p class="fonts">Ct labore eti ut aliquip ex ea commodo consequat. </p>
                    
                    </div>
                    
                     <ul class="social-list">
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-dribbble"></i></li>
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                        <li><i class="fa fa-google"></i></li>
                    </ul>

  </div>
</div>
		</header>