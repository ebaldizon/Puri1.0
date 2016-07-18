<?php
    class Client extends  Person
    {
        private $buys;
        private $maitenances;
        private $credits;
        private $account;

        public function __construct($id, $name, $lastname1, $lastname2, $movil, $telephone, $address, $buys, $maitenances, $credits, $account)
        {
            parent::__construct($id, $name, $lastname1, $lastname2, $movil, $telephone, $address);
            $this->buys = $buys;
            $this->maitenances = $maitenances;
            $this->credits = $credits;
            $this->account = $account;
        }

        /**
         * @return mixed
         */
        public function getBuys()
        {
            return $this->buys;
        }

        /**
         * @param mixed $buys
         */
        public function setBuys($buys)
        {
            $this->buys = $buys;
        }

        /**
         * @return mixed
         */
        public function getMaitenances()
        {
            return $this->maitenances;
        }

        /**
         * @param mixed $maitenances
         */
        public function setMaitenances($maitenances)
        {
            $this->maitenances = $maitenances;
        }

        /**
         * @return mixed
         */
        public function getCredits()
        {
            return $this->credits;
        }

        /**
         * @param mixed $credits
         */
        public function setCredits($credits)
        {
            $this->credits = $credits;
        }

        /**
         * @return mixed
         */
        public function getAccount()
        {
            return $this->account;
        }

        /**
         * @param mixed $account
         */
        public function setAccount($account)
        {
            $this->account = $account;
        }

    }
?>