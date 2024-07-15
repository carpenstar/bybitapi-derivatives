<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderResponseItemInterface
{
    /**
     * Order id
     * @return string
     */
    public function getOrderId(): string;

    /**
     * User customised order id
     * @return string
     */
    public function getOrderLinkId(): string;
}