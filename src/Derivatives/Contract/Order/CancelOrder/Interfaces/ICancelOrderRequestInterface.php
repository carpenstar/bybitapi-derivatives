<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderRequestInterface
{
    /**
     * Order id. Either orderId or orderLinkId is required
     * @return string
     */
    public function getOrderId(): string;
    public function getOrderLinkId(): string;

    /**
     * User customised order id. Either orderId or orderLinkId is required
     * @param string $orderLinkId
     * @return self
     */
    public function setOrderLinkId(string $orderLinkId): self;
    public function setOrderId(string $orderId): self;

    /**
     * Symbol name
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;
}
