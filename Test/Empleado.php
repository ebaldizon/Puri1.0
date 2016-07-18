<?php
    class Empleado extends Persona implements MyInterface
    {
        private $salario;
        private $departamento;

        function __construct($id, $nombre, $salario, $departamento)
        {

            parent:: __construct($id, $nombre);
            $this->salario = $salario;
            $this->departamento = $departamento;
        }

        /**
         * @return mixed
         */
        public function getSalario()
        {
            return $this->salario;
        }

        /**
         * @param mixed $salario
         */
        public function setSalario($salario)
        {
            $this->salario = $salario;
        }

        /**
         * @return mixed
         */
        public function getDepartamento()
        {
            return $this->departamento;
        }

        /**
         * @param mixed $departamento
         */
        public function setDepartamento($departamento)
        {
            $this->departamento = $departamento;
        }

        public function golpear()
        {
            echo 'BAM BAM!!!';
        }

        public function disculparse($mensaje)
        {
            echo 'Mis disculpas'.$mensaje;
        }

    }
?>