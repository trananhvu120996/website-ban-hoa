<!-- javascripts -->
    <script src="{{url("/")}}/admin/js/jquery.js"></script>
	<script src="{{url("/")}}/admin/js/jquery-ui-1.10.4.min.js"></script>
    <script src="{{url("/")}}/admin/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="{{url("/")}}/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="{{url("/")}}/admin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="{{url("/")}}/admin/js/jquery.scrollTo.min.js"></script>
    <script src="{{url("/")}}/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="{{url("/")}}/admin/assets/jquery-knob/{{url("/")}}/admin/js/jquery.knob.js"></script>
    <script src="{{url("/")}}/admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="{{url("/")}}/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="{{url("/")}}/admin/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="{{url("/")}}/admin/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="{{url("/")}}/admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="{{url("/")}}/admin/js/calendar-custom.js"></script>
	<script src="{{url("/")}}/admin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="{{url("/")}}/admin/js/jquery.customSelect.min.js" ></script>
	<script src="{{url("/")}}/admin/assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="{{url("/")}}/admin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="{{url("/")}}/admin/js/sparkline-chart.js"></script>
    <script src="{{url("/")}}/admin/js/easy-pie-chart.js"></script>
	<script src="{{url("/")}}/admin/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="{{url("/")}}/admin/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{url("/")}}/admin/js/xcharts.min.js"></script>
	<script src="{{url("/")}}/admin/js/jquery.autosize.min.js"></script>
	<script src="{{url("/")}}/admin/js/jquery.placeholder.min.js"></script>
	<script src="{{url("/")}}/admin/js/gdp-data.js"></script>	
	<script src="{{url("/")}}/admin/js/morris.min.js"></script>
	<script src="{{url("/")}}/admin/js/sparklines.js"></script>	
	<script src="{{url("/")}}/admin/js/charts.js"></script>
	<script src="{{url("/")}}/admin/js/jquery.slimscroll.min.js"></script>

  <script src="{{url("/")}}/admin/js/jquery-1.12.4.js"></script>
  <script src="{{url("/")}}/admin/js/1.12.1/jquery-ui.js"></script>
  
  <script>
$( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  </body>
</html>
