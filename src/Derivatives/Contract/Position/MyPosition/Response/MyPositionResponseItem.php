<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionResponseItemInterface;

class MyPositionResponseItem extends AbstractResponse implements IMyPositionResponseItemInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Side. Buy, Sell. Return None when zero position of one-way mode
     * @var string $side
     */
    private string $side;

    /**
     * Position size
     * @var float $size
     */
    private float $size;

    /**
     * Entry price
     * @var float $entryPrice
     */
    private float $entryPrice;

    /**
     * leverage
     * @var float $leverage
     */
    private float $leverage;

    /**
     * Position value
     * @var float $positionValue
     */
    private float $positionValue;

    /**
     * Position index
     * @var int $positionIdx
     */
    private int $positionIdx;

    /**
     * Risk limit id
     * @var int $riskId
     */
    private int $riskId;

    /**
     * Position limit value corresponding to the risk id
     * @var string $riskLimitValue
     */
    private string $riskLimitValue;

    /**
     * 0: cross margin mode. 1: isolated margin mode
     * @var int $tradeMode
     */
    private int $tradeMode;

    /**
     * 0: false. 1: true
     * @var int $autoAddMargin
     */
    private int $autoAddMargin;

    /**
     * Position margin
     * @var float $positionBalance
     */
    private float $positionBalance;

    /**
     * Estimated liquidation price. It returns value only when minPrice < liqPrice < maxPrice
     * @var float $liqPrice
     */
    private float $liqPrice;

    /**
     * Estimated bankruptcy price
     * @var float $bustPrice
     */
    private float $bustPrice;

    /**
     * Depreciated, meaningless here, always "Full"
     * @var string $tpSlMode
     */
    private string $tpSlMode;

    /**
     * Take profit price
     * @var float $takeProfit
     */
    private float $takeProfit;

    /**
     * Stop loss price
     * @var float $stopLoss
     */
    private float $stopLoss;

    /**
     * Position created timestamp (ms)
     * @var \DateTime $createdTime
     */
    private \DateTime $createdTime;

    /**
     * Position data updated timestamp (ms)
     * @var \DateTime $updatedTime
     */
    private \DateTime $updatedTime;

    /**
     * Trailing stop
     * @var string $trailingStop
     */
    private string $trailingStop;

    /**
     * Activate price of trailing stop
     * @var float $activePrice
     */
    private float $activePrice;

    /**
     * Real-time mark price
     * @var float $markPrice
     */
    private float $markPrice;

    /**
     * unrealised PNL
     * @var float $unrealisedPnl
     */
    private float $unrealisedPnl;

    /**
     * cumulative realised PNL
     * @var float $cumRealisedPnl
     */
    private float $cumRealisedPnl;

    /**
     * Position maintenance margin
     * @var float $positionMM
     */
    private float $positionMM;

    /**
     * Position initial margin
     * @var float $positionIM
     */
    private float $positionIM;

    /**
     * Position status
     * @var string $positionStatus
     */
    private string $positionStatus;

    /**
     * Settlement price
     * @var float $sessionAvgPrice
     */
    private float $sessionAvgPrice;

    /**
     * Pre-occupancy closing fee
     * @var float $occClosingFee
     */
    private float $occClosingFee;

    /**
     * Auto-deleverage rank indicator. What is Auto-Deleveraging?
     * @var int $adlRankIndicator
     */
    private int $adlRankIndicator;

    public function __construct(array $data)
    {
        $this
            ->setSymbol($data['symbol'])
            ->setSide($data['side'])
            ->setSize($data['size'])
            ->setEntryPrice($data['entryPrice'])
            ->setLeverage($data['leverage'])
            ->setPositionValue($data['positionValue'])
            ->setPositionIdx((float) $data['positionIdx'])
            ->setRiskId($data['riskId'])
            ->setRiskLimitValue((float) $data['riskLimitValue'])
            ->setTradeMode($data['tradeMode'])
            ->setAutoAddMargin($data['autoAddMargin'])
            ->setPositionBalance($data['positionBalance'])
            ->setLiqPrice((float) $data['liqPrice'])
            ->setBustPrice((float) $data['bustPrice'])
            ->setTpSlMode($data['tpSlMode'])
            ->setTakeProfit((float) $data['takeProfit'])
            ->setStopLoss((float) $data['stopLoss'])
            ->setCreatedTime($data['createdTime'])
            ->setUpdatedTime($data['updatedTime'])
            ->setTrailingStop($data['trailingStop'])
            ->setActivePrice((float) $data['activePrice'])
            ->setMarkPrice((float) $data['markPrice'])
            ->setUnrealisedPnl($data['unrealisedPnl'])
            ->setCumRealisedPnl($data['cumRealisedPnl'])
            ->setPositionMM((float) $data['positionMM'])
            ->setPositionIM((float) $data['positionIM'])
            ->setPositionStatus($data['positionStatus'])
            ->setSessionAvgPrice((float) $data['sessionAvgPrice'])
            ->setOccClosingFee((float) $data['occClosingFee'])
            ->setAdlRankIndicator($data['adlRankIndicator']);
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return MyPositionResponse
     */
    private function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getSide(): string
    {
        return $this->side;
    }

    /**
     * @param string $side
     * @return MyPositionResponse
     */
    private function setSide(string $side): self
    {
        $this->side = $side;
        return $this;
    }

    /**
     * @return float
     */
    public function getSize(): float
    {
        return $this->size;
    }

    /**
     * @param float $size
     * @return MyPositionResponse
     */
    private function setSize(float $size): self
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return float
     */
    public function getEntryPrice(): float
    {
        return $this->entryPrice;
    }

    /**
     * @param float $entryPrice
     * @return MyPositionResponse
     */
    private function setEntryPrice(float $entryPrice): self
    {
        $this->entryPrice = $entryPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getLeverage(): float
    {
        return $this->leverage;
    }

    /**
     * @param float $leverage
     * @return MyPositionResponse
     */
    private function setLeverage(float $leverage): self
    {
        $this->leverage = $leverage;
        return $this;
    }

    /**
     * @return float
     */
    public function getPositionValue(): float
    {
        return $this->positionValue;
    }

    /**
     * @param float $positionValue
     * @return MyPositionResponse
     */
    private function setPositionValue(float $positionValue): self
    {
        $this->positionValue = $positionValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getPositionIdx(): int
    {
        return $this->positionIdx;
    }

    /**
     * @param int $positionIdx
     * @return MyPositionResponse
     */
    private function setPositionIdx(int $positionIdx): self
    {
        $this->positionIdx = $positionIdx;
        return $this;
    }

    /**
     * @return int
     */
    public function getRiskId(): int
    {
        return $this->riskId;
    }

    /**
     * @param int $riskId
     * @return MyPositionResponse
     */
    private function setRiskId(int $riskId): self
    {
        $this->riskId = $riskId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRiskLimitValue(): string
    {
        return $this->riskLimitValue;
    }

    /**
     * @param string $riskLimitValue
     * @return MyPositionResponse
     */
    private function setRiskLimitValue(string $riskLimitValue): self
    {
        $this->riskLimitValue = $riskLimitValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getTradeMode(): int
    {
        return $this->tradeMode;
    }

    /**
     * @param int $tradeMode
     * @return MyPositionResponse
     */
    private function setTradeMode(int $tradeMode): self
    {
        $this->tradeMode = $tradeMode;
        return $this;
    }

    /**
     * @return int
     */
    public function getAutoAddMargin(): int
    {
        return $this->autoAddMargin;
    }

    /**
     * @param int $autoAddMargin
     * @return MyPositionResponse
     */
    private function setAutoAddMargin(int $autoAddMargin): self
    {
        $this->autoAddMargin = $autoAddMargin;
        return $this;
    }

    /**
     * @return float
     */
    public function getPositionBalance(): float
    {
        return $this->positionBalance;
    }

    /**
     * @param float $positionBalance
     * @return MyPositionResponse
     */
    private function setPositionBalance(float $positionBalance): self
    {
        $this->positionBalance = $positionBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiqPrice(): float
    {
        return $this->liqPrice;
    }

    /**
     * @param float $liqPrice
     * @return MyPositionResponse
     */
    private function setLiqPrice(float $liqPrice): self
    {
        $this->liqPrice = $liqPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getBustPrice(): float
    {
        return $this->bustPrice;
    }

    /**
     * @param float $bustPrice
     * @return MyPositionResponse
     */
    private function setBustPrice(float $bustPrice): self
    {
        $this->bustPrice = $bustPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getTpSlMode(): string
    {
        return $this->tpSlMode;
    }

    /**
     * @param string $tpSlMode
     * @return MyPositionResponse
     */
    private function setTpSlMode(string $tpSlMode): self
    {
        $this->tpSlMode = $tpSlMode;
        return $this;
    }

    /**
     * @return float
     */
    public function getTakeProfit(): float
    {
        return $this->takeProfit;
    }

    /**
     * @param float $takeProfit
     * @return MyPositionResponse
     */
    private function setTakeProfit(float $takeProfit): self
    {
        $this->takeProfit = $takeProfit;
        return $this;
    }

    /**
     * @return float
     */
    public function getStopLoss(): float
    {
        return $this->stopLoss;
    }

    /**
     * @param float $stopLoss
     * @return MyPositionResponse
     */
    private function setStopLoss(float $stopLoss): self
    {
        $this->stopLoss = $stopLoss;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime
    {
        return $this->createdTime;
    }

    /**
     * @param string $createdTime
     * @return MyPositionResponse
     */
    private function setCreatedTime(string $createdTime): self
    {
        $this->createdTime = DateTimeHelper::makeFromTimestamp($createdTime);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedTime(): \DateTime
    {
        return $this->updatedTime;
    }

    /**
     * @param string $updatedTime
     * @return MyPositionResponse
     */
    private function setUpdatedTime(string $updatedTime): self
    {
        $this->updatedTime = DateTimeHelper::makeFromTimestamp($updatedTime);
        return $this;
    }

    /**
     * @return string
     */
    public function getTrailingStop(): string
    {
        return $this->trailingStop;
    }

    /**
     * @param string $trailingStop
     * @return MyPositionResponse
     */
    private function setTrailingStop(string $trailingStop): self
    {
        $this->trailingStop = $trailingStop;
        return $this;
    }

    /**
     * @return float
     */
    public function getActivePrice(): float
    {
        return $this->activePrice;
    }

    /**
     * @param float $activePrice
     * @return MyPositionResponse
     */
    private function setActivePrice(float $activePrice): self
    {
        $this->activePrice = $activePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getMarkPrice(): float
    {
        return $this->markPrice;
    }

    /**
     * @param float $markPrice
     * @return MyPositionResponse
     */
    private function setMarkPrice(float $markPrice): self
    {
        $this->markPrice = $markPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnrealisedPnl(): float
    {
        return $this->unrealisedPnl;
    }

    /**
     * @param float $unrealisedPnl
     * @return MyPositionResponse
     */
    private function setUnrealisedPnl(float $unrealisedPnl): self
    {
        $this->unrealisedPnl = $unrealisedPnl;
        return $this;
    }

    /**
     * @return float
     */
    public function getCumRealisedPnl(): float
    {
        return $this->cumRealisedPnl;
    }

    /**
     * @param float $cumRealisedPnl
     * @return MyPositionResponse
     */
    private function setCumRealisedPnl(float $cumRealisedPnl): self
    {
        $this->cumRealisedPnl = $cumRealisedPnl;
        return $this;
    }

    /**
     * @return float
     */
    public function getPositionMM(): float
    {
        return $this->positionMM;
    }

    /**
     * @param float $positionMM
     * @return MyPositionResponse
     */
    private function setPositionMM(float $positionMM): self
    {
        $this->positionMM = $positionMM;
        return $this;
    }

    /**
     * @return float
     */
    public function getPositionIM(): float
    {
        return $this->positionIM;
    }

    /**
     * @param float $positionIM
     * @return MyPositionResponse
     */
    private function setPositionIM(float $positionIM): self
    {
        $this->positionIM = $positionIM;
        return $this;
    }

    /**
     * @return string
     */
    public function getPositionStatus(): string
    {
        return $this->positionStatus;
    }

    /**
     * @param string $positionStatus
     * @return MyPositionResponse
     */
    private function setPositionStatus(string $positionStatus): self
    {
        $this->positionStatus = $positionStatus;
        return $this;
    }

    /**
     * @return float
     */
    public function getSessionAvgPrice(): float
    {
        return $this->sessionAvgPrice;
    }

    /**
     * @param float $sessionAvgPrice
     * @return MyPositionResponse
     */
    private function setSessionAvgPrice(float $sessionAvgPrice): self
    {
        $this->sessionAvgPrice = $sessionAvgPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getOccClosingFee(): float
    {
        return $this->occClosingFee;
    }

    /**
     * @param float $occClosingFee
     * @return MyPositionResponse
     */
    private function setOccClosingFee(float $occClosingFee): self
    {
        $this->occClosingFee = $occClosingFee;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdlRankIndicator(): int
    {
        return $this->adlRankIndicator;
    }

    /**
     * @param int $adlRankIndicator
     * @return MyPositionResponse
     */
    private function setAdlRankIndicator(int $adlRankIndicator): self
    {
        $this->adlRankIndicator = $adlRankIndicator;
        return $this;
    }
}
