<?php
        class Singleton
        {

            private static $instancia;
            private $contar;

            private function __construct()
            {
                echo "Creamos una instancia de".__CLASS__."</br>";
                $this->contar = 0;
            }

            public static function invocarInstancia()
            {
                if(!self::$instancia instanceof self)
                {
                    self::$instancia = new self;
                }

                return self::$instancia;
            }

            public function sumar()
            {
                return ++$this->contar;
            }

            public function restar()
            {
                return --$this->contar;
            }
        }
?>