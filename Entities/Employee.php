<?php
    class Employee extends Person
    {
        private $position;
        private $departament;
        private $salary;
        private $entryDate;
        private $exitDate;

        public function __construct($id, $name, $lastname1, $lastname2, $movil, $telephone, $address, $position, $departament, $salary, $entryDate, $exitDate)
        {
            parent::__construct($id, $name, $lastname1, $lastname2, $movil, $telephone, $address);
            $this->position = $position;
            $this->departament = $departament;
            $this->salary = $salary;
            $this->entryDate = $entryDate;
            $this->exitDate = $exitDate;
        }

        /**
         * @return mixed
         */
        public function getPosition()
        {
            return $this->position;
        }

        /**
         * @param mixed $position
         */
        public function setPosition($position)
        {
            $this->position = $position;
        }

        /**
         * @return mixed
         */
        public function getExitDate()
        {
            return $this->exitDate;
        }

        /**
         * @param mixed $exitDate
         */
        public function setExitDate($exitDate)
        {
            $this->exitDate = $exitDate;
        }

        /**
         * @return mixed
         */
        public function getEntryDate()
        {
            return $this->entryDate;
        }

        /**
         * @param mixed $entryDate
         */
        public function setEntryDate($entryDate)
        {
            $this->entryDate = $entryDate;
        }

        /**
         * @return mixed
         */
        public function getSalary()
        {
            return $this->salary;
        }

        /**
         * @param mixed $salary
         */
        public function setSalary($salary)
        {
            $this->salary = $salary;
        }

        /**
         * @return mixed
         */
        public function getDepartament()
        {
            return $this->departament;
        }

        /**
         * @param mixed $departament
         */
        public function setDepartament($departament)
        {
            $this->departament = $departament;
        }


    }
?>