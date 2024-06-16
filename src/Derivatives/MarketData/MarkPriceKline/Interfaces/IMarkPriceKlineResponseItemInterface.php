<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces;

interface IMarkPriceKlineResponseItemInterface
{
    /**
     * Time of candle
     * @return \DateTime
     */
    public function getStartTime(): \DateTime;

    /**
     * Open Price
     * @return float
     */
    public function getOpen(): float;

    /**
     * High Price
     * @return float
     */
    public function getHigh(): float;

    /**
     * Low Price
     * @return float
     */
    public function getLow(): float;

    /**
     * Close Price
     * @return float
     */
    public function getClose(): float;
}