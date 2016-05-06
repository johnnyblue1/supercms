

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>inc/js/vendor/jquery.sortelements.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>inc/js/vendor/jquery.bdt.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>inc/js/index.js" type="text/javascript"></script>

    <script>
        $(document).ready( function () {
            $('#bootstrap-table').bdt();
        });
    </script>

    <script>
      $(function() {
        $( "#datepicker" ).datepicker({dateFormat: "yy-mm-dd"});

        $( "#bootstrap-table" ).sortable({
            update: function( event, ui ) {
                var order = $(this).sortable( "toArray" );

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/pages/ajax",
                    data: { items : order },
                    success: function(msg)
                    {
                        $( "#text" ).html(msg);
                    }
                });
            },

            items: "tr",
            axis: "y"
        });
        $( "#bootstrap-table" ).disableSelection();
      });
    </script>


</body>

</html>
