// JavaScript Document
<script>
 	$(document).ready(function() {
		$('#demo').html( '<table cellpadding="0" cellspacing="0" border="0" class="display" id="example"></table>' );
			$('#example').dataTable( {
				"data": dataSet,
				"columns": [
					{ "title": "Cod Suc" },
					{ "title": "Sucursal" },
					{ "title": "IP" },
					{ "title": "Nombre de Maquina", "class": "center" },
					{ "title": "Descripcion", "class": "center" }
					
				]
			} );   
		} );
	 
	$(document).ready(function() {
    var table = $('#example').DataTable();
 
    $('#example tbody').on( 'click', 'tr', function () {
		var name = $('td', this).eq(0).text();
		var name1 = $('td', this).eq(1).text();
		var name2 = $('td', this).eq(2).text();
		var name3 = $('td', this).eq(3).text();
		
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
         table.$('tr.selected').removeClass('selected');
           $(this).addClass('selected');
        }
   			$('.button').click(function() {
				
				$("#ae").html(name)
				$("#b").html(name1)
				$("#c").html(name2)
				$("#d").html(name3)
				type = $(this).attr('data-type');
				$('.overlay-container').fadeIn(function() {
				window.setTimeout(function(){
					$('.window-container.'+type).addClass('window-container-visible');
				 }, 100);
				});
			});
		$('.close').click(function() {
				$('.overlay-container').fadeOut().end().find('.window-container').removeClass('window-container-visible');
			});
		});
		} )
		
	</script>