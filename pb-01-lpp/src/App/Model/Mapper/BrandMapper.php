<?php

namespace App\Model\Mapper;

use App\Lpp\Entity\Brand;

class BrandMapper
{
    /**
     * @param array $data
     *
     * @return Brand
     */
    public function mapToBrand(array $data): Brand
    {
        $brand = new Brand();
        $brand->setBrand($data['name']);
        $brand->setDescription($data['description']);
        $brand->setItems($data['items']);

        return $brand;
    }
}