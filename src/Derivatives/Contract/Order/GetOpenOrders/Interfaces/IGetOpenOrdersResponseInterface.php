<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersResponseInterface
{
    /**
     * Cursor. Used to pagination
     * @return null|string
     */
    public function getNextPageCursor(): ?string;

    /**
     * Product type
     * @return string
     */
    public function getCategory(): string;

    /**
     * @return IGetOpenOrdersResponseItemInterface[]
     */
    public function getOpenOrders(): array;
}
