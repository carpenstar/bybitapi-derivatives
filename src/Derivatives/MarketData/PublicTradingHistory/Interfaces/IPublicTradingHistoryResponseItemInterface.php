<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces;

interface IPublicTradingHistoryResponseItemInterface
{
    /**
     * Execution id
     * @return string
     */
    public function getExecId(): string;

    /**
     * Symbol name
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Trade price
     * @return float
     */
    public function getPrice(): float;

    /**
     * Trade size
     * @return float
     */
    public function getSize(): float;

    /**
     * Side of taker Buy, Sell
     * @return string
     */
    public function getSide(): string;

    /**
     * Trade time
     * @return \DateTime
     */
    public function getTime(): \DateTime;

    /**
     * Is block trade
     * @return bool
     */
    public function isBlockTrade(): bool;
}