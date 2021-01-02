{!! Html::script("Admin/vendor/jquery/jquery.min.js") !!}
{!! Html::script("Admin/vendor/bootstrap/js/bootstrap.min.js") !!}
{!! Html::script("Admin/vendor/select2/dist/js/select2.min.js") !!}
{!! Html::script("Admin/vendor/metisMenu/metisMenu.min.js") !!}
<!-- Morris Charts JavaScript -->
{!! Html::script("Admin/vendor/raphael/raphael.min.js") !!}
{!! Html::script("Admin/vendor/morrisjs/morris.min.js") !!}
{!! Html::script("Admin/data/morris-data.js") !!}
{!! Html::script("Admin/dist/js/sb-admin-2.js") !!}

{!! Html::script("Admin/vendor/datatables/js/jquery.dataTables.min.js") !!}
{!! Html::script("Admin/vendor/datatables-plugins/dataTables.bootstrap.min.js") !!}
{!! Html::script("Admin/vendor/datatables-responsive/dataTables.responsive.js") !!}

{!! Html::script("Admin/dist/js/sb-admin-2.js") !!}
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>
</html>
