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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Item
     */
    public function setName(string $name): Item
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Item
     */
    public function setUrl(string $url): Item
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return Price[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * @param Price[] $prices
     * @return Item
     */
    public function setPrices(array $prices): Item
    {
        $this->prices = $prices;
        return $this;
    }
}
