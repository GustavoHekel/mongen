<!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/jquery.min.js")}}"></script>
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/jquery-ui.min.js")}}"></script>
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/bootstrap.min.js")}}"></script>
<script src="https://unpkg.com/vue/dist/vue.js"></script>

<!-- Defaults y funciones -->
<script src="{{ asset("dist/js/mongen.js")}}"></script>

<!--  Forms Validations Plugin -->
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/jquery.validate.min.js")}}"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/moment.min.js")}}"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/bootstrap-datetimepicker.js")}}"></script>

<!--  Select Picker Plugin -->
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/bootstrap-selectpicker.js")}}"></script>

<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/bootstrap-checkbox-radio-switch-tags.js")}}"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset("dist/bower_components/iCheck/icheck.js")}}"></script>

<!--  Charts Plugin -->
<!-- <script src="../assets/js/chartist.min.js"></script> -->

<!--  Notifications Plugin    -->
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/bootstrap-notify.js")}}"></script>

<!-- Sweet Alert 2 plugin -->
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/sweetalert2.js")}}"></script>

<!-- Toastr -->
<script src="{{ asset("dist/bower_components/toastr/toastr.js")}}"></script>

<!-- Vector Map plugin -->
<!-- <script src="../assets/js/jquery-jvectormap.js"></script> -->

<!--  Google Maps Plugin    -->
<!-- <script src="https://maps.googleapis.com/maps/api/js"></script> -->

<!-- Wizard Plugin    -->
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/jquery.bootstrap.wizard.min.js")}}"></script>

<!--  Bootstrap Table Plugin    -->
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/bootstrap-table.js")}}"></script>

<!--  Datatable Plugin    -->
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/jquery.datatables.js")}}"></script>

<!--  Full Calendar Plugin    -->
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/fullcalendar.min.js")}}"></script>

<!-- Light Bootstrap Dashboard Core javascript and methods -->
<script src="{{ asset("dist/plugins/light_bootstrap_pro/js/light-bootstrap-dashboard.js")}}"></script>

<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<!-- <script src="dist/plugins/light_bootstrap_pro/js/demo.js"></script> -->

<!-- Seteo de directivas -->
<script type="text/javascript">

 	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

 	$(document).on({
        ajaxStart: function() { $('body').addClass("loading"); },
        ajaxStop: function() { $('body').removeClass("loading"); }
    });
</script>
