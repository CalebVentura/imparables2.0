    <?php include_once 'includes/templates/header.php';?>  

        <section class="seccion contenedor">

            <h2>Registro de Participantes </h2>

            <div class="contenedor-formulario">
                <div class="wrap">
                    <form action="guardar_registro.php" method="post" class="formulario">

                            <div class="input-group">
                                <input type="text" id="nombre" name="nombre">
                                <label class="label" for="nombre">Nombre: </label>
                            </div>
                            <div class="input-group">
                                <input type="text" id="apellido" name="apellido">
                                <label class="label" for="apellido">Apellido Completo:</label>
                            </div>
                            <div class="input-group">
                                <input type="number" id="edad" name="edad">
                                <label class="label" for="edad">Edad: </label>
                            </div>
                            <div class="input-group">
                                <input type="number" id="telefono" name="telefono">
                                <label class="label" for="telefono">Numero de celular: </label>
                            </div>       
                            <div class="input-group radio">
                                <input type="radio" name="sexo" id="hombre" value="Hombre">
                                <label for="hombre">Hombre</label>
                                <input type="radio" name="sexo" id="mujer" value="Mujer">
                                <label for="mujer">Mujer</label>
                            </div>

                            <div class="input-group select">
                                <label for="talla-polo">Escoge tu talla de polo: </label>
                                <select id="talla-polo" name="talla-polo" class="talla-polo" required>
                                    <option value="">Talla</option>
                                    <option value="14">14</option>
                                    <option value="16">16</option>                                    
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                </select>
                            </div>
                            <div class="input-group radio">
                                <input type="radio" name="procedencia" id="samaria" value="Samaria">
                                <label for="samaria">Samaria</label>
                                <input type="radio" name="procedencia" id="externo" value="Externo">
                                <label for="externo">Externo</label>
                            </div>
                            <div class="input-group checkbox">
                                <input type="checkbox" name="terminos" id="terminos" value="true">
                                <label for="terminos">Acepto los Terminos y Condiciones</label>
                            </div>
                            <input type="submit" id="btn-submit" value="Enviar" name="submit">

                    </form>
                    
                </div>
                
            </div>
            <p>TERMINOOS Y CONDICIONES: Toda la información brindada es confidencial y será usada con el simple fin de realizar una buena labor en el registro y en el proceder de la IV escuela Imparables</p><br>
            <p>Una vez finalice su inscripcion, proceda por favor a pagar el monto de acuerdo a los precios establecidos a la cuenta BCP de banco: <span style="font-size: 22px; font-weight: bold;"> 19134888437043 </span>   a nombre de David Medina Noreña (Pastor)</p>
        </section><!-- Registro de usuarios -->

    <?php include_once 'includes/templates/footer.php';?>
