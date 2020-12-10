<?php

namespace App\Lpp\Service;

use App\Lpp\Entity\Brand;
use InvalidArgumentException;

abstract class UnorderedBrandService implements BrandServiceInterface
{
    /**
     * @var ItemServiceInterface $itemService
     */
    public $itemService;

    /**
     * Maps from collection name to the id for the item service.
     *
     * @var array
     */
    protected $collectionNameToIdMapping = [
        "winter" => 1314575
    ];

    /**
     * @param ItemServiceInterface $itemService
     */
    public function __construct(ItemServiceInterface $itemService)
    {
        $this->itemService = $itemService;
    }

    /**
     * @param string $collectionName Name of the collection to search for.
     *
     * @return Brand[]
     */
    public function getBrandsForCollection(string $collectionName): array
    {
        if (empty($this->collectionNameToIdMapping[$collectionName])) {
            throw new InvalidArgumentException(sprintf('Provided collection name [%s] is not mapped.', $collectionName));
        }

        $collectionId = $this->collectionNameToIdMapping[$collectionName];

        return $this->itemService->getResultForCollectionId($collectionId);
    }


    /**
     * This is supposed to be used for testing purposes.
     * You should avoid replacing the item service at runtime.
     *
     * @param ItemServiceInterface $itemService
     */
    abstract public function setItemService(ItemServiceInterface $itemService): void;

    public abstract function getItemsForCollection(string $collectionName): array;
}