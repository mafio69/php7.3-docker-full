<?php

namespace Tests;

use App\Common\AppConstants;
use App\Common\Exception\ValidationUrlException;
use App\Lpp\Entity\Item;
use App\Lpp\Entity\Price;
use App\Lpp\Service\ItemService;
use App\Lpp\Service\UnorderedBrandService;

class testUnorderedServiceTest extends BaseTestCase
{
    const COLLECTION_NAME = "jacket";
    const BRAND_NAME = "XXX";
    const ITEM_NAME = "skirt";
    const PRICE_DESCRIPTION = "clearance price";
    const JASON_FILE_TO_TEST = "testJason.json";

    public function testGetBrandsForCollection()
    {
        $itemService = new ItemService(AppConstants::JSON_FILE_NAME);
        $unorderedBrandService = new UnorderedBrandService($itemService);
        $result = null;

        try {
            $result = $unorderedBrandService->itemService->getItemByCollectionName(self::COLLECTION_NAME);
        } catch (ValidationUrlException $e) {
            echo "Validation error - wrong url";
        }

        $this->assertIsArray($result);
        $this->assertIsArray($result['prices']);
        $this->assertTrue($result['name'] === self::ITEM_NAME);
        $this->assertInstanceOf(Item::class, $result[0]);
    }

    public function testGetPriceByBrandsName()
    {
        $itemService = new ItemService(self::JASON_FILE_TO_TEST);
        $unorderedBrandService = new UnorderedBrandService($itemService);
        $result = $unorderedBrandService->itemService->getPriceByBrandName(self::BRAND_NAME);

        $this->assertIsArray($result);
        $this->assertTrue($result['description'] === self::PRICE_DESCRIPTION);
        $this->assertInstanceOf(Price::class, $result[0]);
    }
}
