<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderResponseInterface
{
    /**
     * Order ID
     * @return string
     */
    public function getOrderId(): string;

    /**
     * User customised order id
     * @return string
     */
    public function getOrderLinkId(): string;
}