<?php

namespace Tests\Unit;

use App\Models\Seller;
use PHPUnit\Framework\TestCase;

class SellerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_check_if_sellers_columns_is_correct()
    {
        $customer = new Seller();

        $expected = [
            'name',
            'email',
            'commission'
        ];

        $arrayCompared = array_diff($expected, $customer->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
