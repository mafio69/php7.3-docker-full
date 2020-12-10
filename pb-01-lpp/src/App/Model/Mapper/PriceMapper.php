<?php

namespace App\Model\Mapper;

use App\Lpp\Entity\Price;

class PriceMapper
{

    /**
     * priceMapper constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param array $data
     *
     * @return Price
     */
    public function mapToPrice(array $data): Price
    {
        $price = new Price();
        $price->setDescription($data['description']);
        $price->setArrivalDate($data['arrival']);
        $price->setPriceInEuro($data['priceInEuro']);
        $price->setDueDate($data['due']);

        return $price;
    }
}