<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces;

use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;

interface IInstrumentInfoResponseItemInterface
{
    /**
     * @return string|null
     */
    public function getNextPageCursor(): ?string;

    /**
     * Symbol name
     * @return string|null
     */
    public function getSymbol(): ?string;

    /**
     * Contract type. `LinearPerpetual`, `InversePerpetual`, `InverseFutures`
     * @return string|null
     */
    public function getContractType(): ?string;

    /**
     * Symbol status
     * @return string|null
     */
    public function getStatus(): ?string;

    /**
     * Base coin. e.g BTCUSDT, BTC is base coin
     * @return string|null
     */
    public function getBaseCoin(): ?string;

    /**
     * Quote coin. e.g BTCPERP, USDC is quote coin
     * @return string|null
     */
    public function getQuoteCoin(): ?string;

    /**
     * Settle coin. e.g BTCUSD, BTC is settle coin
     * @return string|null
     */
    public function getSettleCoin(): ?string;

    /**
     * The launch timestamp (ms)
     * @return \DateTime|null
     */
    public function getLaunchTime(): ?\DateTime;

    /**
     * The delivery timestamp (ms). "0" for perpetual
     * @return \DateTime|null
     */
    public function getDeliveryTime(): ?\DateTime;

    /**
     * The delivery fee rate
     * @return float
     */
    public function getDeliveryFeeRate(): float;

    /**
     * Price scale
     * @return float
     */
    public function getPriceScale(): float;

    /**
     * Support unified margin trade or not
     * @return bool
     */
    public function getUnifiedMarginTrade(): bool;

    /**
     * Funding interval (minute)
     * @return int
     */
    public function getFundingInterval(): int;

    /**
     * @return ILotSizeFilterItemInterface[]
     */
    public function getLotSizeFilter(): EntityCollection;

    /**
     * @return IPriceFilterItemInterface[]
     */
    public function getPriceFilter(): EntityCollection;

    /**
     * @return ILeverageFilterItemInterface[]
     */
    public function getLeverageFilter(): EntityCollection;
}