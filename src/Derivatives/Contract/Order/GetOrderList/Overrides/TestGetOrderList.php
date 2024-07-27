<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Overrides;

use Carpenstar\ByBitAPI\Core\Traits\OverrideExecuteTrait;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\GetOrderList;

final class TestGetOrderList extends GetOrderList
{
    use OverrideExecuteTrait;
}
