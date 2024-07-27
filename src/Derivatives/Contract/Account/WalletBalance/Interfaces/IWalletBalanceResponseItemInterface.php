<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces;

interface IWalletBalanceResponseItemInterface
{
    /**
     * Coin
     * @return string
     */
    public function getCoin(): string;

    /**
     * Total equity
     * @return float
     */
    public function getEquity(): float;

    /**
     * Wallet balance
     * @return float
     */
    public function getWalletBalance(): float;

    /**
     * Position margin
     * @return float
     */
    public function getPositionMargin(): float;

    /**
     * Available balance
     * @return float
     */
    public function getAvailableBalance(): float;

    /**
     * Pre-occupied order margin
     * @return float
     */
    public function getOrderMargin(): float;

    /**
     * Position closing fee occupied. formula: opening fee + expected maximum closing fee
     * @return float
     */
    public function getOccClosingFee(): float;

    /**
     * Pre-occupied funding fee
     * @return float
     */
    public function getOccFundingFee(): float;

    /**
     * Unrealised pnl
     * @return float
     */
    public function getUnrealisedPnl(): float;

    /**
     * Cumulative realised pnl (all-time)
     * @return float
     */
    public function getCumRealisedPnl(): float;

    /**
     * Trial fund
     * @return float
     */
    public function getGivenCash(): float;

    /**
     * Coupon
     * @return float
     */
    public function getServiceCash(): float;

    /**
     * USDC account initial margin
     * @return string
     */
    public function getAccountIM(): float;

    /**
     * USDC account maintenance margin
     * @return string
     */
    public function getAccountMM(): float;
}
