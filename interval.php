<?php

class Interval
{
    private $d1;
    private $d2;

    public function __construct(Date $date1, Date $date2)
    {
        $this->d1 = $date1;
        $this->d2 = $date2;
    }

    public function toDays()
    {
        $interval = date_diff(new DateTime($this->d1), new DateTime($this->d2));
        return $interval->d;
    }

    public function toMonths()
    {
        $interval = date_diff(new DateTime($this->d1), new DateTime($this->d2));
        return $interval->m;
    }

    public function toYears()
    {
        $interval = date_diff(new DateTime($this->d1), new DateTime($this->d2));
        return $interval->y;
    }

    public function __toString()
    {
        return "['years' => '".$this->toYears()."', 'months' => '".$this->toMonths()."', 'days' => '".$this->toDays()."']";
    }
}
?>