<?php
    class ConnectionDB
    {
        private $user;
        private $password;
        private $server;
        private $db;
        private $connection;

        public function __construct()
        {
            $this->user = "root";
            $this->password = "";
            $this->server = "localhost";
            $this->db = "PuriDB";
        }

        public function connection()
        {
            $this->connection = mysqli_connect($this->server, $this->user, $this->password) or die("Error al conectar a la base de datos".mysqli_error());
            return mysqli_select_db($this->connection, $this->db);
        }

        public function close()
        {
            return mysqli_close($this->connection);
        }

        public function pushQuery($query)
        {
            if(empty($this->connection()))
            {
                return false;
            }
            else
            {
                return mysqli_query($this->connection, $query);
            }
        }
    }
?>