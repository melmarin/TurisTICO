<!DOCTYPE html PUBLIC>
<head>

    <?php include './HomeHeader.php'; ?>    
</head>
<!-- ####################################################################################################### -->
<body class="main">
    <div>

        <br>
        <div class="bot1_txt1 center"><span style=" font-size: 36px " >Registrar Empresa</span></div>
        <br>
        <div class = " modal-body center"  >
            <form name="estilo" method="post" >                
                <div class="form-group">
                    <label for="nombre" style="font-size: 20px;  display: inline-table;">Nombre:&nbsp;</label>
                    <input id="correo" style=" height: 30px; width: 250px; " type="Text" name="nombre"></td>  
                    <br/>
                </div>
                <div class="form-group">
                    <label style="font-size: 20px; display: inline-table;" for="nombre" >Teléfono:&nbsp;</label>
                    <input id="telefono" style=" height: 30px; width: 250px;" type="Text" name="telefono">
                    <br/>
                </div>
                <div class="form-group">
                    <label style="font-size: 20px; display: inline-table;" for="pass" >Dirección:&nbsp;</label>
                    <input id="direccion" style=" height: 30px; width: 250px;" type="password" name="direccion">
                    <br/>                  
                </div>
                 <div class="form-group">
                     <label style="font-size: 20px; display: inline-table;" for="pass" >Provincia:&nbsp;</label>
                     <select name="provincia" class="nice-select wide">
                         <option data-display="Provincia">Provincia</option>
                         <option value="San José">San Jose</option>
                         <option value="Heredia">Heredia</option>
                         <option value="Cartago">Cartago</option>
                         <option value="Guanacaste">Guanacaste</option>
                         <option value="Limón">Limón</option>
                         <option value="Alajuela">Alajuela</option>
                         <option value="Puntarenas">Puntarenas</option>
                     </select>
                    <br/>                  
                </div>
                 <div class="form-group">
                    <label style="font-size: 20px; display: inline-table;" for="pass" >Tipo Empresa:&nbsp;</label>
                        <select name="Tipo" class="nice-select wide">
                         <option data-display="Tipo">Tipo</option>                        
                         <option value="Actividades Tematicas">Actividades Tematicas</option>                         
                         <option value="Agencia de Viajes">Agencia de Viajes</option>                         
                         <option value="Gastronomia">Gastronomía</option>
                         <option value="Hospedaje">Hospedaje</option>
                         <option value="Rent a Car">Rent a Car</option>
                         <option value="Tranposte Acuatico y Aereo">Tranposte Acuatico y Aereo</option>
                     </select>
                    <br/>                  
                </div>
                 <div class="form-group">
                    <label style="font-size: 20px; display: inline-table;" for="pass" >Contraseña:&nbsp;</label>
                    <input id="pass" style=" height: 30px; width: 250px;" type="password" name="promedio">
                    <br/>                  
                </div>
                 <div class="form-group">
                    <label style="font-size: 20px; display: inline-table;" for="pass" >Contraseña:&nbsp;</label>
                    <input id="pass" style=" height: 30px; width: 250px;" type="password" name="promedio">
                    <br/>                  
                </div>
            </form>
        </div>
        <br>
        <br>
        <div class = "center">
            <input class="find1" style=" line-height: 30px; margin: 10px; "
                   value="Aceptar" onclick="registrar()" type="button">
            <input class="find1" style=" line-height: 30px; margin: 10px; background: tomato"
                   value="Cancelar"  onclick="" type="button">
        </div>

    
</div>
</body>
<!-- ####################################################################################################### -->
<footer>
    <?php include './Footer.php'; ?>  
    </