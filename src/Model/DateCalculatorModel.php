<?php

namespace App\Model;

class DateCalculatorModel
{

    private $date;
    private $timezone;

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getTimezone()
    {
        return $this->timezone;
    }

    public function setTimezone($timezone): self
    {
        $this->timezone = $timezone;
        return $this;
    }


}