   </div>
    <script src="public/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="public/vendor/metisMenu/metisMenu.min.js"></script>
     <!-- Morris Charts JavaScript -->
    <script src="public/vendor/raphael/raphael.min.js"></script>
   <!--  <script src="public/vendor/morrisjs/morris.min.js"></script>
    <script src="public/data/morris-data.js"></script> -->

    <!-- DataTables JavaScript -->
   <!--  <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
 -->
    <!-- Custom Theme JavaScript -->
    <script src="public/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

     <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
     <script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="public/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="public/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="public/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="public/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="public/dist/js/sb-admin-2.js"></script>
     <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });

        $('#dataTables-example').on('click', '.delete', function(e){
        
            e.preventDefault();
            // confirm("Bạn có muốn xóa ?")
            var url = $(this).attr("href");
            if (confirm("Bạn có muốn xóa ?")) {
                window.location.href=url;
            }
            
        });
    
    });
    </script>

   <script type="text/javascript">
        $(function(){
            setTimeout(function(){
                $('.alert-success').hide();
            },2000);
            setTimeout(function(){
                $('.alert-danger').hide();
            },2000);
        });
    </script>

   

</body>

</html>
