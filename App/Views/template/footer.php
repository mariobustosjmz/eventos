

<footer>
</footer>
</div> <!-- /div.container-->


</body>
</html>


<script src='<?php echo APPPATH ?>js/jquery.min.js'></script>
<script src='<?php echo APPPATH . ASSETS_PATH ?>js/jquery.min.js'></script>
<script src='<?php echo '/' . ASSETS_PATH ?>js/bootstrap.min.js'></script>
<script src='<?php echo ASSETS_PATH ?>/js/material.js'></script>
<script src='eventos/App/Views/assets/js/ripples.js'></script>
<script src='/App/Views/assets/js/ripples.js'></script>
<script src='App/Views/assets/js/ripples.js'></script>


<!--snackbarjs-->
<script src='<?php echo ASSETS_PATH ?>snackbarjs/dist/js/snackbar.js'></script>
<!---->
<!--pickdate-->
<script src='<?php echo ASSETS_PATH ?>pickdate/legacy.js'></script>
<script src='<?php echo ASSETS_PATH ?>pickdate/picker.js'></script>
<script src='<?php echo ASSETS_PATH ?>pickdate/picker.date.js'></script>
<script src='<?php echo ASSETS_PATH ?>pickdate/picker.time.js'></script>
<!---->
<!--scripts-->
<script src='<?php echo ASSETS_PATH ?>scripts/eventos.js'></script>
<script src='<?php echo ASSETS_PATH ?>scripts/colegios.js'></script>

<script src='<?php echo ASSETS_PATH ?>scripts/usuarios.js'></script>
<script src='<?php echo ASSETS_PATH ?>scripts/categorias.js'></script>
<script src='<?php echo ASSETS_PATH ?>scripts/roles.js'></script>
<!---->
<!--uploadfile-->
<script src="http://hayageek.github.io/jQuery-Upload-File/4.0.10/jquery.uploadfile.min.js"></script>
<!---->

<!--custom-->
<script type="text/javascript">
	$(document).ready(function() {



		$('.datepicker').pickadate({

			monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
			format: 'd mmmm  yyyy',
			formatSubmit: 'yyyy-mm-dd' ,
			hiddenName: true
		});





	});
</script>

