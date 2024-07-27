<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoResponseItemInterface;

class TickerInfoResponseItem extends AbstractResponse implements ITickerInfoResponseItemInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Best bid price
     * @var float $bidPrice
     */
    private float $bidPrice;

    /**
     * Best ask price
     * @var float $askPrice
     */
    private float $askPrice;

    /**
     * Last transaction price
     * @var float $lastPrice
     */
    private float $lastPrice;

    /**
     * Direction of price change
     * @var string $lastTickDirection
     */
    private string $lastTickDirection;

    /**
     * Price of 24 hours ago
     * @var float $prevPrice24h
     */
    private float $prevPrice24h;

    /**
     * Percentage change of market price relative to 24h
     * @var float $price24hPcnt
     */
    private float $price24hPcnt;

    /**
     * The highest price in the last 24 hours
     * @var float $highPrice24h
     */
    private float $highPrice24h;

    /**
     * Lowest price in the last 24 hours
     * @var float $lowPrice24h
     */
    private float $lowPrice24h;

    /**
     * Hourly market price an hour ago
     * @var float $prevPrice1h
     */
    private float $prevPrice1h;

    /**
     * Mark price
     * @var float $markPrice
     */
    private float $markPrice;

    /**
     * Index price
     * @var float $indexPrice
     */
    private float $indexPrice;

    /**
     * Open interest
     * @var float $openInterests
     */
    private ?float $openInterests;

    /**
     * Turnover in the last 24 hours
     * @var float $turnover24h
     */
    private float $turnover24h;

    /**
     * Trading volume in the last 24 hours
     * @var float $volume24h
     */
    private float $volume24h;

    /**
     * Funding rate
     * @var float $fundingRate
     */
    private float $fundingRate;

    /**
     * Next timestamp for funding to settle
     * @var \DateTime $nextFundingTime
     */
    private \DateTime $nextFundingTime;

    /**
     * Predicted delivery price. It has value when 30 min before delivery
     * @var float $predictedDeliveryPrice
     */
    private float $predictedDeliveryPrice;

    /**
     * Basis rate for futures
     * @var float $basisRate
     */
    private float $basisRate;

    /**
     * Delivery fee rate
     * @var float $deliveryFeeRate
     */
    private float $deliveryFeeRate;

    /**
     * Delivery timestamp (ms)
     * @var \DateTime $deliveryTime
     */
    private \DateTime $deliveryTime;

    /**
     * Open interest value
     * @var float $openInterestValue
     */
    private float $openInterestValue;

    public function __construct(array $data)
    {
        $this->symbol = $data['symbol'];
        $this->bidPrice = $data['bidPrice'];
        $this->askPrice = $data['askPrice'];
        $this->lastPrice = $data['lastPrice'];
        $this->lastTickDirection = $data['lastTickDirection'];
        $this->prevPrice24h = $data['prevPrice24h'];
        $this->price24hPcnt = $data['price24hPcnt'];
        $this->highPrice24h = $data['highPrice24h'];
        $this->lowPrice24h = $data['lowPrice24h'];
        $this->prevPrice1h = $data['prevPrice1h'];
        $this->markPrice = $data['markPrice'];
        $this->indexPrice = $data['indexPrice'];
        $this->openInterests = $data['openInterest'];
        $this->turnover24h = $data['turnover24h'];
        $this->volume24h = $data['volume24h'];
        $this->fundingRate = $data['fundingRate'];
        $this->nextFundingTime = DateTimeHelper::makeFromTimestamp((int) $data['nextFundingTime']);
        $this->predictedDeliveryPrice = (float)$data['predictedDeliveryPrice'];
        $this->basisRate = (float)$data['basisRate'];
        $this->deliveryFeeRate = (float)$data['deliveryFeeRate'];
        $this->deliveryTime = DateTimeHelper::makeFromTimestamp((int) $data['deliveryTime']);
        $this->openInterestValue = $data['openInterestValue'];
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @return float
     */
    public function getBidPrice(): float
    {
        return $this->bidPrice;
    }

    /**
     * @return float
     */
    public function getAskPrice(): float
    {
        return $this->askPrice;
    }

    /**
     * @return float
     */
    public function getLastPrice(): float
    {
        return $this->lastPrice;
    }

    /**
     * @return string
     */
    public function getLastTickDirection(): string
    {
        return $this->lastTickDirection;
    }

    /**
     * @return float
     */
    public function getPrevPrice24h(): float
    {
        return $this->prevPrice24h;
    }

    /**
     * @return float
     */
    public function getPrice24hPcnt(): float
    {
        return $this->price24hPcnt;
    }

    /**
     * @return float
     */
    public function getHighPrice24h(): float
    {
        return $this->highPrice24h;
    }

    /**
     * @return float
     */
    public function getLowPrice24h(): float
    {
        return $this->lowPrice24h;
    }

    /**
     * @return float
     */
    public function getPrevPrice1h(): float
    {
        return $this->prevPrice1h;
    }

    /**
     * @return float
     */
    public function getMarkPrice(): float
    {
        return $this->markPrice;
    }

    /**
     * @return float
     */
    public function getIndexPrice(): float
    {
        return $this->indexPrice;
    }

    /**
     * @return float
     */
    public function getOpenInterests(): float
    {
        return (float)$this->openInterests;
    }

    /**
     * @return float
     */
    public function getTurnover24h(): float
    {
        return $this->turnover24h;
    }

    /**
     * @return float
     */
    public function getVolume24h(): float
    {
        return $this->volume24h;
    }

    /**
     * @return float
     */
    public function getFundingRate(): float
    {
        return $this->fundingRate;
    }

    /**
     * @return \DateTime
     */
    public function getNextFundingTime(): \DateTime
    {
        return $this->nextFundingTime;
    }

    /**
     * @return float
     */
    public function getPredictedDeliveryPrice(): float
    {
        return $this->predictedDeliveryPrice;
    }

    /**
     * @return float
     */
    public function getBasisRate(): float
    {
        return $this->basisRate;
    }

    /**
     * @return float
     */
    public function getDeliveryFeeRate(): float
    {
        return $this->deliveryFeeRate;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryTime(): \DateTime
    {
        return $this->deliveryTime;
    }

    /**
     * @return float
     */
    public function getOpenInterestValue(): float
    {
        return $this->openInterestValue;
    }
}
