<?php

namespace App\Lpp\Service;

use App\Lpp\Entity\Brand;
use App\Lpp\Entity\Item;
use App\Lpp\Entity\Price;
use App\Model\Json;
use App\Model\Mapper\BrandMapper;
use App\Model\Mapper\ItemMapper;
use App\Model\Mapper\PriceMapper;

class ItemService implements ItemServiceInterface
{
    /**
     * @var string
     */
    private $jasonName;

    /**
     * @param string $jasonName
     */
    public function __construct(string $jasonName)
    {
        $this->jasonName = BASE_PATH . '/data/' . $jasonName;
    }

    /**
     * @param int $collectionId
     *
     * @return Brand[]|null
     */
    public function getResultForCollectionId(int $collectionId): ?array
    {
        $data = $this->setDataJason();
        $brandMapper = new BrandMapper();
        $brands = null;

        if ($data['id'] === $collectionId) {
            foreach ($data['brands'] as $brand) {
                $brands[] = $brandMapper->mapToBrand($brand);
            }
        }
        return $brands ?? null;
    }

    /**
     * @return array
     */
    public function setDataJason(): array
    {
      return (new Json())->getJson($this->jasonName);
    }

    /**
     * @param string $collectionName
     *
     * @return Item[]|null
     */
    public function getItemByCollectionName(string $collectionName): ?array
    {
        $data = $this->setDataJason();
        $itemMapper = new ItemMapper();
        $items = null;

        foreach ($data['brands'] as $brand) {
            if ($brand['name'] = $collectionName) {
                foreach ($brand['items'] as $items) {
                    $items[] = $itemMapper->mapToItem($items);
                }
            }
        }

        return $items ?? null;
    }

    /**
     * @param string $brandName
     *
     * @return Price[]|null
     */
    public function getPriceByBrandName(string $brandName): ?array
    {
        $data = $this->setDataJason();
        $priceMapper = new PriceMapper();
        $price = [];

        foreach ($data['brands'] as $coords => $brand) {
            if ($brand['name'] === $brandName) {
                foreach ($brand['items'] as $coords => $items) {
                    foreach ($brand['items'][$coords]['prices'] as $price) {
                        $price[] = (new PriceMapper)->mapToPrice($price);
                    }
                }
            }
        }

        return $price ?? null;
    }
}