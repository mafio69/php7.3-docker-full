<?php

namespace Tests;

use App\Lpp\Entity\Brand;
use App\Lpp\Service\ItemService;

class ItemServiceTest extends BaseTestCase
{
    const JASON_FILE_TO_TEST = "testJason.json";
    const COLLECTION_ID = 1315475;

    public function testGetResultForCollectionId()
    {
        $testItemService = new ItemService(self::JASON_FILE_TO_TEST);
        $result = $testItemService->getResultForCollectionId(1315475);

        $this->assertTrue(is_array($result));
        $this->assertTrue(is_object($result[0]));
        $this->assertInstanceOf(Brand::class, $result[0]);
    }
}
