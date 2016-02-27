<?php 
$this->db->select('*');
$this->db->from('tdat_salestargets');
$query=$this->db->get();
$result=$query->result_array();
//print_r($result);
?>

<style>
    .chart_bar  {
        height:450px;
    }
    
</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);
        google.charts.setOnLoadCallback(drawVisualization1);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Year', 'Year Plan','Year Actual', 'Month Plan','Month Actual'],
         <?php 
         foreach($result as $res):
         $year=$res['targetyear']; 
         $yplanVal=$res['yearplanvalue'];
         $mplanval=$res['monthplanvalue'];
         $yactvalue=$res['yearactvalue'];
         $mactval=$res['monthactvalue'];
         
         ?>
         ['<?php echo $year ?>',<?php echo $yplanVal  ?>,<?php echo $yactvalue ?>,<?php echo $mplanval  ?>,<?php echo $mactval ?>],

 <?php endforeach; ?>
      ]);

    var options = {
      title : 'Sales Target and Actual Sales Chart ( Amount )',
      vAxis: {title: 'Sales Amount'},
      hAxis: {title: 'Year'},
      seriesType: 'bars',
      series: {4: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
  
      function drawVisualization1() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
        ['Year', 'Year Plan','Year Actual', 'Month Plan','Month Actual'],
         <?php 
         foreach($result as $res):
         $year=$res['targetyear']; 
         
         $yplanQty=$res['yearplanqty'];
        
         $yactqty=$res['yearactqty'];
         $monthplanqty=$res['monthplanqty'];
         $monthactqty=$res['monthactqty'];
         
         ?>
         ['<?php echo $year ?>',<?php echo $yplanQty ?>, <?php echo $yactqty ?>,<?php echo $monthplanqty ?>, <?php echo $monthactqty ?> ],

 <?php endforeach; ?>
      ]);

    var options = {
      title : 'Sales Target and Actual Sales Chart ( Quantity )',
      vAxis: {title: 'Sales Quantity'},
      hAxis: {title: 'Year'},
      seriesType: 'bars',
      series: {4: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div1'));
    chart.draw(data, options);
  }
    </script>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                
                <div class="col-md-6"><div id="chart_div" class="chart_bar"></div></div>
                <div class="col-md-6"><div id="chart_div1" class="chart_bar"></div></div>

            </div>
        </div>
    </div>
</div>