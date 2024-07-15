<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces;

interface ITickerInfoResponseItemInterface
{
    /**
     * Symbol name
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Best bid price
     * @return float
     */
    public function getBidPrice(): float;

    /**
     * Best ask price
     * @return float
     */
    public function getAskPrice(): float;

    /**
     * Last transaction price
     * @return float
     */
    public function getLastPrice(): float;

    /**
     * Direction of price change
     * @return string
     */
    public function getLastTickDirection(): string;

    /**
     * Price of 24 hours ago
     * @return float
     */
    public function getPrevPrice24h(): float;

    /**
     * Percentage change of market price relative to 24h
     * @return float
     */
    public function getPrice24hPcnt(): float;

    /**
     * The highest price in the last 24 hours
     * @return float
     */
    public function getHighPrice24h(): float;

    /**
     * Lowest price in the last 24 hours
     * @return float
     */
    public function getLowPrice24h(): float;

    /**
     * Hourly market price an hour ago
     * @return float
     */
    public function getPrevPrice1h(): float;

    /**
     * Mark price
     * @return float
     */
    public function getMarkPrice(): float;

    /**
     * Index price
     * @return float
     */
    public function getIndexPrice(): float;

    /**
     * Open interest
     * @return float
     */
    public function getOpenInterests(): float;

    /**
     * Turnover in the last 24 hours
     * @return float
     */
    public function getTurnover24h(): float;

    /**
     * Trading volume in the last 24 hours
     * @return float
     */
    public function getVolume24h(): float;

    /**
     * Funding rate
     * @return float
     */
    public function getFundingRate(): float;

    /**
     * Next timestamp for funding to settle
     * @return \DateTime
     */
    public function getNextFundingTime(): \DateTime;

    /**
     * Predicted delivery price. It has value when 30 min before delivery
     * @return float
     */
    public function getPredictedDeliveryPrice(): float;

    /**
     * Basis rate for futures
     * @return float
     */
    public function getBasisRate(): float;

    /**
     * Delivery fee rate
     * @return float
     */
    public function getDeliveryFeeRate(): float;

    /**
     * Delivery timestamp
     * @return \DateTime
     */
    public function getDeliveryTime(): \DateTime;

    /**
     * Open interest value
     * @return float
     */
    public function getOpenInterestValue(): float;
}