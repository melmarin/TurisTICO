<!DOCTYPE html PUBLIC>
<head>

    <?php include './HomeHeader.php'; ?>    
</head>
<!-- ####################################################################################################### -->
<body class="main">
    <!-- Modal content-->
    <div>
        <form name="estilo" method="post" >
            <br>
            <div class="bot1_txt1"style="text-align: center;"><span style=" font-size: 36px " >Iniciar Sesión</span></div>
            <br>
            <div style="text-align:  center;" >                
                <div>
                    <label for="correo" style="font-size: 20px;">Correo: </label>
                    <input id="correo" style=" height: 30px; width: 250px;" type="Text" name="promedio"></td>                        
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
                       value="Aceptar" onclick="iniciarSession()" type="button">
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
    function iniciarSession() {
        correo = document.getElementById('correo').value;      
        pass = document.getElementById('pass').value;

        var parametros =
                {
                    "correo": correo,                  
                    "pass": pass
                };
         var resultado="";      
        $.ajax({
            url: './Controller/LoginController.php',
            type: 'POST',
            dataType: 'text',
            async: false,
            data: parametros
        }).done(function (resp) {            
            resultado = resp;           
            //window.location = "index.php";
        }).fail(function (error, textStatus, errorThrown) {
            console.log(error.status); //Check console for output
            //$("#loadIMg").hide();//#datos es un div
        });
        resultado = resultado.trim();
        if(resultado === "1" ){
           window.location = "indexLoginAdmin.php" 
        } else if(resultado === "0") {
           window.location = "indexLoginUser.php" 
        } else {
            alert("Correo o contraseña incorrectos. Por favor verificarlos!");
        }
        
    }
</script>
