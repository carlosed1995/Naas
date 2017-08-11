<h2><img style="float:left; margin-bottom:50px; margin-right:20px;" src="images/search-icon.png" alt="search" title="search" width="200"/>If our sistem finds the part you looking for it will send you an executive to contact you as soon as possible, prevent AOGs.</h2>
        <p>Please one part search at a time.</p>

		<form id="contacto" action="parts.php#answerform" method="post">
            <fieldset>
            	<div class="cf" style="height:20px;"></div>
            	<div class="half col">
            	<input class="inp" type="text" name="telefono" placeholder="Part Number (000-000-00-000)"/>
                </div>
                <div class="half col">
                <input class="inp" type="text" name="motivo" placeholder="Part Name"/>
                </div>
                <div class="half col">
                <input class="inp" type="text" name="nombre" placeholder="Your full Name" required/>
                </div>
                <div class="half col">
                <input class="inp" type="email" name="email" placeholder="email" required/>
                </div>
                <div class="full col" style="margin-top:20px;">
                 <textarea class="textar" type="text" name="comments" placeholder="comments"/></textarea>
                </div>
                <div class="full col" style="margin-top:20px;">
                <input type="hidden" name="parts" value="si">
                <input name="enviar" class="boton" type="submit" id="enviar" value="Search" />
                </div>
            </fieldset>
		</form>

    	