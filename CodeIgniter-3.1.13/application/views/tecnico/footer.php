  <!-- /.content-wrapper -->
  <footer class="main-footer">
    Ilustre Municipalidad de Talca/TECNICO
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=" <?php echo base_url() ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src=" <?php echo base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url() ?>plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

<script>
	 $(document).ready(function(){
	 	
	var dataTable =	$("#example1").DataTable({
			"language": {
				"lengthMenu": "Mostrar _MENU_ registros por pagina",
				"zeroRecords": "No se encontraron resultados en su busqueda",
				"searchPlaceholder": "Buscar registros",
				"info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
				"infoEmpty": "No existen registros",
				"infoFiltered": "(filtrado de un total de _MAX_ registros)",
				"search": "Buscar:",
				"paginate": {
					"first": "Primero",
					"last": "Último",
					"next": "Siguiente",
					"previous": "Anterior"
				},
			}
		});//Datatable
});
</script>

</body>
</html>