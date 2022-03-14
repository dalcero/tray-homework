<?php

namespace Tests\Unit;

use App\Models\Sale;
use PHPUnit\Framework\TestCase;

class SaleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_check_if_sales_columns_is_correct()
    {
        $customer = new Sale();

        $expected = [
            'seller_id',
            'total',
            'commission'
        ];

        $arrayCompared = array_diff($expected, $customer->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
