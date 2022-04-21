<?php

namespace App\Model;

class DateCalculatorResultModel
{

    private string $inputTimezone;
    private int $offsetToUTC;
    private int $daysInFebruary;
    private string $inputMonth;
    private int $daysInInputMonth;


    public function getInputTimezone(): string
    {
        return $this->inputTimezone;
    }

    public function setInputTimezone(string $inputTimezone): self
    {
        $this->inputTimezone = $inputTimezone;
        return $this;
    }

    public function getOffsetToUTC(): int
    {
        return $this->offsetToUTC;
    }

    public function setOffsetToUTC(int $offsetToUTC): self
    {
        $this->offsetToUTC = $offsetToUTC;
        return $this;
    }

    public function getDaysInFebruary(): int
    {
        return $this->daysInFebruary;
    }

    public function setDaysInFebruary(int $daysInFebruary): self
    {
        $this->daysInFebruary = $daysInFebruary;
        return $this;
    }

    public function getInputMonth(): string
    {
        return $this->inputMonth;
    }

    public function setInputMonth(string $inputMonth): self
    {
        $this->inputMonth = $inputMonth;
        return $this;
    }

    public function getDaysInInputMonth(): int
    {
        return $this->daysInInputMonth;
    }

    public function setDaysInInputMonth(int $daysInInputMonth): self
    {
        $this->daysInInputMonth = $daysInInputMonth;
        return $this;
    }


}