<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces;

interface IPlaceOrderResponseInterface
{
    public function getOrderId(): ?string;
    public function getOrderLinkId(): string;
}
