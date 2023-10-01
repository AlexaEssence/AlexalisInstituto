<?php
    session_start();

    if(!isset($_SESSION['estudiantes'])){
        $_SESSION['estudiantes'] = [];
    }

    if(isset($_POST['btn']) && $_POST['btn'] == 'Registro'){

        $cedula = $_POST['txtCedula'];
        $nombre = $_POST['txtNombre'];
        $notaMate = $_POST['txtMate'];
        $notaFisica = $_POST['txtFisica'];
        $notaProg = $_POST['txtProg'];

        $estudiante = [$cedula, $nombre, $notaMate, $notaFisica, $notaProg];
        $_SESSION['estudiantes'][] = $estudiante;

    }

    if(isset($_POST['B1']) && $_POST['B1'] == 'Nota promedio de cada materia'){
        $TOT1 = [0, 0, 0];
        $R = 0;
        foreach($_SESSION['estudiantes'] as $estudiante){
            $TOT1[0]+=$estudiante[2]; $TOT1[1]+=$estudiante[3]; $TOT1[2]+=$estudiante[4];
            $R++;
        }
        if($R!=0){
            $TOT1[0]=$TOT1[0]/$R; $TOT1[1]=$TOT1[1]/$R; $TOT1[2]=$TOT1[2]/$R;
        }
    }

    if(isset($_POST['B2']) && $_POST['B2'] == 'Número de alumnos aprobados en cada materia'){
        $TOT2 = [0, 0, 0];
        foreach($_SESSION['estudiantes'] as $estudiante){
            if($estudiante[2] >= 9.5){
                $TOT2[0]++;
            }
            if($estudiante[3] >= 9.5){
                $TOT2[1]++;
            }
            if($estudiante[4] >= 9.5){
                $TOT2[2]++;
            }
        }
    }

    if(isset($_POST['B3']) && $_POST['B3'] == 'Número de alumnos aplazados en cada materia'){
        $TOT3 = [0, 0, 0];
        foreach($_SESSION['estudiantes'] as $estudiante){
            if($estudiante[2] < 9.5){
                $TOT3[0]++;
            }
            if($estudiante[3] < 9.5){
                $TOT3[1]++;
            }
            if($estudiante[4] < 9.5){
                $TOT3[2]++;
            }
        }
    }

    if(isset($_POST['B4']) && $_POST['B4'] == 'Número de alumnos que aprobaron todas las materias'){
        $TOT4 = 0;
        foreach($_SESSION['estudiantes'] as $estudiante){
            if($estudiante[2] >= 9.5 && $estudiante[3] >= 9.5 && $estudiante[4] >= 9.5){
                $TOT4++;
            }
        }
    }

    if(isset($_POST['B5']) && $_POST['B5'] == 'Número de alumnos que aprobaron una sola materia'){
        $TOT5 = 0;
        foreach($_SESSION['estudiantes'] as $estudiante){
            if(($estudiante[2] >= 9.5 && ($estudiante[3] < 9.5 && $estudiante[4] < 9.5)) || ($estudiante[3] >= 9.5 && ($estudiante[2] < 9.5 && $estudiante[4] < 9.5)) || ($estudiante[4] >= 9.5 && ($estudiante[2] < 9.5 && $estudiante[3] < 9.5))){
                $TOT5++;
            }
        }
    }

    if(isset($_POST['B6']) && $_POST['B6'] == 'Número de alumnos que aprobaron dos materias'){
        $TOT6 = 0;
        foreach($_SESSION['estudiantes'] as $estudiante){
            if(($estudiante[2] >= 9.5 && $estudiante[3] >= 9.5) && $estudiante[4] < 9.5 || ($estudiante[2] >= 9.5 && $estudiante[4] >= 9.5) && $estudiante[3] < 9.5 || ($estudiante[3] >= 9.5 && $estudiante[4] >= 9.5) && $estudiante[2] < 9.5){
                $TOT6++;
            }
        }
    }

    if(isset($_POST['B7']) && $_POST['B7'] == 'Nota máxima en cada materia'){
        $TOT7 = [0, 0, 0];
        foreach($_SESSION['estudiantes'] as $estudiante){
            if($TOT7 == [0, 0, 0]){
                $TOT7[0] = $estudiante[2]; $TOT7[1] = $estudiante[3]; $TOT7 = $estudiante[4];
            }
            if($estudiante[2] > $TOT7[0]){
                $TOT7[0] = $estudiante[2];
            }
            if($estudiante[3] > $TOT7[1]){
                $TOT7[1] = $estudiante[3];
            }
            if($estudiante[4] > $TOT7[2]){
                $TOT7[2] = $estudiante[4];
            }
        }
    }
?>