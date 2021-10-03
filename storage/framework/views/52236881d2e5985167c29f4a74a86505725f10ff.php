<div class="sidebar-overlay" data-reff=""></div>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script> 
<script type="text/javascript" src="assets/plugins/light-gallery/js/lightgallery-all.min.js"></script>
<script type="text/javascript" src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
<script type="text/javascript" src="assets/js/select2.min.js"></script>
<script type="text/javascript" src="assets/js/tagsinput.js"></script>
<script type="text/javascript" src="assets/js/moment.min.js"></script>
<script type="text/javascript" src="assets/js/fullcalendar.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.fullcalendar.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="assets/js/Chart.bundle.js"></script>
<script type="text/javascript" src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/plugins/datatables/datatables.min.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript">
			$(function () {
			    $('#datetimepicker3').datetimepicker({
			        format: 'LT'
			    });
			    $('#datetimepicker4').datetimepicker({
			        format: 'LT'
			    });
			});
		</script>
		<script>
			$(document).ready(function() {
			  $('#example').DataTable();
			} );
		</script>
<?php if(Route::is(['pagee'])): ?>
<script type="text/javascript" src="assets/js/chart.js"></script>
<?php endif; ?><?php /**PATH /var/www/html/easy-laravel/resources/views/layout/partials/footer-scripts.blade.php ENDPATH**/ ?>