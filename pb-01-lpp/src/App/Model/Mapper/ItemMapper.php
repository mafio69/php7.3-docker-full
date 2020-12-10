<?php

namespace App\Model\Mapper;

use App\Lpp\Entity\Item;

class ItemMapper
{
    /**
     * @param array $data
     *
     * @return Item
     */
    public function mapToItem(array $data): Item
    {
        $item = new Item();
        $item->setName($data['name']);
        $item->setUrl($data['url']);
        $item->setPrices($data['prices']);

        return $item;
    }
}