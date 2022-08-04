  <!-- /.content-wrapper -->
  <footer class="main-footer">
  	Ilustre Municipalidad de Talca/SUPERUSUARIO
  	<div class="float-right d-none d-sm-inline-block">
  	</div>
  </footer>
</div>
<!-- ./wrapper -->
<!-- Toastr -->
<!-- jQuery -->
<script
src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- jQuery -->
<script src="<?php echo base_url() ?>plugins/jquery/jquery.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js
"></script>

<!-- DataTables -->
<script src="<?php echo base_url() ?>plugins/datatables/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url() ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->

<!-- AdminLTE -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>  
<script src=" <?php echo base_url() ?>assets/dist/js/demo.js"></script>

<script>
	 $(document).ready(function(){
	 	
	$("#example1").DataTable({
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
  function sololetras(event){
    key = event.keyCode || event.which;
    teclado = String.fromCharCode(key).toLowerCase();
    letras = "a b c d e f g h i j k l m n ñ o p q r s t u v w x y z";//letras y espacios
    especiales = "164";
    teclado_especial = false;
    for (var i in especiales){
      if(key==especiales[i]){
        teclado_especial = true;break;
      }
    }
    if(letras.indexOf(teclado)==-1 && !teclado_especial){
      return false;
    }
  }  
</script>

<script type="text/javascript">
  function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
    }
    return false;        
  }
</script>

<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$('#Categoria').change(function(){
			var id_cat = $('#Categoria').val();
			if (id_cat != '') {
				$.ajax({
					url:"<?php echo base_url();?>mantenimiento/mansubcat/fetch_sub",
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
<script language="javascript" type="text/javascript">
	function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
    
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    rut.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
    
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
}
</script>

</body>
</html>