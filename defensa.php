<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defensa</title>
    <link rel="stylesheet" href="/defensa/styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            scroll-behavior: smooth;
        }

        img{
            display: block;
            width: 50%;
            margin: auto;
            padding-top: 2rem;
        }

        h2 {
            text-align: center;
            margin: 25px;
        }

        header {
            margin-top: 0;
            margin-bottom: 75px;
            background-color: #6170A1;
        }

        .title{
            padding-top: 1rem;
        }

        .h2footer{
            font-size: 1rem;
            color: white;
            text-aling: center;
        }

        .act {
            display:flex;
            flex-wrap: wrap;
            gap: 2rem;
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
        }

        i {
            padding-left: 2px;
            padding-top: 2px;
        }
        a {
            float: center;
            text-decoration: none;
            font-size: 20px;
            padding: 10px;
        }
        nav>a {
            color: white;
            display: inline;
            float: center;
            margin: 30px;
        }

        nav>a:hover {
            background-color: #7FBFF9;
        }

        nav {
            text-align: center;
            margin-top: 20px;
            padding-bottom: 10px;
        }

        h1 {
            color: white;
            text-align: center;
            font-size: 60px;
        }

        body {
            background-color: aliceblue;
        }

        .boton {
            position: sticky;
            width: 50px;
            height: 50px;
            top: 90%;
            left: 90%;
            background-color: #EEEEEE;
            border-radius: 50%;
        }

        .boton:hover {
            box-shadow: 5px 5px 15px rgba(189, 189, 189, 1);
        }

        .bt:hover {
            letter-spacing: 3px;
            background-color: #344EA6;
            color: hsl(0, 0%, 100%);
            box-shadow: rgb(93 24 220) 0px 3px 14px 0px;
        }

        .boton>a {
            position: absolute;
            text-decoration: none;
            padding: 12px;
            top: 0px;
        }

        .act>div {
            background-color: white;
            width: 400px;
            height: 400px;
            border-radius: 15px;
            box-shadow: 5px 5px 5px 5px rgba(175, 175, 175, 1);
            margin-left: 25px;
            
        }

        .bt {
            padding: 17px 40px;
            border-radius: 50px;
            cursor: pointer;
            border: 0;
            background-color: #6170A1;
            box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-size: 10px;
            transition: all 0.5s ease;
            color: white;
        }

        .bt:active {
            letter-spacing: 3px;
            background-color: hsl(261deg 80% 48%);
            color: hsl(0, 0%, 100%);
            box-shadow: rgb(93 24 220) 0px 0px 0px 0px;
            transform: translateY(10px);
            transition: 100ms;
        }

        label,
        input,
        select{
            margin: 8px;
        }
        .in {
            width: 95%;
        }

        .p6>form>.bt {
            margin-top: 105px;
            width: 95%;
        }

        .p1>form>.bt {
            margin-top: 80px;
            width: 95%;
        }

        .p5>form>.bt {
            margin-top: 35px;
            width: 95%;
        }

        .p4>form>.bt {
            margin: 10px;
            width: 40%;
        }

        .p3>form>.bt {
            margin-top: 5px;
            width: 95%;
        }

        .fecha {
            margin-left: 15.5rem;
        }

        footer {
            margin-top: 150px;
            width: 100%;
            background-color: #6170A1;
            display: block;
            flex-wrap: wrap;
            justify-content: center;
        }

        img {
            height: 80px;
            width: 500px;
        }

        .foo {
            color: white;
        }

        .fo {
            margin-left: 400px;
        }
    </style>
</head>

<body>
    <header>
        <h1 class="title" id="title">BLOQUE 1</h1>
        <nav id="nav">
            <a href="#p1">Parte 1</a>
            <a href="#p2">Parte 2</a>
            <a href="#p3">Parte 3</a>
            <a href="#p4">Parte 4</a>
            <a href="#p5">Parte 5</a>
            <a href="#p6">Parte 6</a>
        </nav>
    </header>
    <section>

    </section>
    <div class="boton"><a href="#title"><i class="fa-solid fa-home"></i></a></div>

    <div class="act">
        <div id="p1" class="p1">
            <!-- PARTE 1 -->
            <h2>Carácteres</h2>
            <p class="fecha">Fecha:<?php echo date("d/m/Y");?> </p>
            <form method="get" id="form1">
<label for="name">Nombre: </label>
<input class="in" type="text" name="name" pattern="[A-Za-z]+" title="Solo se permiten letras" required><br>
<label for="ap">Apellido: </label>
<input class="in" type="text" name="ap" pattern="[A-Za-z]+" title="Solo se permiten letras" required><br>

                <input class="bt" type="submit" value="Enviar">
            </form>
            <?php
        if(isset($_GET['name']) && isset($_GET['ap'])) {
            $name = $_GET['name'];
            $ap = $_GET['ap'];
        
            // Verificar si solo se ingresaron letras
            if (preg_match("/^[a-zA-Z]+$/", $name) && preg_match("/^[a-zA-Z]+$/", $ap)) {
                $nom = "$name $ap";
                echo "<br><p>Bienvenido $name $ap <br>La cantidad de caracteres es de: ".strlen($nom);
            } else {
                echo "Por favor, ingresa solo letras en los campos de Nombre y Apellido.";
            }
        }
            ?>
        </div>


        <div id="p2" class="p2">
            <!-- PARTE 2 -->
            <h2>Operaciones</h2>
            <form method="get" id="form2">
                <label for="num">Número 1: </label><input class="in" type="number" name="num">
                <br>
                <label for="num2">Número 2: </label><input class="in" type="number" name="num2">
                <br>
                <div class="botones">
                    <input class="bt" type="submit" value="+" name="+">
                    <input class="bt" type="submit" value="-" name="-">
                    <input class="bt" type="submit" value="*" name="*">
                    <input class="bt" type="submit" value="/" name="/">
                </div>
            </form>
            <?php
                $num1=!empty($_GET['num']) ? $_GET['num'] : null;
                $num2=!empty($_GET['num2']) ? $_GET['num2'] : null;
                $suma=!empty($_GET['+']) ? $_GET['+'] : null;
                $resta=!empty($_GET['-']) ? $_GET['-'] : null;
                $mult=!empty($_GET['*']) ? $_GET['*'] : null;
                $div=!empty($_GET['/']) ? $_GET['/'] : null;

                if ($suma=="+"){
                    $suma2=$num1+$num2;
                    echo "Resultado: $suma2";
                }
                elseif($resta=="-"){
                    $suma2=$num1-$num2;
                    echo "Resultado: $suma2";
                }
                elseif($mult=="*"){
                    $suma2=$num1*$num2;
                    echo "Resultado: $suma2";
                }
                elseif($div=="/"){
                    $numMayor = max($num1, $num2);
                    $numMenor = min($num1, $num2);
                    if ($numMenor != 0) {
                        $suma2 = $numMayor / $numMenor;
                        echo "Resultado: $suma2";
                    } else {
                        echo "No se puede dividir por cero.";
                    }
                }
                
            ?>
        </div>

        <div id="p3" class="p3">
            <!-- PARTE 3 -->
            <h2>Calcular área</h2>
            <form method="post" id="form3">
                <label for="figura">Selecciona una figura:</label>
                <select name="figura" id="figura">
                    <option value="Seleccion">Seleccion</option>
                    <option value="cuadrado">Cuadrado</option>
                    <option value="rectangulo">Rectángulo</option>
                    <option value="triangulo">Triángulo</option>
                    <option value="circulo">Círculo</option>
                </select>
                <label for="lado1" id="label_lado1" style="display: none;">Lado 1:</label>
                <input type="number" name="lado1" id="lado1" style="display: none;">
                <label for="lado2" id="label_lado2" style="display: none;">Lado 2:</label>
                <input type="number" name="lado2" id="lado2" style="display: none;">
                <label for="base" id="label_base" style="display: none;">Base:</label>
                <input type="number" name="base" id="base" style="display: none;">
                <label for="altura" id="label_altura" style="display: none;">Altura:</label>
                <input type="number" name="altura" id="altura" style="display: none;">
                <label for="radio" id="label_radio" style="display: none;">Radio:</label>
                <input type="number" name="radio" id="radio" style="display: none;">
                <br><br>
                <input class="bt" type="submit" name="calcular" value="Calcular área">
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $figura = isset($_POST['figura']) ? $_POST['figura'] : null;
                    $pi=3.14;
                    $area = 0;
                    switch ($figura) {
                        case 'cuadrado':
                            $lado1 = $_POST['lado1'];
                            $area = $lado1 * $lado1;
                            echo "El área es: " . $area;
                            break;
                        case 'rectangulo':
                            $lado1 = $_POST['lado1'];
                            $lado2 = $_POST['lado2'];
                            $area = $lado1 * $lado2;
                            echo "El área es: " . $area;
                            break;
                        case 'triangulo':
                            $base = $_POST['base'];
                            $altura = $_POST['altura'];
                            $area = ($base * $altura) / 2;
                            echo "El área es: " . $area;
                            break;
                        case 'circulo':
                            $radio = $_POST['radio'];
                            $area = $pi * $radio * $radio;
                            echo "El área es: " . $area;
                            break;
                        default:
                            $area = "Selecciona una figura válida.";
                            break;
                    }
                }
            ?>
            <script>
                document.getElementById('figura').addEventListener('change', function() {
                    var figura = this.value;
                    var formulario = document.querySelector('.p3');
                    var campos = formulario.querySelectorAll('input[type="number"], label');
                    campos.forEach(function(element) {
                        element.style.display = 'none';
                    });

                    if (figura === 'cuadrado') {
                        document.getElementById('label_lado1').style.display = 'block';
                        document.getElementById('lado1').style.display = 'block';
                    } else if (figura === 'rectangulo') {
                        document.getElementById('label_lado1').style.display = 'block';
                        document.getElementById('lado1').style.display = 'block';
                        document.getElementById('label_lado2').style.display = 'block';
                        document.getElementById('lado2').style.display = 'block';
                    } else if (figura === 'triangulo') {
                        document.getElementById('label_base').style.display = 'block';
                        document.getElementById('base').style.display = 'block';
                        document.getElementById('label_altura').style.display = 'block';
                        document.getElementById('altura').style.display = 'block';
                    } else if (figura === 'circulo') {
                        document.getElementById('label_radio').style.display = 'block';
                        document.getElementById('radio').style.display = 'block';
                    }
                });
            </script>
        </div>

        <div id="p4" class="p4">
            <!-- PARTE 4 -->
            <h2>Convertidor de Medidas</h2>
            <form method="get">
                <label for="cantidad">Cantidad:</label>
                <input class="in" type="number" id="cantidad" name="cantidad" required>
                <label for="unidad_origen"></label>
                <select id="unidad_origen" name="unidad_origen" required>
                    <option value="centimetros">Centímetros</option>
                    <option value="metros">Metros</option>
                    <option value="kilometros">Kilómetros</option>
                    <option value="milimetros">Milímetros</option>
                </select>
                <br><br>
                <label for="unidad_destino">Convertir a:</label><br><br>
                <button class="bt" type="submit" name="unidad_destino" value="centimetros">Centímetros</button>
                <button class="bt" type="submit" name="unidad_destino" value="metros">Metros</button>
                <button class="bt" type="submit" name="unidad_destino" value="kilometros">Kilómetros</button>
                <button class="bt" type="submit" name="unidad_destino" value="milimetros">Milímetros</button>
                <br><br>
            </form>

            <?php
                function convertir($cantidad, $unidad_origen, $unidad_destino) {
                    switch ($unidad_origen) {
                        case 'centimetros':
                            switch ($unidad_destino) {
                                case 'metros':
                                    return $cantidad / 100;
                                case 'kilometros':
                                    return $cantidad / 100000;
                                case 'milimetros':
                                    return $cantidad * 10;
                                default:
                                    return "$cantidad";
                            }
                        case 'metros':
                            switch ($unidad_destino) {
                                case 'centimetros':
                                    return $cantidad * 100;
                                case 'kilometros':
                                    return $cantidad / 1000;
                                case 'milimetros':
                                    return $cantidad * 1000;
                                default:
                                    return "$cantidad";
                            }
                        case 'kilometros':
                            switch ($unidad_destino) {
                                case 'centimetros':
                                    return $cantidad * 100000;
                                case 'metros':
                                    return $cantidad * 1000;
                                case 'milimetros':
                                    return $cantidad * 1000000;
                                default:
                                    return "$cantidad";
                            }
                        case 'milimetros':
                            switch ($unidad_destino) {
                                case 'centimetros':
                                    return $cantidad / 10;
                                case 'metros':
                                    return $cantidad / 1000;
                                case 'kilometros':
                                    return $cantidad / 1000000;
                                default:
                                    return "$cantidad";
                                }
                    }
                }
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    if(isset($_GET["cantidad"]) && isset($_GET["unidad_origen"]) && isset($_GET["unidad_destino"])) {
                        $cantidad = $_GET["cantidad"];
                        $unidad_origen = $_GET["unidad_origen"];
                        $unidad_destino = $_GET["unidad_destino"];
                        $resultado = convertir($cantidad, $unidad_origen, $unidad_destino);
                        echo "<p>$cantidad $unidad_origen son $resultado $unidad_destino.</p>";
                    } 
                }
            ?>
        </div>

        <div id="p5" class="p5">
            <!-- PARTE 5 -->
            <h2>Calculadora de Diferencia de Fechas</h2>
            <form method="get" action="">
                <label>Fecha 1:</label>
                <input class="in" type="date" name="fecha1" required><br><br>
                <label>Fecha 2:</label>
                <input class="in" type="date" name="fecha2" required><br><br>
                <input class="bt" type="submit" name="calcular" value="Calcular Diferencia">
            </form>

            <?php
                if(isset($_GET['calcular'])) {
                $fecha1 = $_GET['fecha1'];
                $fecha2 = $_GET['fecha2'];
                $diff = abs(strtotime($fecha2) - strtotime($fecha1));
                $dias = floor($diff / (60*60*24));
                echo "<p>La diferencia entre las fechas es de $dias días.</p>";
                }
            ?>
        </div>

        <div id="p6" class="p6">
            <!-- PARTE 6 -->
            <h2>Inicio de Sesión</h2>
            <form method="get">
                <label for="Usuario">Usuario:</label>
                <input class="in" type="text" id="Usuario" name="Usuario" required><br>
                <label for="contrasenia">Contraseña:</label>
                <input class="in" type="password" id="contrasenia" name="contrasenia" maxlength="8" required><br>
                <input class="bt" type="submit" value="Ingresar">
            </form>
            <?php
                if (isset($_GET['contrasenia'])) {
                    $contrasenia = trim($_GET['contrasenia']);
                    if (strlen($contrasenia) >= 8 && strlen($contrasenia) <= 16) {
                        echo "Login exitoso";
                    } else {
                        echo "Error de login: La contraseña debe tener entre 8 y 16 caracteres";
                    }
                }
            ?>
        </div>
        <footer> 
            <img src="LOGOUTU.png" alt="img">
            <h2 class="h2footer">©Todos los derechos reservados.</h2>
        </footer>
    </body>
</html>
