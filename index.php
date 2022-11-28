<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script async="" src="files/uwt.js.descarga"></script><script async="" src="files/gtm.js.descarga"></script><script type="text/javascript" async="" src="files/recaptcha__es.js.descarga" crossorigin="anonymous" integrity="sha384-E/KZ6Xkl03LjrRt40gqzkcEOasbrpULnBWDzIeEuriKoOVWy1+FzMxuGOHNuiHX3"></script><script type="text/javascript" async="" src="files/ga.js.descarga"></script><script type="text/javascript" src="files/jquery.min.js.descarga"></script>
<script language="javascript">

	//Deshabilito click derecho
	$(document).ready(function(){
		 $(document).bind("contextmenu",function(e){
		 return false;
		 });
	});
	
	//Leyenda generica para los wizard
	var errorgenericowz = '';
</script> 

	<title>ICBC</title>
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="expires" content="Fri, 20 Feb 2000 10:51:12 GMT">
	<!-- style -->
	<link rel="Stylesheet" href="files/style.css" type="text/css" media="screen">
	<!--<link rel="Stylesheet" href="/accstatic/css/login/integradorLoginMV.css?v=55.5" type="text/css" media="screen">-->
	<link rel="Stylesheet" href="files/login-acc.css" type="text/css" media="screen">
	<link rel="Stylesheet" href="files/message-view-acc.css" type="text/css" media="screen">
	<!-- icon -->
	<link rel="shortcut icon" href="">
	<link rel="icon" href="">
	<link rel="Stylesheet" href="files/font-awesome.css" type="text/css" media="screen">

	<!-- scripts -->
	<script language="javascript" src="files/codif.js.descarga"></script>
	<script language="javascript" src="files/popup.js.descarga"></script>
	<script language="javascript" src="files/control_browser.js.descarga"></script>
	<script language="javascript" src="files/formValid.js.descarga"></script>
	
	
	<link rel="stylesheet" href="files/iview.css" type="text/css" media="screen">

<script src="files/jquery.min.js.descarga"></script>
<script src="files/jquery.easing.js.descarga"></script>
<script src="files/iview.js.descarga"></script>

<script>
function openURL(url, targetSlide, wPopup, hPopup){
	if(url == ''){
		return false;
	}else{
		if(targetSlide != ''){
			window.open(url, targetSlide);
		}else{
			var left = Math.round((screen.width - wPopup) / 2);
			var top = Math.round((screen.height - hPopup) / 2);
			var specs = 'width=' + wPopup + ', height=' + hPopup + ', left=' + left + ', top=' + top + ', scrollbars=yes';
			window.open(url, targetSlide, specs);
		}
	}
}
</script>

<style>
	.contenedorSlider{
		font-family: Arial;
		cursor: default;
		position: relative;
		overflow: hidden;
	}
	.iview-controlNav a {
		text-indent: -9999px;
	}
	.iview-controlNav {
		position: absolute;
		bottom: 15px;
		right: 40px;
	}
	.iview-controlNav a.iview-control {
		padding: 0px;
		float: left;
		width: 14px;
		height: 14px;
		line-height: 0px;
	}
	.iview-controlNav a.circle{
		background: url('bulletcircle.png') no-repeat;
		line-height: 0px;
	}
	.iview-controlNav a.square{
		background: url('bulletsquare.png') no-repeat;
		line-height: 0px;
	}
	.iview-controlNav a.rhombus{
		background: url('bulletrhombus.png') no-repeat;
		line-height: 0px;
	}
	.iview-controlNav a.number{
		font-size: 19px;
		color: #FFFFFF;
		text-indent: 2px !important;
		line-height: 15px;
	}
	
	.iview-controlNav div.iview-items {
		float: left;
		padding: 0px;
	}
	.iview-controlNav div.iview-items ul {
		margin: 0px;
		padding: 0px;
	}
	.iview-controlNav div.iview-items ul li {
		padding: 0px;
		float: left;
		width: 14px;
		height: 14px;
		margin: 0px 5px 0px 5px;
		line-height: 0px;
	}
	.iview-controlNav a.iview-control.active {
		color: #FF0000;
		background-position: 0px -14px;
	}
	.iview-controlNav a.iview-control.hover {
		color: #FF0000;
		background-position: 0px -14px;
	}
	#iview-preloader {
		border: 0px;
		width: 32px;
		height: 32px;
		background: url('preloader.gif') no-repeat;
	}
	#iview-preloader div {
		background: #DA1F2F;
		height: 7px;
		display: none;
	}
	#iview-timer {
		display: none !important;
	}
	
	.iview-playPauseButton{
		position: absolute;
		right: 10px;
		bottom: 12px;
		background: url('btnplaypause.png') no-repeat;
		background-position: -20px 0px;
		margin: 0px 5px 0px 5px;
		width: 20px;
		height: 20px;
		z-index: 9;
		cursor: pointer;
		display: none;
	}
	.iview-playPauseButton.play{
		background-position: 0px 0px;
	}
	.iview-caption {
		line-height: 0px;
		display: none;
	}
	.iview-imgBackground{
		position: absolute;
		top: 0px;
		left: 0px;
		display: none;
	}
</style>


	<script language="javascript" src="files/jquery-ui.js.descarga"></script>
	<script language="javascript" src="files/validation.js.descarga"></script>

	
	<style> 
	 .ui-tooltip {
	    text-align:left;
	}
	</style>

	
	


	<!-- Validations -->
	<script type="text/javascript">
		/* Flags de ajax */
		var resultadoValidacionAJAX = false;
		var seEnvioAJAX = false;
		var respondioAJAX = false;
		/* Evita doble clic */
		var procesando = false;
		
		function isAllowedKeyCode(keyCode) {
			if(navigator.userAgent.search("Firefox") >= 0) {
				//9:tab - 13:enter - 37,38,39,40:arrows - 46:delete
				var allowedKeyCodes = [9, 13, 37, 38, 39, 40, 46];
			}
			else {
				var allowedKeyCodes = [13];
			}
			for (var i = 0; i < allowedKeyCodes.length;i ++) {
				if(allowedKeyCodes[i] == keyCode) {
					return true;
				}
			}
			return false;
		}

		$(document).ready(function() {
			
			$(".login-body-align").tooltip(
			{ 
				content: $(".helpIco").attr("title"), 
				position:{ 
					within: ".login-body-align"
				}
			});
			
	        var ctrlDown = false,
	        ctrlKey = 17,
	        vKey = 86,
	        cKey = 67;
			suprKey = 127;

		    $(document).keydown(function(e) {
		        var charCode = (e.which) ? e.which : e.keyCode;
		        if (charCode == ctrlKey ){
		        	ctrlDown = true;
		        }
		    }).keyup(function(e) {
		    	var charCodeUp = (e.which) ? e.which : e.keyCode;
		        if (charCodeUp == ctrlKey ){
		        	ctrlDown = false;
		        }
		    });
			
			var regexAlphanumeric = new RegExp("^[a-zA-Z0-9\b]+$");
			
			$("#usuario").bind("keypress", function (event) {
				if (!isAllowedKeyCode(event.keyCode)) {
					var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
					if (!regexAlphanumeric.test(key)) {
						event.preventDefault();
						return false;
					}
				} 
			});
			
			$("#password").bind("keypress", function (event) {
				if (!isAllowedKeyCode(event.keyCode)) {
					var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
					if (!regexAlphanumeric.test(key)) {
						event.preventDefault();
						return false;
					}
				}
			});

		    $('.formDocumento').keypress(function (e) {
				
				$(this).removeClass('input-validation--error font-validation--error');
				$("#documento-error").remove()
		   		if(esNumero(e)||caracterDeBorrar(e)|| esTabulador(e)){
		     		return true;
		     	}
	   			else{
		     		return false;
	   			}
		   	});

		   	$('.formDocumento').click(function() {
		   		$('.formDocumento').attr('maxlength','12');
		   	});

		   	$('.formDocumento').keydown(function (e) {
		   		var charCode = (e.which) ? e.which : e.keyCode;
		   		 if (ctrlDown && (charCode == vKey)){
		   		 	return false;
		   		 }
		   		 return true;
		   	});

		   	$('.fechaNacimiento').keydown(function(e){
		   		var charCode = (e.which) ? e.which : e.keyCode;
		   		 if (ctrlDown && (charCode == vKey)){
		   		 	return false;
		   		 }
		   		 return true;
		   	});

		 	$('.fechaNacimiento').keypress(function (e) {
				validarFechaNacimiento2(String.fromCharCode(e.charCode));

				$(this).removeClass('input-validation--error font-validation--error');
				$("#fechaNac-error").remove()
		    	//if the letter is not digit then display error and don't type anything
		     	if (esNumero(e)){
		     		return true;
		     	}
		     	else if(caracterDeBorrar(e)|| esTabulador(e) ){
					return true;
		     	}
		     	else
		     		return false;
		   	});
		 	
		 	var regexNumeric = new RegExp("^[0-9\b]+$");
			var regexAlphanumeric = new RegExp("^[a-zA-Z0-9\b]+$");
			
			$("#documento").bind("keypress", function (event) {
				if (!isAllowedKeyCode(event.keyCode)) {
					var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
						if (!regexAlphanumeric.test(key)) {
							event.preventDefault();
							return false;
						}
						if (!regexNumeric.test(key)) {
							event.preventDefault();
							return false;
						}
				} 
			});

			var formMonoprod = $("#frmMonoproducto").validate({
			    onkeyup: false,
		  		errorClass: "input-validation--error font-validation--error",
				rules: {
					formDocumento: {required: true,
		     			minlength: 3,
		     			soloNumeros: "soloNumeros"
					},
			        fechaNacimiento: {'reglaFechaNacimiento': true, required: true}
				},
				messages: {
					formDocumento: {
						required: 'Por favor, ingresá tu número de documento.',
						minlength: 'Por favor, ingresá tu número de documento.',
						soloNumeros: 'Por favor, ingresá sólo números.'
					},
					fechaNacimiento: {
						required: function(){
						   		var fechaNacimientoValue = $('.fechaNacimiento').val();

						   		if( !$(".fechaNacimiento").val()){
						   			tipoDocumentoValue = "7";
						   			return 'Por favor, ingres\u00E1 tu fecha de nacimiento.';
						   		}
					     		return 'La fecha ingresada es incorrecta';
				     		} 
				     		}
				},
				errorPlacement: function(error, element) {
				  if(element.hasClass("formDocumento")) {
				    error.appendTo( $( ".documento-errorMensaje" ) );
				  } else {
				  	  if(element.hasClass("fechaNacimiento")) {
					    error.appendTo( $( ".fecha-nacimiento-errorMensaje" ) );
					  }
				  }
				}
			});
			
			$("#frmLogin").validate({
				submitHandler:function(form) {
					if (procesando && !respondioAJAX) {
						alert ('Tu consulta esta siendo procesada, por favor aguardá unos instantes.');
						return false;
					}

					// Si no se envio ajax
					if(!seEnvioAJAX){
						// Esconde el mensaje
						hideMessage();
						procesando = true;
						seEnvioAJAX = true;
						// se envia ajax
						validarLoginAJAX();
						// No hace submit
						return false;
					}
					// Si el ajax respondio
					else if(respondioAJAX){
						
						if(resultadoValidacionAJAX){
							// el resultado indica que es valido
							respondioAJAX = false;
							// Hace submit
							return true;
						}
						else{
							// el resultado es invalida
							procesando = false;
							seEnvioAJAX = false;
							// NO hace submit;
							return false;
						}
					}
					// NO hace submit;
					return false;
				},
				errorClass: "input-validation--error font-validation--loginerror",
				rules: {
					usuario: {
						required : true,
						minlength: 8,
						maxlength: 15,
						soloNumerosYLetras: 'soloNumerosYLetras',
						esAlfanumerico: 'esAlfanumerico'
					},
					password: {
						required : true,
						minlength: 8,
						maxlength: 8,
						soloNumerosYLetras: 'soloNumerosYLetras',
					}
				},
				messages: {
					usuario: {
						required : 'Por favor ingresá tu usuario.',
						minlength: 'El usuario debe tener entre 8 y 15 caracteres.',
						maxlength: 'El usuario debe tener entre 8 y 15 caracteres.',
						soloNumerosYLetras: 'Por favor, ingresá letras y números.',
						esAlfanumerico: 'Por favor, ingresá letras y números.',
					},
					password:{
						required : 'Por favor ingresá tu clave.',
						minlength: 'Por favor ingresá 8 caracteres.',
						maxlength: 'Por favor ingresá 8 caracteres.',
						soloNumerosYLetras: 'Por favor, ingresá letras y números.',
						//esAlfanumerico: 'Por favor, ingresá letras y números.'
					}
				},
				errorPlacement: function(error, element) {
					if(element.hasClass("usuario")) {
						$("#usuario-errorMensaje").empty();
						error.appendTo( $( ".usuario-errorMensaje" ) );
					}
					else if(element.hasClass("password")){
						$("#password-errorMensaje").empty();
						error.appendTo( $(".password-errorMensaje") );
					}
				},
				onkeyup: function(elem){
				}
			});
			
	   		$("#usuario").keyup(function() {
	        	$(this).removeClass("input-validation--error font-validation--loginerror");
	        	$("#usuario-error").remove();
	    	});
			$("#password").keyup(function(){
	        	$(this).removeClass("input-validation--error font-validation--loginerror");
	        	$("#password-error").remove();
			});
			
		});
		

		function isNumber(event) {
			var charCode = (event.which) ? event.which : event.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57 || charCode == 118))
				return false;
			return true;
		}

		function esNumero(event) {
			var charCode = (event.which) ? event.which : event.keyCode;
			if (charCode >= 48 && charCode <=57)
				return true;
			return false;
		}

		function esLetra(event) {
			var charCode = (event.which) ? event.which : event.keyCode;
			if ((charCode>= 65 && charCode <= 90) || (charCode>= 97 && charCode <= 122)){
				return true;
			}
			return false;
		}

		function caracterDeBorrar(event) {
			var charCode = (event.which) ? event.which : event.keyCode;
			if (charCode == 08 || charCode == suprKey)
				return true;
			return false;
		}

		function esTabulador(e) {
			var charCode = (e.which) ? e.which : e.keyCode;
			if (charCode == 09 || charCode == 11){
				return true;
			}
			return false;
		}

		$("#password").keyup(function() {
	 		setInterval(function() {
	 		    if (! $("#password").hasClass("input-validation--error")) {
	 		    	$("#password-error").empty();
	 		    }
	 		} ,100);
	 	});

		$("#usuario").change(function(){
			setInterval(function(){
				if (!($("#usuario").hasClass("input-validation--error"))) {
					$("#usuario-error").empty();
				}
			});
		});

		$.validator.addMethod('esAlfanumerico', function(value) {
			/* Debe contener al menos una letra y al menos un numero */
			var regExpNumYlet = /^(?=\w*\d)(?=\w*[a-zA-Z])[a-zA-Z0-9]+$/;
			if (value.match(regExpNumYlet)){
				return true;
			}
			return false;
		});

		$.validator.addMethod('soloNumerosYLetras', function(value) {
			var regExpNumYlet = /^[a-zA-Z0-9]+$/;
			if (value.match(regExpNumYlet)) {
				return true;
			}
			return false;
		});

		$.validator.addMethod('reglaFechaNacimiento', function (value, element) {
			var esFechaValida;

			var yearValue = parseInt(value.substring(6, 10));
			var monthValue = parseInt(value.substring(3, 5));
			var dayValue = parseInt(value.substring(0,2));

			var today = new Date();
			var birthday = new Date(yearValue, monthValue-1, dayValue+4);

			var differenceInMilisecond = today.valueOf() - birthday.valueOf();
			var age = Math.floor(differenceInMilisecond / 31536000000);

			esFechaValida = moment(value, 'DD/MM/YYYY', true).isValid() && age <= 120 && age>=15;

			//Se valida que el valor ingresado cumple este formato dd/mm/yyyy
			return (this.optional(element) || /^\d{2}\/\d{2}\/19|20\d{2}$/.test(value)) && esFechaValida;
		}, 'La fecha ingresada es incorrecta.');

		function validateDocumento(){
			var response = grecaptcha.getResponse();
			var captchaCompleto = true;
			$( ".recaptcha-errorMensaje" ).empty();
		
			var txt = 'Por favor, completá el captcha para continuar.';
		
			if (response.length == 0) {
				$(".recaptcha-errorMensaje").append(txt);
				$(".recaptcha-errorMensaje").show();
	
				captchaCompleto = false;
			}
			
			return $("#frmMonoproducto").valid() && captchaCompleto;
		};

		function recaptchaCallback() {
			$(".recaptcha-errorMensaje").hide();
		};
		
		$.validator.addMethod('soloNumeros',function(value){
			var regExpNumbers = /^[0-9]+$/;	//solo numeros
			if(value.match(regExpNumbers))
				return true;
			return false;
		});
	</script>
	<!-- Validate ajax -->
	<script type="text/javascript">
		var validarLoginAJAX = function(){

			//remueve los mensajes
			hideComplexMessage();
			//recuperar parametros
			var user = $("#usuario").val();
			var pass = $("#password").val();

			//llamar ajax
			var result = $.ajax({
				url:"loginAcc.do",
				timeout:50000,
				dataType:"json",
				type:"post",
				data : { 
					usuario: user, 
					password: pass
				},
				success: function( json ) {
					hideComplexMessage();
					if(json.status == 'ok'){
						resultadoValidacionAJAX = true;
					}
					else if (json.status == 'aviso') {
						showMessage(json.status, json.titulo, json.mensaje);
						resultadoValidacionAJAX = false;
					}
					else if(json.status == 'error') {
						showMessage(json.status, json.titulo, json.mensaje);
						resultadoValidacionAJAX = false;
					}
					else if(json.status == 'user-pass-invalido') {
						showMessage('error','No reconocemos esa combinaci&oacute;n de usuario y clave.','Por favor revisalos e intent&aacute; nuevamente.');
						resultadoValidacionAJAX = false;
					}
					else if(json.status == 'user-bloqueado') {
						showComplexMessage(json.status);
						resultadoValidacionAJAX = false;
					}
					else if(json.status == 'user-bloqueado-monoprod') {
						showComplexMessage(json.status);
						resultadoValidacionAJAX = false;
					}
					else if(json.status == 'monoproducto-gestionar-usuario') {
						showMessage('error','','Por favor gener&aacute; nuevamente tu usuario y clave para poder ingresar. (101013)');
						resultadoValidacionAJAX = false;
					}
					else if(json.status == 'user-inhabilitado') {
						showMessage('error','','Tu acceso se encuentra bloqueado. Comunicate con nuestra Mesa de Ayuda al 0810-555-9200 de lunes a viernes de 8 a 20 horas y sábados, domingos y feriados de 10 a 18 horas.  (001003)');
						resultadoValidacionAJAX = false;
					}
					else if(json.status == 'user-monoproducto-alta-bloqueada') {
						showMessage('error','','Tu acceso se encuentra bloqueado. Por favor, comunicate con nuestra Mesa de Ayuda al 0810-555-9200.  (001010)');
						resultadoValidacionAJAX = false;
					}
					respondioAJAX = true;
					$("#frmLogin").submit();
				}
			})
			.fail(function( jqxhr, textStatus, error ) {
				hideComplexMessage();
				//aca se maneja los errores que ocurren cuando falla la llamada al .do
				procesando = false;
				seEnvioAJAX = false;
				respondioAJAX = true;
				var titulo = 'En este momento no se puede realizar la operaci&oacute;n que seleccionaste.';
				var mensaje = 'Por favor intent&aacute; nuevamente m&aacute;s tarde.';
				showMessage('error', titulo, mensaje);
			});
		}
	</script>
<script language="javascript" type="text/javascript" src="files/51390000.js.descarga"></script><script language="javascript" type="text/javascript" src="files/cookie-id.js.descarga"></script><meta http-equiv="origin-trial" content="A751Xsk4ZW3DVQ8WZng2Dk5s3YzAyqncTzgv+VaE6wavgTY0QHkDvUTET1o7HanhuJO8lgv1Vvc88Ij78W1FIAAAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjgwNjUyNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A751Xsk4ZW3DVQ8WZng2Dk5s3YzAyqncTzgv+VaE6wavgTY0QHkDvUTET1o7HanhuJO8lgv1Vvc88Ij78W1FIAAAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjgwNjUyNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><script type="text/javascript" async="" src="files/f.txt"></script><meta http-equiv="origin-trial" content="A751Xsk4ZW3DVQ8WZng2Dk5s3YzAyqncTzgv+VaE6wavgTY0QHkDvUTET1o7HanhuJO8lgv1Vvc88Ij78W1FIAAAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjgwNjUyNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><script language="javascript" type="text/javascript" src="files/dispatcher-v3.js.descarga"></script><script src="" type="text/javascript"></script><script src="files/cp-v3.js.descarga" type="text/javascript"></script><script src="files/json-min.js.descarga" type="text/javascript"></script><script src="files/cp-v3.js(1).descarga" type="text/javascript"></script></head>
<body class="bodySite">

	<iframe height="0" width="0" style="display: none; visibility: hidden;" src="files/activityi.html"></iframe><div class="containerSite">
		<!-- HEADER -->
		




<div class="headerContainer fullpagewidthline">

<div class="backcolor_0084 logoHeaderDiv"><a href="" target="_parent"><img src="files/ICBC_logoBU.png" alt="" border="0" valign="middle"></a></div>
	<div class="header_globe" style="float:right;  ">
		<table width="200" border="0" cellspacing="0" cellpadding="0">
			<tbody><tr valign="top">
				<td height="20" align="right" class="homeblacktxt"> 
						<a href="javascript:MM_openBrWindow(&#39;&#39;, &#39;win_ayuda&#39;, 580, 450, 550, 450, &#39;no&#39;, &#39;no&#39;, &#39;no&#39;, &#39;no&#39;, &#39;yes&#39;, &#39;no&#39;)" class="homeblacktxt">ayuda</a> |  
						<a href="" class="homeblacktxt">contactanos</a>
			</td></tr>
			<tr>
				<td class="homeblacktxt" height="19"><img src="files/p.gif" width="1" height="1"></td>
			</tr>
			<tr>
				<td align="right" class="backcolor_0084 headerFechaTd homeblacktxt">16 de noviembre de 2022 - 19:53</td>
			</tr>
		</tbody></table>
	</div>
	
	<table class="generalLineSeparator" width="778" border="0" cellspacing="0" cellpadding="0">
	    <tbody><tr>
            <td height="1"></td>
        </tr>
    </tbody></table>
</div>



		<!-- SEPARADOR -->
		<table width="778" border="0" cellspacing="0" cellpadding="0" class="horizontalmenuline">
			<tbody><tr>
				<td height="1"></td>
			</tr>
		</tbody></table>

		<!-- TITULO -->
		<div id="accessTitle">ACCESS BANKING</div>

		<!-- SEPARADOR -->
		<table width="778" border="0" cellspacing="0" cellpadding="0" class="horizontalmenuline">
			<tbody><tr>
				<td height="1"></td>
			</tr>
		</tbody></table>

		<!-- CONTAINER -->
		<div class="container padding-bottom--5px">
			
			<div class="login-body">

				<div class="login-body-align">

					<!-- Mensajes simples genericos -->
					
					<div id="containerMessage" class="message-type message-type--inactive">
						<!-- ICONO -->
						<i id="message-icon" class="push-left" aria-hidden="true"></i>
						<!-- Titulo -->
						<div class="message-type__title-simple" id="mensaje-titulo"></div>
						<!-- Descripcion -->
						<p class="message-type__description" id="mensaje-descripcion"></p>
					</div>

					
					<div id="mensaje-user-bloqueado" class="message-type message-type__error message-type--inactive hideablecontainer" style="padding-top: 2px ; padding-left: 10px ;padding-right: 10px ; padding-bottom: 5px">
								<b><p class="margin-bottom--reg" style="font-size:12px">
								Tu acceso ha sido bloqueado por acumular intentos erróneos
								</p></b>
								<p class="margin-bottom--reg" style="font-size:12px">Podés desbloquearlo mediante una de estas opciones:</p>
								<div class="no-acc-container">
									<div class="no-acc-atm" style="padding-left: 17px">
										<b><p class="margin-bottom--reg" style="font-size:12px">Generación Online</p></b>
											<p class="margin-bottom--reg" style="font-size:12px">Escaneá con tu celular el código QR y continuá desde <strong>ICBC Mobile Banking</strong>.</p>
											<img style="width: 28% ; margin-left:30%" src="files/qr-code.svg">
											<p class="margin-up--reg margin-bottom--reg" style="font-size:12px">También podés descargarte la app desde el store de tu celular.</p>
										
											<div style="display:flex ; padding-left: 13px">
												<div style="float:left;width:40%;margin-top:6px">
													<a href="" target="_blank">
													<img src="files/AppStoreApple.svg"></a>
												</div>
												<div style="float:left;width:49%">
													<a href="" target="_blank">
													<img src="files/google-play-badge.svg"></a>
												</div>
											</div>
									</div>
									<div class="no-acc-mob">
										<div class="no-acc-mob-content" style="margin-left:28px">
											<b><p class="margin-bottom--reg" style="font-size:12px">Generación en cajeros Banelco</p></b>
										<p class="margin-bottom--reg" style="font-size:12px">Elegí la opción:</p>
										<div class="margin-left--hig margin-bottom--low" style="font-size:12px">
											<p>1. Claves,</p>
											<p>2. Generación de clave,</p>
											<p>3. Clave Access y Mobile,</p>
											<p>4. Ingresá una clave provisoria,</p>
										</div>
									
										<p class="margin-up--reg margin-bottom--reg" style="font-size:12px ; padding-top: 11px">En Access Banking elegí
										<a class="link-inline" href="" style="font-size:12px">Tengo una clave provisoria</a>.
										</p>
										</div>
									</div>	
								</div>
							</div>

					
					<div id="mensaje-user-monoprod-bloqueado" class="message-type message-type__error message-type--inactive hideablecontainer">
						<div class="message-box">
							<p class="message-type__description">
								Tu acceso se encuentra bloqueado por acumular intentos erróneos. Por favor generá nuevamente tu usuario y clave para poder ingresar.
							</p>
						</div>
					</div>



					<div class="input-block-container margin-bottom--hig">
						<form class="formToValidate" id="frmLogin" method="POST" action="">

							<div class="login-input-container">
								<div class="login-input-label">Usuario</div>
								<input id="usuario" class="usuario login-input-text" type="text" name="usr" value="" maxlength="15" tabindex="1" required>
								<div id="usuario-errorMensaje" class="usuario-errorMensaje mensaje-validacion" style="position:absolute; width: 280px;"></div>
							</div>

							<div class="login-input-container push-right">
								<div class="login-input-label">Clave</div>
								<input id="password" class="password login-input-text" type="password" name="pass" value="" maxlength="8" tabindex="2" required>
								<div id="password-errorMensaje" class="password-errorMensaje mensaje-validacion" style="position:absolute;" type="hidden"></div>
							</div>

							<ul class="block-buttons">
								<li class="block-buttons__item">
									<input id="" type="submit" align="center" class="btnclass" tabindex="3" value="INGRESAR">
								</li>
							</ul>

							
							<div id="login-links" class="input-block-links">
								<ul class="desplegable-links push-left">
									<li class="desplegable-links__item">
										<a class="olvido-clave btn-link c-list-link" href="">
											No puedo ingresar
										</a>
									</li>
									<li class="desplegable-links__item last">
										<a class="btn-link" href="">
											Tengo una clave provisoria
										</a>
									</li>
									<li class="desplegable-links__item last">
										
										<div class="helpIco" title="Si generaste tu clave en un cajero automático Banelco, ingresá a través de la opción ‘Tengo una clave provisoria’."></div>
									</li>
									
								</ul>
							</div>

							<div class="clearfix"></div>

							
							<div class="c-list-link__content" style="display:none">
								<p class="margin-up--reg margin-bottom--reg">Si es la primera vez que ingresás, o bloqueaste u olvidaste tu usuario/clave, podés obtenerlos mediante una de estas opciones:</p>
								<div class="no-acc-container">
									<div class="no-acc-atm">
										<b><p class="margin-bottom--reg">Generación en cajeros Banelco</p></b>
										<p class="margin-bottom--reg">Elegí la opción:</p>
										<div class="margin-left--hig margin-bottom--low">
											<p>1. Claves,</p>
											<p>2. Generación de clave,</p>
											<p>3. Clave Access y Mobile,</p>
											<p>4. Ingresá una clave provisoria,</p>
										</div>
										<br>
										<p class="margin-up--reg margin-bottom--reg">En Access Banking elegí
										<a class="link-inline" href="">Tengo una clave provisoria</a>.
										</p>
									</div>
									<div class="no-acc-mob">
										<div class="no-acc-mob-content">
											<b><p class="margin-bottom--reg">Generación Online</p></b>
											<p class="margin-bottom--reg">Escaneá con tu celular el código QR y continuá desde <strong>ICBC Mobile Banking</strong>.</p>
											<img class="no-acc-mob-img" src="files/qr-code.svg">
											<p class="margin-up--reg margin-bottom--reg">También podés descargarte la app desde el store de tu celular.</p>
										
											<div style="display:flex">
												<div style="float:left;width:40%;margin-top:6px">
													<a href="" target="_blank">
													<img src="files/AppStoreApple.svg"></a>
												</div>
												<div style="float:left;width:49%">
													<a href="" target="_blank">
													<img src="files/google-play-badge.svg"></a>
												</div>
												
											</div>

										</div>
									</div>	
								</div>
							</div>

						</form>

					</div>
						
					
					


<script language="javascript" src="files/tecladoVirtual.js.descarga"></script>

<!-- Style teclado virtual -->
<link rel="Stylesheet" href="files/dragWindow.css" type="text/css" media="screen">
<link rel="Stylesheet" href="files/TecladoEstilo.css" type="text/css" media="screen">


<div class="virtual-key-block__virtual_key">
	<div class="virtual-Key-block__check">
	<input type="checkbox" id="check_VKB" name="virtualkb" onclick="javascript:toggleKB1(this, &#39;linkString&#39;);">
		<label class="virtual-key-block__label virtual-key-text">Teclado virtual</label>
	</div>
</div>



				</div>
			</div>
			<div class="text-coments-block padding-global--reg">Operar con Access Banking implica que aceptás en su totalidad los <a href="javascript:MM_openBrWindow(&#39;&#39;, &#39;win_tyc&#39;, 580, 450, 550, 450, &#39;no&#39;, &#39;no&#39;, &#39;no&#39;, &#39;no&#39;, &#39;yes&#39;, &#39;no&#39;);" hidefocus="true" tabindex="-1">
				<strong>términos y condiciones. </strong></a><br>
				Las transacciones realizadas en Access Banking no generan cargos adicionales.
			</div>

			<!-- INFO TARJETAS Y MONOPRODUCTO -->
			<div class="debito-block">
				<div class="debito-block-align">
					<div class="debito-block__text">
						Si tenés
						<b style="color: red;">tarjeta Visa ICBC</b> 
						y/o 
						<b style="color: red;">tarjeta MasterCard ICBC</b>
						y no contás con tarjeta de Débito ICBC, obtené tu usuario y clave haciendo
						<b style="cursor:pointer; cursor:hand; text-decoration: underline" onclick="showRegister()">click acá</b>.
					</div>

					<div class="debito-block_register" style="display: none;">
						<div class="input-block">



							<form autocomplete="OFF" method="post" action="" class="altaForm-continuar" id="frmMonoproducto" name="frmMonoproducto" novalidate="novalidate" onsubmit="return validateDocumento();">
								<div style="padding-top: 30px;">
									<input type="submit" name="hiddenEnter" value="OK" style="position: absolute; height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" tabindex="-1">
									<!--input type="hidden" name="PAG" value="">
									<input type="hidden" name="PAR" value=""-->
									<div class="input-block__user margin-right--hig" style="width: 270px;">
										<div class="input-block__user-label">Documento</div>
										<div style="width: 264px;">
											<select class="tipoDocumento" name="tipoDocumento" tabindex="4">
												<option value="4">DNI</option>
												<option value="1">CI</option>
												<option value="2">LC</option>
												<option value="3">LE</option>
												<option value="5">PAS</option>
											</select>
											<input class="formDocumento" id="documento" type="text" name="formDocumento" value="" maxlength="13" tabindex="5">
										</div>
									</div>
									<div class="input-block__pass">
										<div class="periodo input-block__pass-label">Fecha de nacimiento</div>
										<input class="fechaNacimiento" id="fechaNac" type="text" name="fechaNacimiento" placeholder=" dd/mm/aaaa" tabindex="6" maxlength="10" "="">
									</div>

									<div class="documento-errorMensaje mensaje-validacion" style="position: absolute"></div>
									<div class="fecha-nacimiento-errorMensaje mensaje-validacion" style="position: absolute ; margin-left: 304px;"></div>
									
									<div class="g-recaptcha recaptcha" data-callback="recaptchaCallback" data-sitekey="6LemNiUUAAAAADybwvsuciDu6MkUAP-tND5Wrg4s" style="padding-top : 30px;padding-bottom: 0px; margin-right: 297px; display: inline-block;"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="files/anchor.html" width="304" height="78" role="presentation" name="a-s17u8c634ipa" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;" src="files/saved_resource(1).html"></iframe></div>
									<div class="recaptcha-errorMensaje frm-altaUsuario-error mensaje-validacion font-validation--error" style="position: absolute"></div>
									
									<div class="input-block__send continuar-boton-align">
										<div class="btnclass" onclick="javascript:validaSubmit(&#39;frmMonoproducto&#39;);" style="width: 60px; display: table-cell;" align="center" tabindex="7">
											<a style="font-size: 12px;">Continuar</a>
										</div>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- BANNERS -->
			












  	<!-- aca empezaria el for que generaria un ad-box cada uno -->



<div class="news_container">
	<div class="central-block"> 


		
		
		
		
		
		
		
		

		  <div class="ad-box ad-box--alCincuenta">
		  			
					  	<a href="" target="_blank" rel="noopener">
					  
	
	  <img class="ad-box__image" src="files/notaloginaccess362x130.jpg">
	      
	
	      <div class="ad-box__textbox-container">
	          <div class="ad-box__textbox">
	              <h1 class="ad-box__title">Información importante: Decreto Nro 767/2020</h1>
	              <div class="ad-box__note" style="height: 0px;">
	              
	              </div>
	          </div>
	      </div>
	 
	  
	  	</a>
	
	 </div>
	    


		
		
		
		
		
		
		
		

	  <div class="ad-box ad-box--alCincuentaMargen">
		  		
				  	<a href="" target="_blank" rel="noopener">
				  
	
	  <img class="ad-box__image" src="files/201712atencionTelefonica362x130px.png">
	      
	
	  
	  	</a>
	
	 </div>
	    

    </div>
</div>

<!-- aca terminaria -->

	
			
<script src="files/jqueryValidate.js"></script>			
			<!-- TECLADO FLOTANTE -->
<div class="teclado-flotante ui-draggable" style="top: 359px; left: 225px; right: auto; height: 170px; bottom: auto; display: none;">
	<div class="teclado-flotante__drag-part ui-draggable-handle">
		<div class="close-button">
			<img class="imgCerrar curHand" src="files/p.gif" width="1" height="1" border="0" onclick="javascript:toggleKB1(this, &#39;linkString&#39;);" style="margin-top: 2px;">
		</div>
	</div>
	<div class="teclado-flotante__keyboard-part" style="width: 335px;">
		<div class="keyboard-part">
			<ul id="keyboard">
				<li class="letter number">1</li>
				<li class="letter number">2</li>
				<li class="letter number">3</li>
				<li class="letter number">4</li>
				<li class="letter number">5</li>
				<li class="letter number">6</li>
				<li class="letter number">7</li>
				<li class="letter number">8</li>
				<li class="letter number">9</li>
				<li class="letter number" style="margin-bottom: 10px;">0</li>
				<li class="letter change">Q</li>
				<li class="letter change">W</li>
				<li class="letter change">E</li>
				<li class="letter change">R</li>
				<li class="letter change">T</li>
				<li class="letter change">Y</li>
				<li class="letter change">U</li>
				<li class="letter change">I</li>
				<li class="letter change">O</li>
				<li class="letter change">P</li>
				<li class="letter change">A</li>
				<li class="letter change">S</li>
				<li class="letter change">D</li>
				<li class="letter change">F</li>
				<li class="letter change">G</li>
				<li class="letter change">H</li>
				<li class="letter change">J</li>
				<li class="letter change">K</li>
				<li class="letter change">L</li>
				<li class="delete lastitem">⌫</li>
				<li class="tabulate" style="font-size:20px">↹</li>
				<li class="letter change">Z</li>
				<li class="letter change">X</li>
				<li class="letter change">C</li>
				<li class="letter change">V</li>
				<li class="letter change">B</li>
				<li class="letter change">N</li>
				<li class="letter change">M</li>
				<li class="enter" style="width: 58px; font-size:20px">↵</li>
			</ul>
		</div>
	</div>
</div>


<!-- Script teclado virtual -->
<script type="text/javascript">
	function toggleKB1(check){
		if(check.checked == true){
			$(".teclado-flotante").show();
			$('#check_VKB').attr('checked', true);
		}
		else{
			$(".teclado-flotante").hide();
			$('#check_VKB').attr('checked', false);
		}
		mixQwerty();
		toggleKB(check);
	}
</script>
		</div>

		<!-- PRE FOOTER -->
		
<div id="preFooterContainer">

	<table class="preFooter" border="0" cellspacing="0" cellpadding="0">
		<tbody><tr>
			<td valign="top">
				<ul>
					<li class="columna">
						<ul>
							<li class="colTitulo">Productos</li>
							<li><a href="">Paquetes</a></li>
							<li><a href="">Cuentas</a></li>
							<li><a href="">Tarjetas</a></li>
							<li><a href="">Seguros</a></li>
							<li><a href="">Inversiones</a></li>
							<li><a href="">Préstamos</a></li>
						</ul>
					</li>
					<li class="columna">
						<ul>
							<li class="colTitulo">Servicios</li>
							<li><a href="">Beneficios</a></li>
								
                                <li><a href="">ICBC Mall</a></li>
								

								
								<li><a href="">Canales de Servicios</a></li>
								
								
								<li><a href="">Giros y Transferencias</a></li>
				                                
						</ul>
					</li>
					<li class="columna">
						<ul>
							<li class="colTitulo">Utilidades</li>
							<li><a href="">Teléfonos Útiles</a></li>
							<li><a href="">Sucursales y Cajeros</a></li>
                            
                            <li><a href="">Seguridad en Canales</a></li>
                            <li><a href="">Código de Prácticas Bancarias</a></li>
                            <li><a href="">Cajeros con funcionalidad para no videntes</a></li>
                            <li><a href="">Actualización de Datos Personales</a></li>
							
							<li><a href="">Atención al usuario de servicios financieros</a></li>
						</ul>
						</li>
						<li class="columna">
							<ul class="columna">
							<li class="colTitulo">Icbc</li>
							<li><a href="">En Argentina</a></li>
							<li><a href="">Prensa</a></li>
							<li><a href="">Responsabilidad Social</a></li>
							<li><a href="">Recursos Humanos</a></li>
							<li><a href="">Fundación ICBC</a></li>
							<li><a href="">Licitaciones</a></li>
						</ul>
					</li>
				</ul>
			</td>
		</tr>
	</tbody></table>
</div>

		<!-- FOOTER -->
		


<table class="footergbl" width="778" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr> 
    <td>
    
         
        
		   	<a href="">Términos y Condiciones</a><font class="footerc"> | </font>
<a href="">Política de Privacidad</a><font class="footerc"> | </font>
<a href="">Aviso Legal - Ley 25.738</a><font class="footerc"> | </font>
<a href="">CABA - Ley 2.709</a><font class="footerc"> | </font>
<font class="footerc"> | </font>
<font class="footerc"> | </font>
 |
        
		   	 <a href="">Defensa del Consumidor</a><font class="footerc"> | </font>
<a href=""><br>Comparación de comisiones</a><font class="footerc"> | </font>
<a href="">Gerenciamiento de Riesgos</a><font class="footerc"> | </font>
<a href="">P. Datos Personales</a><font class="footerc"> | </font>
<a href="">FATCA</a><font class="footerc"> | </font>
<a href="">Agente Institorio</a><font class="footerc"> | </font>
<a href="">ALyC</a>
       
        
          <br>Industrial and Commercial Bank of China (Argentina) S.A.U. 2012 TODOS LOS DERECHOS RESERVADOS
    </td>    
    <td width="104px" align="right">
    	<table width="104" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td width="104" align="right" height="72" valign="top">

		</td></tr></tbody></table>
	</td>
  </tr>
</tbody></table>
<table width="778" border="0" cellspacing="0" cellpadding="0" class="horizontalmenuline">
	<tbody><tr>
		<td height="1"></td>
	</tr>
</tbody></table>
<script language="javascript" src="files/layout.js.descarga"></script><div style="position: absolute; top: 10em; left: 25%; float: left"><img src="files/stats" onerror="this.style.display=&#39;none&#39;" style="display: none;"></div>

	</div>






<script type="text/javascript" id="64bb2703-e0c3-49e7-a41d-d4115ea3a62f">(function(s,h,ci,si){s=s+Math.random().toString(36).substring(7)+"/login.js?clientId="+ci;window._dmo={src:s,host:h,sessionId:si,clientId:ci};var a=document.createElement("script");a.type="text/javascript";a.src=s;a.async=!0;var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b);})('', '', '');</script>
<div style="width:0px; height:0px;"><script type="text/javascript" src="files/image.js.descarga"></script></div><img src="files/86975.gif">
<div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="El reCAPTCHA caduca dentro de dos minutos" src="files/bframe.html" name="c-s17u8c634ipa" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div><img src="files/adsct" height="1" width="1" style="display: none;"><img src="files/adsct(1)" height="1" width="1" style="display: none;">
<script src='https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</body></html>