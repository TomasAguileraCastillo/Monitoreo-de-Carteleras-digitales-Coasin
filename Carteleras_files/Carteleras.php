	<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
	
    <!--codigo alfa -->
    
    <link rel="stylesheet" href="css/demo1.css">
    <script type="text/javascript" language="javascript" src="js/datos.js"></script>
	 <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="js/djkjNF.js"></script>
    <!--<script src="js/jquery.min.js"></script>-->
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
    
    <!--codigo beta Metro  -->
    <link href="Metro-UI-CSS-3.0.0-beta.1/docs/css/metro.css" rel="stylesheet">
 	<link href="Metro-UI-CSS-3.0.0-beta.1/docs/css/metro-icons.css" rel="stylesheet">
    <link href="Metro-UI-CSS-3.0.0-beta.1/docs/css/docs.css" rel="stylesheet">
    
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
<style>
#contenedores {
	position:relative;eeefe
	left:-1.5%;
	border: 1px solid #000;
	width: 102%;
	overflow: hidden;
	padding: 20px 20px 20px 3px;*/
}
nav{
	color:#FFF;
	background-color:#069;
	a
	height:7%;
	/*background-image: -webkit-gradient(linear, left top, left bottom, from(#FFF), to(#CCC));/*Para chrome y Safari 
	Degradados 
    background-image: -moz-linear-gradient(top center, #FFF, #CCC);/*Para Firefox 
	background-image: -o-linear-gradient(top, #FFF, #CCC);/*Para Opera 
	background-image: linear-gradient(top, #FFF, #CCC);/*El estandar por defecto*/
	overflow:hidden;
	padding:15px;
	width:99.87%;
}
nav ul{
    list-style:none;
    margin:-22px 10px 0 10px;
    padding:0;
	 
}
 
 nav ul li{
	/*Bordes redondeados*/
    -webkit-border-radius:5px;/*Chrome y Safari*/
	-moz-border-radius:5px;/*Firefox*/
	-o-border-radius:5px;/*Opera*/
	border-radius:5px;/*Estandar por defecto*/
	float:left;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	font-weight:bold;
	margin-right:10px;
	text-align:center;
	/*Sombras para texto, los mismos parametros que box-shadow*/
    text-shadow: 0px 1px 0px;
	height:2%;	
}
nav ul li a{
    color:#999;
    display:block;
    padding:10px;
    text-decoration:none;
	 
    /*Transiciones*/
    -webkit-transition: 0.4s linear all;
    -moz-transition: 0.4s linear all;
    -o-transition: 0.4s linear all;
    transition: 0.4s linear all;
}
nav ul li a:hover {
   color:#000;
 
}

#posit{
	top:-1%;
}


 </style>   
</head>
    <body>
	    <img src="img/baner1.jpg"  >
    	<nav >
            <ul  id="posit">
                <li ><a title="Opcion 1" href="#">Opción 1</a></li>
                <li><a title="Opcion 2" href="#">Opción 2</a></li>
                <li><a title="Opcion 3" href="#">Opción 3</a></li>
                <li><a title="Opcion 4" href="#">Opción 4</a></li>
                <li><a title="Opcion 5" href="#">Opción 5</a></li>
            </ul>
        </nav>
        <div id="a" >
                    <p id="parra" style="width:100%">Informacion referente a Carteleras Digitales de Sucursales Banco<strong> Al realizar la Busqueda  seleccione y haga click en Comprobar </strong>
        		   	</p>
       	</div>
        <ul class="tabs">
                <li>
                  <input type="radio" checked name="tabs" id="tab1">
                  <label for="tab1">Carteleras Banco</label>
                  <div id="tab-content1" class="tab-content animated fadeIn">
            <div  id="demo  ">
               <div id="contenedores" > 
                 <div >
                    
                 </div>
                 <table id="example" class="display" cellspacing="0" width="100%">
                        <input  id="divrc" type="button" value="Comprobar Conexion" class="button" data-type="zoomin" />
                        
                        <thead>
                            <tr>
                                <th>Cod Suc</th>
                                <th>Sucursal</th>
                                <th>IP</th>
                                <th>Nombre de Equipo</th>
                                <th>Descripcion</th>
                                <th>  </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                            </tr>
                        </tfoot>
            </table>
            
           
            </div>
            </div>
        
            <div class="overlay-container ">
                <div class="window-container zoomin">
                    <h3> Datos del La Cartelera</h3> 
                    
                    <br/>
                    <br/>
                    
                   <table border=1 cellspacing=0 cellpadding=2 bordercolor="666633"  align="left">
                        <tr>
                            <td>Cod. Suc./Of. </td>
                            <td><span id="ae"></span></td>
                        </tr>
                        <tr>
                            <td>Nombre Suc./Of</td>
                            <td><span id="b"></span> </td>
                        </tr>
                        <tr>
                            <td> Ip Cartelera </td>
                            <td><span id="c"></span> </td>
                        </tr>
                        <tr>
                            <td>Nombre Equipo </td>
                            <td><span id="d"></span> </td>
                        </tr>
                        <tr>
                            <td> Respuesta de Cartelera </td>
                            <td style="height:13$;"><span id="d">
                            
                          <div  style="height:30%;" >	
								ddd	
								<?php	
									$data = "<script> document.write(name2) </script>";
									exec("ping {$data}", $output, $return);
									foreach ($output as $x){
                                    print_r($x . "<br>lii</br>");
                                    }
                                ?>
                            </div>
                            </span> </td>
                        </tr>
                    </table>
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    <br/><br/><br/><br/><br/><br/><br/> 
                    <span class="close" style="text-align:center">Cerrar</span>
                </div>
            </div>
            </div>
                </li>
                <li>
                  <!--tab 2 de servidores Nacar -->
                  
				<input type="radio" name="tabs" id="tab2">
                <label for="tab2">Servidores Banco</label>
                	<div id="tab-content2" class="tab-content animated fadeIn">
                    	<div  id="demo  ">
                        	<div id="contenedores" > 
                            	<div >
                                </div>
                         		<table id="example" class="display" cellspacing="0" width="100%">
                                	<input  id="divrc" type="button" value="Comprobar Conexion" class="button" data-type="zoomin" />
                                    <thead>
                                    	<tr>
                                        	<th>Cod Suc</th>
                                            <th>Sucursal</th>
                                            <th>IP</th>
                                            <th>Nombre de Equipo</th>
                                            <th>Descripcion</th>
                                            <th>  </th>
                                      	</tr>
                                 	</thead>
                                    <tfoot>
                                    	<tr>
                                        </tr>
                                  	</tfoot>
                      			</table>
          					</div>
                 		</div>
       					<div class="overlay-container ">
                        	<div class="window-container zoomin">
                            	<h3> Datos del Servidor Nacar </h3> 
                                <br/>
                                <br/>
                                <table border=1 cellspacing=0 cellpadding=2 bordercolor="666633"  align="left">
                                	<tr>
                                    	<td>Cod. Suc./Of. </td>
                                        <td><span id="ae"></span></td>
                               		</tr>
                              		<tr>
                                    	<td>Nombre Suc./Of</td>
                                        <td><span id="b"></span> </td>
                                   	</tr>
                                    <tr>
                                    	<td> Ip Cartelera </td>
                                        <td><span id="c"></span> </td>
                                   	</tr>
                                    <tr>
                                    	<td>Nombre Equipo </td>
                                        <td><span id="d"></span> </td>
                                   	</tr>
                                    	<tr>
                                        <td> Respuesta de Cartelera </td>
                                        <td style="height:13$;"><span id="d">
                                        	<div  style="height:30%;" >	
													<?php	
														$data = "<script> document.write(name2) </script>";
														exec("ping {$data}", $output, $return);
															foreach ($output as $x){
																print_r($x . "<br>");
																}
													?>
                                          	</div>
                                       	</td>
                                 	</tr>
              					</table>
                                <br/><br/><br/><br/><br/><br/><br/><br/><br/>
                                <br/><br/><br/><br/><br/><br/><br/> 
                    			<span class="close" style="text-align:center">Cerrar</span>
                			</div>
            			</div>
                  </div>
                </li>
                <li>
                  <input type="radio" name="tabs" id="tab3">
                  <label for="tab3">Listado Suc.Nacar y CTRL D</label>
                  <div id="tab-content3" class="tab-content animated fadeIn">
                    .Solo Lista de Sucursales y servidores nacar y CRTL D..
                  </div>
                </li>
                <li>
                  <input type="radio" name="tabs" id="tab4">
                  <label for="tab4">Generador de Claves </label>
                  <div id="tab-content4" class="tab-content animated fadeIn">
                    .Key Generator ..
                  </div>
                </li>
                 <li>
                  <input type="radio" name="tabs" id="tab5">
                  <label for="tab5">Conexion a A/D</label>
                  <div id="tab-content5" class="tab-content animated fadeIn">
                    .Dominios Bancos ..
                  </div>
                </li>
                
        </ul>
     
    
</body>
   </html>