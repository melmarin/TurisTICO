<!DOCTYPE html PUBLIC>
<head>
    <?php include './HomeHeader.php'; ?>    
</head>
<!-- ####################################################################################################### -->
<body class="main">
    <div>

        <br>
        <div class="bot1_txt1 center"><span style=" font-size: 36px " >Actualizar Empresa</span></div>
        <br>
        <div class = " modal-body center"  >
            <form action="?empresa=actualizar"  method="post" >  
                <input id="nombre" name="nombre" class="hidden" type="Text" value="<?php echo $resultado['id_empresa']; ?>" >
                <div class="form-group">                    
                    <label for="nombre" style="font-size: 20px;  display: inline-table;">Nombre:&nbsp;</label>
                    <input id="nombre" name="nombre" style=" height: 30px; width: 250px; " type="Text" value="<?php echo $resultado['nombre']; ?>" >
                    <br/>
                </div>
                <div class="form-group">
                    <label style="font-size: 20px; display: inline-table;" for="telefono" >Teléfono:&nbsp;</label>
                    <input id="telefono" name="telefono" style=" height: 30px; width: 250px;" type="Text"  value="<?php echo $resultado['telefono']; ?>">
                    <br/>
                </div>
                <div class="form-group">
                    <label style="font-size: 20px; display: inline-table;" for="pass" >Dirección:&nbsp;</label>
                    <input id="direccion" name="direccion" style=" height: 30px; width: 250px;" type="text" value="<?php echo $resultado['direccion']; ?>" >
                    <br/>                  
                </div>
                <div class="form-group">
                    <label style="font-size: 20px; display: inline-table;" for="pass" >Provincia:&nbsp;</label>
                    <select id="provincia" name="provincia" style=" height: 30px; width: 250px;" class="nice-select wide">
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
                    <label style="font-size: 20px; display: inline-table;" for="pass" >Tipo de Empresa:&nbsp;</label>
                    <select id="tipo" name="tipo" style=" height: 30px; width: 250px;" class="nice-select wide">
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
                    <label style="font-size: 20px; display: inline-table;" for="pass" >Costo por Paquete:&nbsp;</label>
                    <input id="costo" name="costo" style=" height: 30px; width: 250px;" type="number" min="1" max="2500" value="<?php echo $resultado['costo']; ?>" >
                    <br/>                  
                </div>
                <div class="form-group">
                    <label style="font-size: 20px; display: inline-table;" for="pass" >Puntuación :&nbsp;</label>
                    <input id="pass" name="promedio" style=" height: 30px; width: 250px;" type="number" min="1" max="5" value="<?php echo $resultado['promedio']; ?>">
                    <br/>                  
                </div>
                <br>
                <br>
                <div class = "center">
                    <button class="find1" style=" line-height: 30px; margin: 10px; " type="submit">Actualizar</button>
                    <input class="find1" style=" line-height: 30px; margin: 10px; background: tomato"
                           value="Cancelar"  onclick="" type="button">
                </div>
            </form>
        </div>
    </div>
</body>
<!-- ####################################################################################################### -->
<footer>
    <?php include './Footer.php'; ?>  
    </