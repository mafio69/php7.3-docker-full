<?php

namespace App\Lpp\Entity;

use DateTime;

/**
 * Represents a single price from a search result
 * related to a single item.
 *
 */
class Price
{
    /**
     * Description text for the price
     *
     * @var string
     */
    public $description;

    /**
     * Warehouse's arrival date (to)
     *
     * @var DateTime
     */
    public $arrivalDate;

    /**
     * Due to date,
     * defining how long will the item be available for sale (i.e. in a collection)
     *
     * @var DateTime
     */
    public $dueDate;
    /**
     * Price in euro
     *
     * @var int
     */
    public $priceInEuro;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Price
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriceInEuro()
    {
        return $this->priceInEuro;
    }

    /**
     * @param int $priceInEuro
     * @return Price
     */
    public function setPriceInEuro($priceInEuro)
    {
        $this->priceInEuro = $priceInEuro;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @param DateTime $arrivalDate
     * @return Price
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param DateTime $dueDate
     * @return Price
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }
}
