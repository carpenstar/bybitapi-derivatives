<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces;

use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;

interface IOrderBookResponseInterface
{
    /**
     * The timestamp that system generates the data
     * @return \DateTime
     */
    public function getTimestamp(): \DateTime;

    /**
     * Trading pair
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Update id, is always in sequence
     * @return int
     */
    public function getUpdateId(): int;

    /**
     * @return IOrderBookResponsePriceItemInterface[]
     */
    public function getBid(): EntityCollection;

    /**
     * @return IOrderBookResponsePriceItemInterface[]
     */
    public function getAsk(): EntityCollection;
}