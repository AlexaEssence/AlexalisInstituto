<?php
    include_once('assets/php/registros.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Beenati</title>
    <link rel="stylesheet" href="assets/style/styleInst.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="pink lighten-5">

    <div class="header">
        <h1>INSTITUTO BEENATI</h1>
    </div>

    <h2>Agregar Estudiante</h2>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

        <div class="row">

            <div class="input-field col s6">
                <input name="txtCedula" id="ID" type="number" class="validate" min="1000000" max="40000000" required>
                <label for="ID">Cédula</label>
            </div>

            <div class="input-field col s6">
                <input name="txtNombre" id="first_name" type="text" class="validate" pattern="^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$" required>
                <label for="first_name">Primer Nombre</label>
            </div>
            
        </div>

        <div class="row">
            
            <div class="input-field col s4">
                <input name="txtMate" id="mate" type="number" class="validate" min="0" max="20" required>
                <label for="mate">Nota de Matemática</label>
            </div>
 
            <div class="input-field col s4">
                <input name="txtFisica" id="fisica" type="number" class="validate" min="0" max="20" required>
                <label for="fisica">Nota de Física</label>
            </div>

            <div class="input-field col s4">
                <input name="txtProg" id="prog" type="number" class="validate" min="0" max="20" required>
                <label for="prog">Nota de programación</label>
            </div>
        
            <button class="btn waves-effect waves-light indigo darken-1" type="submit" name="btn" value="Registro">Registrar
             <i class="material-icons right">send</i>
            </button>

        </div>
        
    </form>

    <hr>

    <h2>Consultas</h2>

    <div class="row ">
        
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class= "col s6">
            <input type="submit" value="Nota promedio de cada materia" name="B1" class="waves-effect waves-light btn indigo darken-1"><br>
            <label for="">Matemática</label><br>
            <input type="number" readonly value="<?php echo $TOT1[0] ?>">
            <label for="">Física</label><br>
            <input type="number" readonly value="<?php echo $TOT1[1] ?>">
            <label for="">Programación</label><br>
            <input type="number" readonly value="<?php echo $TOT1[2] ?>">
        </form>
       
       
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class= "col s6">
             <input type="submit" value="Número de alumnos aprobados en cada materia" name="B2" class="waves-effect waves-light btn indigo darken-1"><br>
             <label for="">Matemática</label><br>
             <input type="number" readonly value="<?php echo $TOT2[0]; ?>">
             <label for="">Física</label><br>
             <input type="number" readonly value="<?php echo $TOT2[1]; ?>">
             <label for="">Programación</label><br>
             <input type="number" readonly value="<?php echo $TOT2[2]; ?>">
         </form>
      
    </div>

    <div class="row">
       
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class= "col s6">
            <input type="submit" value="Número de alumnos aplazados en cada materia" name="B3" class="waves-effect waves-light btn indigo darken-1"><br>
            <label for="">Matemática</label><br>
            <input type="number" readonly value="<?php echo $TOT3[0]; ?>">
            <label for="">Física</label><br>
            <input type="number" readonly value="<?php echo $TOT3[1]; ?>">
            <label for="">Programación</label><br>
            <input type="number" readonly value="<?php echo $TOT3[2]; ?>">
         </form>
       
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class= "col s6">
              <input type="submit" value="Nota máxima en cada materia" name="B7" class="waves-effect waves-light btn indigo darken-1"><br>
              <label for="">Matemática</label><br>
              <input type="number" readonly value="<?php echo $TOT7[0]; ?>">
              <label for="">Física</label><br>
              <input type="number" readonly value="<?php echo $TOT7[1]; ?>">
              <label for="">Programación</label><br>
              <input type="number" readonly value="<?php echo $TOT7[2]; ?>">
         </form>
    </div>

    <div class="row">
       
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
             <input type="submit" value="Número de alumnos que aprobaron todas las materias" name="B4" class="waves-effect waves-light btn indigo darken-1"><br>
             <input type="number" readonly value="<?php echo $TOT4; ?>">
         </form>
       
    
       
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
             <input type="submit" value="Número de alumnos que aprobaron una sola materia" name="B5" class="waves-effect waves-light btn indigo darken-1"><br>
             <input type="number" readonly value="<?php echo $TOT5; ?>">
         </form>
       
    
       
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
             <input type="submit" value="Número de alumnos que aprobaron dos materias" name="B6" class="waves-effect waves-light btn indigo darken-1"><br>
             <input type="number" readonly value="<?php echo $TOT6; ?>">
         </form>
      
    </div>

    <br><br>

    <div class="footer">
        <h5>&copy; Todos los derechos reservados. <br> BEENATI <br> URBE2023.</h5>
    </div>

</body>
</html>