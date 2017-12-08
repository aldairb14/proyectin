<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Secundaria tecnica No. 16</title>
<script src="js/jquery.min.js" type="text/javascript"></script>
<link href="bootstrap/bootstrap.min.css" rel="stylesheet"/>    
<link href="bootstrap/bootstrap-theme.css" rel="stylesheet"/>
<link href="fonts/OleoScript-Regular.ttf" rel="stylesheet"/>
<link rel="shortcut icon" href="imagenes/logo.png">
</head>
    
    <style>
        @font-face{
            font-family:fuentechida;
            src: url(fonts/OleoScript-Regular.ttf);
        }
        body{
            background-image: url(imagenes/GE-fondo2.jpg);
            /*background-image: url(imagenes/background-3.jpg);*/
            background-attachment: fixed;;
            background-position: center;;
            background-size: cover;
            background-repeat: no-repeat;;
        }    

        fieldset{
            transition:2s;
            margin-bottom: 50px;
            border-color: rgba(255,255,255,1);
            border-style: groove;
            border-width: 5px;
            border-radius: 20px;

        }
        .formulario{

            background-color: #1C1C1C;
            width: 30%;
            transition:2s;
            margin-top: 60px;
            box-shadow: 0px 0px 40px white, 0px 0px 80px white;
            padding-bottom: 50px;


        }
        .contenedor{

            background-color: #1C1C1C;
            width: 30%;
            transition:2s;
            margin-top: 60px;
            box-shadow: 0px 0px 40px white, 0px 0px 80px white;
            padding-bottom: 50px;


        }
        .logo{
            height: 100px;
            margin-top: 15px;

        }
        .espaciado{
            margin-top: 40px;
        }
        h3,h4{
            color: white;
            text-align: center;;
        }
        legend{
            border: none;;
        }
        .Input{
            transition:.8s;
            background-color: rgba(0,0,0,.5);
            color: white;
            border-color: #006;
            border-bottom-color: white;
            border-bottom-style: groove;
            border-right:none;
            border-left:none;
            border-top: none;
            border-width: 6px; 

        }
        .Input:hover{
            transition:.8;
            background-color: rgba(55,71,79,.5);
            
            box-shadow: inset;
            border-bottom-color: #87ceff;


        }
        .Input:focus{
            trasition:.8s;
            border-bottom-color: white;
        }
        .btnss{
            margin-top: 20px;
        }
        @media screen and (max-width:750px){
            .formulario{
                width: 95%;
                margin-top: 10px;

            }

        }
    </style>
    
<body>

        <div class="container formulario">
            <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <img src="imagenes/logo.png" class="logo center-block">
                    </div>
            </div>
            <div class="espaciado"></div>


            <div class="row">

                <fieldset class="col-xs-10 col-xs-offset-1">
                    <legend class="hidden-xs"><h3>inicio de sesíon </h3></legend>

                    <form class="form-horizontal" action="php/controlador.php" method="POST">
                        <div clas="form-group">
                            <label class="col-xs-12" for="usuario"><h4>Usuario</h4></label>
                            <div clas="col-xs-10 col-xs-offset-1">
                                <input type="text" id="usuario" name="user"class="form-control Input" >
                            </div>
                        </div>
                        <div clas="form-group">
                            <label class="col-xs-12" for="password"><h4>Contraseña</h4></label>
                            <div clas="col-xs-10 col-xs-offset-1">
                                <input type="password" id="password" name="password" class="form-control Input" >
                            </div>

                        </div>
                        <div class="form-group">
                            <button type="buttom" class="btn btn-primary center-block btnss">Aceptar</button>
                        </div>
                    </form>
                </fieldset>
            </div>

        </div>
         
</body>
</html>
