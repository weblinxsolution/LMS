<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
    </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->
</div>
<!--**********************************
        Main wrapper end
    ***********************************-->
<!--**********************************
        Scripts
    ***********************************-->

<script>
    $('.multidrp').click(function () {
        $(this).next().slideToggle();
    })
    $('.report-filter').change(function() {
        var filter = $(this).val();

        var teacher = '<label>Teacher</label><select id="inputState" class="form-control"><option selected="selected">Choose...</option><option>Option 1</option><option>Option 2</option><option>Option 3</option></select>';
        var student = '<label>Student</label><select id="inputState" class="form-control"><option selected="selected">Choose...</option><option>Option 1</option><option>Option 2</option><option>Option 3</option></select>';
        if (filter == 'teacher') {
            $('#set_role').html(teacher)
        } else {
            $('#set_role').html(student)
        }
    })
    $('.checkall').change(function(){
        var check = $('.checkall').prop('checked');
        if (check) {
            $('.checked_box').prop('checked',true);
        }else{
            $('.checked_box').prop('checked',false);
        }
    });
</script>

<script src="plugins/common/common.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/settings.js"></script>
<script src="js/gleek.js"></script>
<script src="js/styleSwitcher.js"></script>

<!-- Chartjs -->
<script src="./plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Circle progress -->
<script src="./plugins/circle-progress/circle-progress.min.js"></script>
<!-- Datamap -->
<script src="./plugins/d3v3/index.js"></script>
<script src="./plugins/topojson/topojson.min.js"></script>
<script src="./plugins/datamaps/datamaps.world.min.js"></script>
<!-- Morrisjs -->
<script src="./plugins/raphael/raphael.min.js"></script>
<script src="./plugins/morris/morris.min.js"></script>
<!-- Pignose Calender -->
<script src="./plugins/moment/moment.min.js"></script>
<script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
<!-- ChartistJS -->
<script src="./plugins/chartist/js/chartist.min.js"></script>
<script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

<!-- Data Table JS -->
<script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
<script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
<script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>



<script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>