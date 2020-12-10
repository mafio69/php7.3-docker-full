<?php

namespace App\Lpp\Entity;

/**
 * Represents a single item from a search result.
 *
 */
class Item
{
    /**
     * Name of the item
     *
     * @var string
     */
    public $name;

    /**
     * Url of the item's page
     *
     * @var string
     */
    public $url;

    /**
     * Unsorted list of prices received from the
     * actual search query.
     *
     * @var Price[]
     */
    public $prices = [];

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Item
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return Price[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @param Price[] $prices
     * @return Item
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;
        return $this;
    }
}
