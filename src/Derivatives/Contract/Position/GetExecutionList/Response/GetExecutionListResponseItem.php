<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListResponseItemInterface;

class GetExecutionListResponseItem extends AbstractResponse implements IGetExecutionListResponseItemInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Buy,Sell
     * @var string $side
     */
    private string $side;

    /**
     * Order id
     * @var string $orderId
     */
    private string $orderId;

    /**
     * User customised order id
     * @var string $orderLinkId
     */
    private string $orderLinkId;

    /**
     * Order price
     * @var float $orderPrice
     */
    private float $orderPrice;

    /**
     * Order qty
     * @var float $orderQty
     */
    private float $orderQty;

    /**
     * Market,Limit
     * @var string $orderType
     */
    private string $orderType;

    /**
     * Stop order type
     * @var string $stopOrderType
     */
    private string $stopOrderType;

    /**
     * Trade Id
     * @var string $execId
     */
    private string $execId;

    /**
     * Execution price
     * @var float $execPrice
     */
    private float $execPrice;

    /**
     * Execution qty
     * @var float $execQty
     */
    private float $execQty;

    /**
     * Execution fee
     * @var float $execFee
     */
    private float $execFee;

    /**
     * Execution type
     * @var string $execType
     */
    private string $execType;

    /**
     * Execution position value
     * @var float $execValue
     */
    private float $execValue;

    /**
     * Trading fee rate
     * @var float $feeRate
     */
    private float $feeRate;

    /**
     * AddedLiquidity, RemovedLiquidity
     * @var string $lastLiquidityInd
     */
    private string $lastLiquidityInd;

    /**
     * Is maker
     * @var bool $isMaker
     */
    private bool $isMaker;

    /**
     * Remaining qty waiting for execution
     * @var float $leavesQty
     */
    private float $leavesQty;

    /**
     * Close size
     * @var float $closedSize
     */
    private float $closedSize;

    /**
     * Block trade id
     * @var string $blockTradeId
     */
    private string $blockTradeId;

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
     * Underlying price
     * @var float $underlyingPrice
     */
    private float $underlyingPrice;

    /**
     * Execution timestamp (ms)
     * @var \DateTime $execTime
     */
    private \DateTime $execTime;

    public function __construct(array $data)
    {
        $this->symbol = $data['symbol'];
        $this->side = $data['side'];
        $this->orderId = $data['orderId'];
        $this->orderLinkId = $data['orderLinkId'];
        $this->orderPrice = (float) $data['orderPrice'];
        $this->orderQty = (float) $data['orderQty'];
        $this->orderType = $data['orderType'];
        $this->stopOrderType = $data['stopOrderType'];
        $this->execId = $data['execId'];
        $this->execPrice = (float) $data['execPrice'];
        $this->execQty = (float) $data['execQty'];
        $this->execFee = (float) $data['execFee'];
        $this->execType = $data['execType'];
        $this->execValue = (float) $data['execValue'];
        $this->feeRate = (float) $data['feeRate'];
        $this->lastLiquidityInd = $data['lastLiquidityInd'];
        $this->isMaker = $data['isMaker'];
        $this->leavesQty = (float) $data['leavesQty'];
        $this->closedSize = (float) $data['closedSize'];
        $this->blockTradeId = $data['blockTradeId'];
        $this->markPrice = (float) $data['markPrice'];
        $this->indexPrice = (float) $data['indexPrice'];
        $this->underlyingPrice = (float) $data['underlyingPrice'];
        $this->execTime = DateTimeHelper::makeFromTimestamp($data['execTime']);
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @return string
     */
    public function getSide(): string
    {
        return $this->side;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getOrderLinkId(): string
    {
        return $this->orderLinkId;
    }

    /**
     * @return float
     */
    public function getOrderPrice(): float
    {
        return $this->orderPrice;
    }

    /**
     * @return float
     */
    public function getOrderQty(): float
    {
        return $this->orderQty;
    }

    /**
     * @return string
     */
    public function getOrderType(): string
    {
        return $this->orderType;
    }

    /**
     * @return string
     */
    public function getStopOrderType(): string
    {
        return $this->stopOrderType;
    }

    /**
     * @return string
     */
    public function getExecId(): string
    {
        return $this->execId;
    }

    /**
     * @return float
     */
    public function getExecPrice(): float
    {
        return $this->execPrice;
    }

    /**
     * @return float
     */
    public function getExecQty(): float
    {
        return $this->execQty;
    }

    /**
     * @return float
     */
    public function getExecFee(): float
    {
        return $this->execFee;
    }

    /**
     * @return string
     */
    public function getExecType(): string
    {
        return $this->execType;
    }

    /**
     * @return float
     */
    public function getExecValue(): float
    {
        return $this->execValue;
    }

    /**
     * @return float
     */
    public function getFeeRate(): float
    {
        return $this->feeRate;
    }

    /**
     * @return string
     */
    public function getLastLiquidityInd(): string
    {
        return $this->lastLiquidityInd;
    }

    /**
     * @return bool
     */
    public function isMaker(): bool
    {
        return $this->isMaker;
    }

    /**
     * @return float
     */
    public function getLeavesQty(): float
    {
        return $this->leavesQty;
    }

    /**
     * @return float
     */
    public function getClosedSize(): float
    {
        return $this->closedSize;
    }

    /**
     * @return string
     */
    public function getBlockTradeId(): string
    {
        return $this->blockTradeId;
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
    public function getUnderlyingPrice(): float
    {
        return $this->underlyingPrice;
    }

    /**
     * @return \DateTime
     */
    public function getExecTime(): \DateTime
    {
        return $this->execTime;
    }
}