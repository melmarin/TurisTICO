<!DOCTYPE html PUBLIC>
<head>

    <?php include './HomeHeader.php'; ?>       
</head>
<!-- ####################################################################################################### -->
<body class="main">
    <!-- Modal content-->
    <div>
        <form action="?login=ingresar" method="POST" >
            <br>
            <div class="bot1_txt1"style="text-align: center;"><span style=" font-size: 36px " >Iniciar Sesión</span></div>
            <br>
            <div style="text-align:  center;" >                
                <div>
                    <label for="correo" style="font-size: 20px;">Correo: </label>
                    <input id="correo" name="correo" style=" height: 30px; width: 250px;" type="Text" ></td>                        
                </div>               
                <div>
                    <label style="font-size: 20px;" for="pass" >Contraseña: </label>
                    <input id="pass" name="pass" style=" height: 30px; width: 250px;" type="password" ><br>
                </div>
            </div>
            <br>
            <br>
            <div style="text-align: center;">
                <button class="find1" style=" line-height: 30px; margin: 10px;" type="submit">Aceptar</button>
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

