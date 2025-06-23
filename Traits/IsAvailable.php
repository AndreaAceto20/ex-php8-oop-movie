<?php
trait IsAvailable
{
    public $available;

    public function setAvailable($available)
    {
        return $this->available = $available;
    }

    public function getAvailable()
    {
        return $this->available;
    }
}
