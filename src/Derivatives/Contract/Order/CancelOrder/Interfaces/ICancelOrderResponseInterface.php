<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderResponseInterface
{
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
}
