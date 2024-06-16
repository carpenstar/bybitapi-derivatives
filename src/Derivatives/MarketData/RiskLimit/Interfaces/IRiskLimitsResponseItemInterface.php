<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces;

interface IRiskLimitsResponseItemInterface
{
    /**
     * Risk id
     * @return string
     */
    public function getId(): string;

    /**
     * Symbol name
     * @return string
     */
    public function getSymbol(): string;

    /**
     * Position limit
     * @return int
     */
    public function getLimit(): int;

    /**
     * Maintain margin rate
     * @return float
     */
    public function getMaintainMargin(): float;

    /**
     * Initial margin rate
     * @return float
     */
    public function getInitialMargin(): float;

    /**
     * 1: true, 0: false
     * @return int
     */
    public function getIsLowerRisk(): int;

    /**
     * Allowed max leverage
     * @return float
     */
    public function getMaxLeverage(): float;
}