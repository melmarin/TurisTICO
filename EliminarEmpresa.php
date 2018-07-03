<!DOCTYPE html PUBLIC>
<head>
    <?php include './HomeHeader.php'; ?>    
</head>
<!-- ####################################################################################################### -->
<body class="main">
    <div>

        <br>
        <div class="bot1_txt1 center"><span style=" font-size: 36px " >Eliminar Empresa</span></div>
        <br>
        <div class = " modal-body center"  >
            <form action="?eliminaEmpresa=eliminar" method="post" >  
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
                    <label style="font-size: 20px; display: inline-table;" for="direccion" >Dirección:&nbsp;</label>
                    <input id="direccion" name="direccion" style=" height: 30px; width: 250px;" type="text" value="<?php echo $resultado['direccion']; ?>" >
                    <br/>                  
                </div>
                <div class="form-group">
                    <label style="font-size: 20px; display: inline-table;" for="provincia" >Provincia:&nbsp;</label>
                   <input id="provincia" name="direccion" style=" height: 30px; width: 250px;" type="text" value="<?php echo $resultado['direccion']; ?>" >
                    <br/>                  
                </div>
                <div class="form-group">
                    <label style="font-size: 20px; display: inline-table;" for="tipo" >Tipo de Empresa:&nbsp;</label>
                  <input id="tipo" name="direccion" style=" height: 30px; width: 250px;" type="text" value="<?php echo $resultado['direccion']; ?>" >
                    <br/>                  
                </div>
                <div class="form-group">
                    <label style="font-size: 20px; display: inline-table;" for="costo" >Costo por Paquete:&nbsp;</label>
                    <input id="costo" name="costo" style=" height: 30px; width: 250px;" type="number" min="1" max="2500" value="<?php echo $resultado['costo']; ?>" >
                    <br/>                  
                </div>
                <div class="form-group">
                    <label style="font-size: 20px; display: inline-table;" for="puntuacion" >Puntuación :&nbsp;</label>
                    <input id="puntuacion" name="puntuacion" style=" height: 30px; width: 250px;" type="number" min="1" max="5" value="<?php echo $resultado['promedio']; ?>">
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