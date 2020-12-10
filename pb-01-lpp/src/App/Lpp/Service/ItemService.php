<?php

namespace App\Lpp\Service;

use App\Common\Exception\ValidationUrlException;
use App\Lpp\Entity\Brand;
use App\Lpp\Entity\Item;
use App\Lpp\Entity\Price;
use App\Model\Json;
use App\Model\Mapper\BrandMapper;
use App\Model\Mapper\ItemMapper;
use App\Model\Mapper\PriceMapper;
use Exception;

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
        $brands = null;

        if ($data['id'] === $collectionId) {
            foreach ($data['brands'] as $brand) {
                $brands[] = (new BrandMapper())->mapToBrand($brand);
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
     *
     * @throws ValidationUrlException
     */
    public function getItemByCollectionName(string $collectionName): ?array
    {
        $data = $this->setDataJason();
        $items = null;

        foreach ($data['brands'] as $brand) {
            if ($brand['name'] = $collectionName) {
                foreach ($brand['items'] as $items) {
                    if (filter_var($items['url'], FILTER_VALIDATE_URL)) {
                        $items[] = (new ItemMapper())->mapToItem($items);
                    } else {
                        throw new ValidationUrlException('Wrong url address');
                    }
                }
            }
        }

        return $items ?? null;
    }

    /**
     * @param string $brandName
     *
     * @return Price[]|null
     *
     * @throws Exception
     */
    public function getPriceByBrandName(string $brandName): ?array
    {
        $data = $this->setDataJason();
        $price = [];

        foreach ($data['brands'] as $brand) {
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