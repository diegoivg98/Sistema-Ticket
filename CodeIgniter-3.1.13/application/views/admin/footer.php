  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright</strong>
    Todos los derechos reservados/ADMINISTRADOR
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>plugins/jquery/jquery.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
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

<script type="text/javascript">
  function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
    }
    return false;        
  }
</script>

<script language="Javascript" type="text/javascript">
  $(document).ready(function(){
    $('#Categoria').change(function(){
      var id_cat = $('#Categoria').val();
      if (id_cat != '') {
        $.ajax({
          url:"<?php echo base_url();?>ticketadmin/ticket/fetch_sub",
          method:"POST",
          data:{id_cat:id_cat},
          success:function(data)
          {
            $('#Subcategoria').html(data);
          }
        })
      }
    });
  });
</script>

<script language="Javascript" type="text/javascript">
  $(document).ready(function(){
    $('#Subcategoria').change(function(){
      var id_subcat = $('#Subcategoria').val();
      if (id_subcat != '') {
        $.ajax({
          url:"<?php echo base_url();?>ticketfunc/ticket/fetch_mansub",
          method:"POST",
          data:{id_subcat:id_subcat},
          success:function(data)
          {
            $('#mansubcat').html(data);
          }
        })
      }
    });
  });
</script>
</body>
</html>