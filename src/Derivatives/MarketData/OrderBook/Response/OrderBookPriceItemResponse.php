<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookResponsePriceItemInterface;

class OrderBookPriceItemResponse extends AbstractResponse implements IOrderBookResponsePriceItemInterface
{
    /**
     * @var float $price
     */
    private float $price;

    /**
     * @var float $quantity
     */
    private float $quantity;

    public function __construct(array $data)
    {
        $this->price = $data[0];
        $this->quantity = $data[1];
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }
}
