<?php

namespace App\Lpp\Service;

use App\Common\AppConstants;

class tempUnorderedService extends UnorderedBrandService
{

    /**
     * @inheritDoc
     */
    public function setItemService(ItemServiceInterface $itemService): void
    {
        $this->itemService = $itemService;
    }

    /**
     * @param string $collectionName
     *
     * @return array
     */
    public function getItemsForCollection(string $collectionName): array
    {
        //Todo add implementations
    }
}