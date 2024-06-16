<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseItemInterface;

interface IGetOrderListResponseInterface
{
    /**
     * Cursor. Used to pagination
     * @return string
     */
    public function getNextPageCursor(): string;

    /**
     * Product type
     * @return string
     */
    public function getCategory(): string;

    /**
     * @return IGetOpenOrdersResponseItemInterface[]
     */
    public function getOrderList(): array;
}