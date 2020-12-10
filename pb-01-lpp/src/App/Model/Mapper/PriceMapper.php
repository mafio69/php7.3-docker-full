<?php

namespace App\Model\Mapper;

use App\Lpp\Entity\Price;
use DateTime;
use Exception;

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
     *
     * @throws Exception
     */
    public function mapToPrice(array $data): Price
    {
        $price = new Price();

        $price->setDescription($data['description']);
        $price->setArrivalDate(new DateTime($data['arrival']));
        $price->setPriceInEuro(strtotime($data['priceInEuro']));
        $price->setDueDate(new DateTime($data['due']));

        return $price;
    }
}