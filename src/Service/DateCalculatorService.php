<?php

namespace App\Service;

use App\Model\DateCalculatorModel;
use App\Model\DateCalculatorResultModel;

class DateCalculatorService
{

    public function calculateResult(DateCalculatorModel $calculatorModel): DateCalculatorResultModel
    {
        $date = new \DateTime($calculatorModel->getDate(), new \DateTimeZone($calculatorModel->getTimezone()));
        $result = new DateCalculatorResultModel();

        $result
            ->setInputTimezone($calculatorModel->getTimezone())
            ->setDaysInFebruary($this->getNumberOfDaysInMonth(2, $date->format('Y')))
            ->setDaysInInputMonth($this->getNumberOfDaysInMonth($date->format('m'), $date->format('Y')))
            ->setOffsetToUTC($this->getOffsetToUTC($date))
            ->setInputMonth($this->getMonthName($date))
        ;

        return $result;
    }

    /**
     * Returns offset in minutes
     */
    private function getOffsetToUTC(\DateTime $fromDate)
    {
        $toDate = new \DateTime($fromDate->format('Y-m-d'), new \DateTimeZone('UTC'));

        $offset = $fromDate->getTimezone()->getOffset($toDate);

        if ($offset !== 0) {
            $offset /= 60;
        }

        return $offset;
    }

    private function getMonthName(\DateTime $dateTime): string
    {
        return $dateTime->format('F');
    }

    private function getNumberOfDaysInMonth(int $month, int $year): int
    {
        return cal_days_in_month(CAL_GREGORIAN, $month, $year);
    }
}