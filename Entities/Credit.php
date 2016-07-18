<?php
    class Credit
    {
        private $initial;
        private $months;
        private $tax;
        private $quote;
        private $currentMont;
        private $totalMont;

        function __construct($initial, $months, $tax, $quote, $currentMont, $totalMont)
        {
            $this->initial = $initial;
            $this->months =  $months;
            $this->tax = $tax;
            $this->quote = $quote;
            $this->currentMont = $currentMont;
            $this->totalMont = $totalMont;
        }

        function getInitial()
        {
            return $this->initial;
        }

        function setInitial($initial)
        {
            $this->initial = $initial;
        }

        function getMonths()
        {
            return $this->months;
        }

        function setMonths($months)
        {
            $this->months = $months;
        }

        function getTax()
        {
            return $this->tax;
        }

        function setTax($tax)
        {
            $this->tax = $tax;
        }

        function getQuote()
        {
            return $this->quote;
        }

        function setQuote($quote)
        {
            $this->quote = $quote;
        }

        function getCurrentMont()
        {
            return $this->currentMont;
        }

        function setCurrentMont($currentMont)
        {
            $this->currentMont = $currentMont;
        }

        function getTotalMont()
        {
            return $this->totalMont;
        }

        function setTotalMont($totalMont)
        {
            $this->totalMont = $totalMont;
        }

    }
?>