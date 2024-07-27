<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderResponseInterface
{
    /**
     * @return ICancelAllOrderResponseItemInterface[]
     */
    public function getCancelOrdersList(): array;
}
