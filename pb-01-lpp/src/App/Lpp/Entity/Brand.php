<?php

namespace App\Lpp\Entity;

/**
 * Represents a single brand in the result.
 *
 */
class Brand
{
    /**
     * Name of the brand
     *
     * @var string
     */
    public $brand;

    /**
     * Brand's description
     *
     * @var string
     */
    public $description;

    /**
     * Unsorted list of items with their corresponding prices.
     *
     * @var Item[]
     */
    public $items = [];

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return Brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Brand
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     * @return Brand
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }
}
