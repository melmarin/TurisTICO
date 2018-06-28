<!DOCTYPE html PUBLIC>
<head>

    <?php include './HomeHeader.php'; ?>    
</head>
<!-- ####################################################################################################### -->
<body class="main">
    <!-- Modal content-->
    <div>
        <form name="estilo" method="post" >
            <div class="bot1_txt1"style="text-align: center;"><span style=" font-size: 36px " >Registro</span></div>
            <br>
            <div style="text-align:  center;" >                
                <div>
                    <label for="correo" style="font-size: 20px;">Correo: </label>
                    <input id="correo" style=" height: 30px; width: 250px;" type="Text" name="promedio"></td>                        
                </div>
                <div>
                    <label style="font-size: 20px;" for="nombre" >Nombre: </label>
                    <input id="nombre" style=" height: 30px; width: 250px;" type="Text" name="promedio"><br>
                </div>
                <div>
                    <label style="font-size: 20px;" for="pass" >Contraseña: </label>
                    <input id="pass" style=" height: 30px; width: 250px;" type="password" name="promedio"><br>
                </div>
            </div>
            <br>
            <br>
            <div style="text-align: center;">
                <input class="find1" style=" line-height: 30px; margin: 10px; "
                       value="Aceptar" onclick="registrar()" type="button">
                <input class="find1" style=" line-height: 30px; margin: 10px; background: tomato"
                       value="Cancelar"  onclick="" type="button">
            </div>

        </form>
    </div>    
</body>
<!-- ####################################################################################################### -->
<footer>
    <?php include './Footer.php'; ?>  
</footer>
<script language="JavaScript">
    function registrar() {
        correo = document.getElementById('correo').value;
        nombre = document.getElementById('nombre').value;
        pass = document.getElementById('pass').value;

        var parametros =
                {
                    "correo": correo,
                    "nombre": nombre,
                    "pass": pass
                };
               
        $.ajax({
            url: './Controller/UsuarioController.php',
            type: 'POST',
            dataType: 'text',
            data: parametros
        }).done(function (resp) {
            alert(resp);
            window.location = "index.php";
        }).fail(function (error, textStatus, errorThrown) {
            console.log(error.status); //Check console for output
            //$("#loadIMg").hide();//#datos es un div
        });
    }
</script>