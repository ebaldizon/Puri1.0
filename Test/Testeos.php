<?php
    include 'Persona.php';
    include 'Empleado.php';


    $persona = new Persona(1, 'Emanuel');

    echo $persona->getNombre();

    $empleado = new Empleado(2,'Samuel', 100, 'Informatica');

    echo '</br>';
    echo $empleado->getNombre();
    echo '</br>';
    echo $empleado->getDepartamento();
?>