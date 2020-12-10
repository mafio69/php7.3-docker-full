<?php

namespace App\Lpp\Service;

class OrderedByPriceBrandService implements BrandServiceInterface
{
    /**
     * @var ItemServiceInterface
     */
    protected $itemService;

    /**
     * @inheritDoc
     */
    public function getItemsForCollectionOrderByPrice(string $collectionName): array
    {

    }

    public function setItemService(ItemServiceInterface $itemService): void
    {
        $this->itemService = $itemService;
    }
}