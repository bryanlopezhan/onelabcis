<style type="text/css">
.content-header {
    position: relative;
    padding: 0px 0px 0 0px;
}
table {
  text-align: center;
  position: relative;
  border-collapse: collapse; 
  background-color: #f6f6f6;
   width: 100%;
}/* Spacing */
td, th {
  border: 1px solid #fff;
  padding: 5px;
 

}
th {
  text-align: center;
  background: #fff;
  color: #000S;
  border-radius: 0;
  position: sticky;
  top: 0;
  padding: 10px;
}
.primary{
  background-color: #000000
}

tfoot > tr  {
  background: black;
  color: white;
}
tbody > tr:hover {
  background-color: #e1e1e1;
}


   .widget-user-header {
      padding-left: 20px !important;
   }
   
   .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    position: relative;
    min-height: 1px;
    padding-right: 7px;
    padding-left: 15px;


 
 

</style>
 
 <link rel="stylesheet" href="<?= BASE_ASSET; ?>admin-lte/plugins/morris/morris.css">
 
 
<section class="content-header">
    <!-- <h1>
        <?= cclang('dashboard') ?>
        <small>
            
        <?= cclang('control_panel') ?>
        </small>
    </h1>
    <ol class="breadcrumb">
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
        <div class="col-md-6"> 
          <!-- AREA CHART -->
          
		  <div class="box box-info">
            <div class="box-header">
              <!-- <h3 class="box-title">Y E R L Y&nbsp;&nbsp;&nbsp;R E P O R T</h3> -->

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><!-- <i class="fa fa-minus"></i> -->
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><!-- <i class="fa fa-times"></i>--></button>
              </div>
            </div>
			
			
			
            <div class="box-body chart-responsive">
              <div class=" " id=" " style="height: 280px;"> 
			  
			 <?php
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>Chemical Code</th><th>Near Expired Chemical</th><th>Date of Expiration</th> </tr>";

class TableRow1 extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid #fff;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dostlab";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT chemical_code, name_of_pure_chemical, date_of_expiration FROM inventory ORDER BY date_of_expiration LIMIT 10");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 
			  </div><br><br><br> <br>
            </div>
			
			
            <!-- /.box-body --> 
          </div>
		  
		  <div class="box box-primary">
            <div class="box-header ">
              <h3 class="box-title"> </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><!-- <i class="fa fa-minus"></i>-->
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><!-- <i class="fa fa-times"></i>--></button>
              </div>
            </div>
			
			
			
			
            <div class="box-body chart-responsive">
              <div class="chart" id="revenue-chart" style="height: 300px;"></div>
            </div><br>
          </div>
          
			
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6"> 
          <!-- LINE CHART --> 
			
			
			<div class="box box-danger">
           <div class="box-header">
              <!-- <h3 class="box-title">Y E R L Y&nbsp;&nbsp;&nbsp;R E P O R T</h3> -->

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><!-- <i class="fa fa-minus"></i> -->
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><!-- <i class="fa fa-times"></i>--></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class=" " id=" " style="height: 280px; position: relative;">
		<?php
echo "<table style='border: solid 1px #fff;'>";
 echo "<tr><th>Chemical Code</th><th>Expired Chemicals</th><th>Date of Expiration</th> </tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid #fff;'>" . parent::current().  "</td>"; 
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dostlab";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT chemical_code, name_of_pure_chemical, date_of_expiration FROM inventory ORDER BY date_of_expiration LIMIT 10;");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 
</div><br><br><br><br>
            </div>
            <!-- /.box-body --> 
          </div>
		  
		  
		  <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title"> </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><!-- <i class="fa fa-minus"></i>-->
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><!-- <i class="fa fa-times"></i>--></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
            </div>
            <!-- /.box-body --><br> 
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-success hidden">
            <div class="box-header with-border">
              <h3 class="box-title">C O N D E N S E D&nbsp;&nbsp;&nbsp;P H A S E S&nbsp;&nbsp;&nbsp;R E P O R T</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="bar-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
		
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
</section>
<!-- /.content -->

<script src="<?= BASE_ASSET; ?>admin-lte/plugins/raphael/raphael-min.js"></script>
<script src="<?= BASE_ASSET; ?>admin-lte/plugins/morris/morris.min.js"></script>
<script>
  $(function () {
    "use strict";

    // AREA CHART
    /* var data = [
  { year: '2018-00', value: 0 },
  { year: '2018-01', value: 0 },
  { year: '2018-02', value: 0 },
  { year: '2018-03', value: 0 },
  { year: '2018-04', value: 0 },
  { year: '2018-05', value: 0 },
  { year: '2018-06', value: 0 },
  { year: '2018-07', value: 0 },
  { year: '2018-08', value: 0 },
  { year: '2018-09', value: 0 },
  { year: '2018-10', value: 5 },
  { year: '2018-11', value: 10 }
  ];

var months = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];

var lineGraph = Morris.Area({
    element: 'revenue-chart',
    xkey: 'year',
    ykeys: ['value'],
    lineColors: ['#75a5c1'],
    hideHover: 'auto',
    labels: ['Sales'],
    data: data,
    resize: true,
    xLabelAngle: 60,
    parseTime: false,
    xLabelFormat: function (x) {
        return months[parseInt(x.label.slice(5))];
    }
});

$('svg').height(350); */


/*var area = new Morris.Area({
      element: 'revenue-chart',
      resize: true,
      data: [
        {y: '2022', total: 2666, item2: 2666},
        {y: '2023', total: 2778, item2: 2294},
        {y: '2024', total: 4912, item2: 1969},
        {y: '2025', total: 3767, item2: 3597},
        {y: '2026', total: 6810, item2: 1914},
        {y: '2027', total: 5670, item2: 4293},
        {y: '2028', total: 4820, item2: 3795},
        {y: '2029', total: 15073, item2: 5967},
        {y: '2030', total: 10687, item2: 4460},
        {y: '2031', total: 8432, item2: 5713}
      ],
      xkey: 'y',
      ykeys: ['total', 'item2'],
      labels: ['Total', 'Item 2'],
      lineColors: ['#a0d0e0', '#3c8dbc'],
      hideHover: 'auto'
    }); */

var area = new Morris.Area({
      element: 'revenue-chart',
      resize: true,
      data: [
        {y: '2022', total: <?= $this->db->like('date_registered','2022','after')->get('inventory')->num_rows(); ?>},
        {y: '2023', total: <?= $this->db->like('date_registered','2023','after')->get('inventory')->num_rows(); ?>},
        {y: '2024', total: <?= $this->db->like('date_registered','2024','after')->get('inventory')->num_rows(); ?>},
        {y: '2025', total: <?= $this->db->like('date_registered','2025','after')->get('inventory')->num_rows(); ?>},
        {y: '2026', total: <?= $this->db->like('date_registered','2026','after')->get('inventory')->num_rows(); ?>},
        {y: '2027', total: <?= $this->db->like('date_registered','2027','after')->get('inventory')->num_rows(); ?>},
        {y: '2028', total: <?= $this->db->like('date_registered','2028','after')->get('inventory')->num_rows(); ?>},
        {y: '2029', total: <?= $this->db->like('date_registered','2029','after')->get('inventory')->num_rows(); ?>},
        {y: '2030', total: <?= $this->db->like('date_registered','2030','after')->get('inventory')->num_rows(); ?>},
        {y: '2031', total: <?= $this->db->like('date_registered','2031','after')->get('inventory')->num_rows(); ?>}
      ],
      xkey: 'y',
      ykeys: ['total' ],
      labels: ['Total' ],
	gridTextColor: "#eaf2f5",
      lineColors: ['#a0d0e0', '#3c8dbc'],
      hideHover: 'auto'
    }); 




    // LINE CHART
   /* var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [
        {y: '2022', total: <?= $this->db->like('date_registered','2022','after')->get('inventory')->num_rows(); ?>},
        {y: '2023', total: <?= $this->db->like('date_registered','2023','after')->get('inventory')->num_rows(); ?>},
        {y: '2024', total: <?= $this->db->like('date_registered','2024','after')->get('inventory')->num_rows(); ?>},
        {y: '2025', total: <?= $this->db->like('date_registered','2025','after')->get('inventory')->num_rows(); ?>},
        {y: '2026', total: <?= $this->db->like('date_registered','2026','after')->get('inventory')->num_rows(); ?>},
        {y: '2027', total: <?= $this->db->like('date_registered','2027','after')->get('inventory')->num_rows(); ?>},
        {y: '2028', total: <?= $this->db->like('date_registered','2028','after')->get('inventory')->num_rows(); ?>},
        {y: '2029', total: <?= $this->db->like('date_registered','2029','after')->get('inventory')->num_rows(); ?>},
        {y: '2030', total: <?= $this->db->like('date_registered','2030','after')->get('inventory')->num_rows(); ?>},
        {y: '2031', total: <?= $this->db->like('date_registered','2031','after')->get('inventory')->num_rows(); ?>}
      ],
      xkey: 'y',
      ykeys: ['total'],
      labels: ['Total'],
      lineColors: ['#00c0ef'],
	  pointStrokeColors: ['#00c0ef'],
      hideHover: 'auto'
    });
 */
    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["#eaf2f5", "#a0d0e0", "#3c8dbc"], 
	  labelColor: "#eaf2f5",
		backgroundColor: 'rgba(0, 0, 0, 0)', 
      data: [
		{label: "Room 221", value: <?= $this->db->where('location','Room 221')->get('inventory')->num_rows(); ?>},
		{label: "Room 221A", value: <?= $this->db->where('location','Room 221A')->get('inventory')->num_rows(); ?>},
		{label: "Room 214A", value: <?= $this->db->where('location','Room 214A')->get('inventory')->num_rows(); ?>},

        /* {label: "Room 221", value: 12},
        {label: "Room 221A", value: 30},
        {label: "Room 214A", value: 20} */
      ],
      hideHover: 'auto'
    });

    //BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: '2022', a: <?= $this->db->like('state_of_chemical','Solid','after')->get('inventory')->num_rows(); ?>, b: <?= $this->db->like('state_of_chemical','Liquid','after')->get('inventory')->num_rows(); ?>},
        {y: '2023', a: <?= $this->db->like('state_of_chemical','Solid','after')->get('inventory')->num_rows(); ?>, b: <?= $this->db->like('state_of_chemical','Liquid','after')->get('inventory')->num_rows(); ?>},
        {y: '2024', a: 50, b: 40},
        {y: '2025', a: 75, b: 65},
        {y: '2026', a: 50, b: 40},
        {y: '2027', a: 75, b: 65},
        {y: '2028', a: 100, b: 90}
      ],
      barColors: ['#00a65a', '#f56954'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Solid', 'Liquid'],
      hideHover: 'auto'
    });
  });
</script>