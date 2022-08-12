<style>
 
.sidebar-mini.sidebar-collapse .content-wrapper, .sidebar-mini.sidebar-collapse .right-side, .sidebar-mini.sidebar-collapse .main-footer {
    margin-left: 44px !important;
    z-index: 840;
}

.bg-blue1, .callout.callout-info, .alert-info, .label-info, .modal-info .modal-body {
    background-color: #3c8dbc !important;
}


.fawhite {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #fff;
}


	.widget-user-header {
		padding-left: 20px !important;
	}
	
	.time { 
     
    color: #fff;
   
    width: 500px;
}
.hms {
    font-size: 30pt;
    font-weight: 600;
}
.ampm {
    font-size: 15pt;
	font-weight: 600;
}
.date {
    font-size: 11pt;
	font-weight: 1000;
}
.info-box {
    display: block;
    min-height: 90px;
    background: rgb(255 255 255 / 20%);
    width: 100%;
    box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
    border-radius: 2px;
    margin-bottom: 15px;
}

.box {
    position: relative;
    border-radius: 0px;
    background: rgb(255 255 255 / 20%);
    border-top: 0px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
	



	

</style>

<link rel="stylesheet" href="<?= BASE_ASSET; ?>admin-lte/plugins/morris/morris.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= BASE_ASSET; ?>/admin-lte/dist/css/AdminLTE.css">  -->

<section class="content-header">
	<!-- <h1>
		<?= cclang('dashboard') ?>
		<small>
		
		<?= cclang('control_panel') ?>
		</small>
	</h1>
	<ol class="breadcrum">
		<li>
			<a href="#">
				<i class="fa fa-dashboard">
				</i>
				<?= cclang('home') ?>
			</a>
		</li>
		<li class="active">
			<?= cclang('dashboard') ?>
		</li>
	</ol> -->
</section>

<section class="content">
	<div class="row">
		<?php cicool()->eventListen('dashboard_content_top'); ?>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box button" onlick="goUrl('administrator/rest')">
				<span class="info-box-icon bg-yellow">
					<i class="fa fa-flask">
					</i>
				</span>
				<div class="info-box-content">
					 
					<h4 style="font-weight: 800; color: #fff">TOTAL OF CHEMICALS</h4>
					<h4 style="font-size: 27px; color: #fff" class="info-box-number"><?= $this->db->get('inventory')->num_rows(); ?></h4>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box button" onclick="goUrl('administrator/inventory')">
				<span class="info-box-icon bg-blue1">
					<i class="fa fa-pencil-square-o fawhite">
					</i>
				</span>
				<div class="info-box-content">
					<span style="color: #fff; font-weight: 800; font-size: 19px; margin-top: 26px;" class="info-box-text"> 
					Inventory
					</span>
				</div>
			</div>
		</div>
		
		
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box button" onlick="goUrl('administrator/page')">
				<span class="info-box-icon bg-blue1 ">
					<i class="fa fa-clock-o fawhite">
					</i>
				</span>
				<div class="info-box-content"><div class="time">
         <span class="date"></span><br>
  <span class="hms"></span>
        <span class="ampm"></span>
        
       
      </div>
					 
				</div>
			</div>
		</div>
	
		<!-- <div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box button" onlick="goUrl('administrator/form')">
				<span class="info-box-icon bg-yellow">
					<i class="ion ion-android-list">
					</i>
				</span>
				<div class="info-box-content">
					<span class="info-box-text">
						<?= cclang('form_builder') ?>
					</span>
				</div>
			</div>
		</div> -->
		
		<?php include 'chart.php'; ?>
			<?php cicool()->eventListen('dashboard_content_bottom'); ?>
		
	</div>
</section>

<script>

 function updateTime() {
  var dateInfo = new Date();

  /* time */
  var hr,
    _min = (dateInfo.getMinutes() < 10) ? "0" + dateInfo.getMinutes() : dateInfo.getMinutes(),
    sec = (dateInfo.getSeconds() < 10) ? "0" + dateInfo.getSeconds() : dateInfo.getSeconds(),
    ampm = (dateInfo.getHours() >= 12) ? "PM" : "AM";

  // replace 0 with 12 at midnight, subtract 12 from hour if 13–23
  if (dateInfo.getHours() == 0) {
    hr = 12;
  } else if (dateInfo.getHours() > 12) {
    hr = dateInfo.getHours() - 12;
  } else {
    hr = dateInfo.getHours();
  }

  var currentTime = hr + ":" + _min + ":" + sec;

  // print time
  document.getElementsByClassName("hms")[0].innerHTML = currentTime;
  document.getElementsByClassName("ampm")[0].innerHTML = ampm;

  /* date */
  var dow = [
      "SUNDAY",
      "MONDAY",
      "TUESDAY",
      "WEDNESDAY",
      "THURSDAY",
      "FRIDAY",
      "SATURDAY"
    ],
    month = [
      "JANUARY",
      "FEBRUARY",
      "MARCH",
      "APRIL",
      "MAY",
      "JUNE",
      "JULY",
      "AUGUST",
      "SEPTEMBER",
      "OCTOBER",
      "NOVEMBER",
      "DECEMBER"
    ],
    day = dateInfo.getDate();

  // store date
  var currentDate = dow[dateInfo.getDay()] + ", " + month[dateInfo.getMonth()] + " " + day;

  document.getElementsByClassName("date")[0].innerHTML = currentDate;
};

// print time and date once, then update them every second
updateTime();
setInterval(function() {
  updateTime()
}, 1000);

</script>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			