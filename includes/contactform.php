<form id="contacto" action="" method="post">
	<fieldset>	
		<h1>On-line Contact Form:</h1>
        <div class="clear" style="height:20px;"></div>
		<input class="inp" type="text" name="nombre" placeholder="Full Name" title="Full Name" required/>
		<input class="inp" type="email" name="email" placeholder="Email" title="email" required/>
		<input class="inp" type="text" name="firma" placeholder="Company name" title="your profession" />
		<input class="inp" type="text" name="telefono" placeholder="Phone Number" title="cell or office number" required/>
		<select class="selecto" name="motivo" id="motivo" placeholder="Why do you contact us?" title="Why do you contact us?" required>
        <option value="">Motivo de su contacto...</option>
		<option value="info">informacion</option>
        <option value="Presupuesto">Presupuesto</option>			
		<option value="entrevista">Solicitud de entrevista</option>
		</select>
		<textarea class="textar" name="comentario" cols="0" rows="4" id="comentarios" placeholder="Comments" title="Drag the corner to enlarge"></textarea>                   
		<input name="mandar" class="boton" type="submit" id="enviar" value="Enviar" />
	</fieldset>
   
</form>