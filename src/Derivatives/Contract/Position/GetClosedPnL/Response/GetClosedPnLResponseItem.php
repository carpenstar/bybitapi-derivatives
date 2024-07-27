<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseItemInterface;

class GetClosedPnLResponseItem extends AbstractResponse implements IGetClosedPnLResponseItemInterface
{
    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Order Id
     * @var string $orderId
     */
    private string $orderId;

    /**
     * Sell, Buy, Side
     * @var string $side
     */
    private string $side;

    /**
     * Order qty
     * @var float $qty
     */
    private float $qty;

    /**
     * leverage
     * @var float $leverage
     */
    private float $leverage;

    /**
     * Order price
     * @var float $orderPrice
     */
    private float $orderPrice;

    /**
     * Order type. Market,Limit
     * @var string $orderType
     */
    private string $orderType;

    /**
     * Exec type
     * @var string $execType
     */
    private string $execType;

    /**
     * Closed size
     * @var float $closedSize
     */
    private float $closedSize;

    /**
     * Cumulated entry position value
     * @var float $cumEntryValue
     */
    private float $cumEntryValue;

    /**
     * Average entry price
     * @var float $avgEntryPrice
     */
    private float $avgEntryPrice;

    /**
     * Cumulated exit position value
     * @var float $cumExitValue
     */
    private float $cumExitValue;

    /**
     * Average exit price
     * @var float $avgExitPrice
     */
    private float $avgExitPrice;

    /**
     * Closed PnL
     * @var float $closedPnl
     */
    private float $closedPnl;

    /**
     * The number of fills in a single order
     * @var int $fillCount
     */
    private int $fillCount;

    /**
     * The created time (ms)
     * @var \DateTime $createdAt
     */
    private \DateTime $createdAt;

    private \DateTime $createdTime;

    private \DateTime $updatedTime;

    public function __construct(array $data)
    {
        $this->symbol = $data['symbol'];
        $this->orderId = $data['orderId'];
        $this->side = $data['side'];
        $this->qty = $data['qty'];
        $this->leverage = $data['leverage'];
        $this->orderPrice = $data['orderPrice'];
        $this->execType = $data['execType'];
        $this->orderType = $data['orderType'];
        $this->closedSize = $data['closedSize'];
        $this->cumEntryValue = $data['cumEntryValue'];
        $this->avgEntryPrice = $data['avgEntryPrice'];
        $this->cumExitValue = $data['cumExitValue'];
        $this->avgExitPrice = $data['avgExitPrice'];
        $this->closedPnl = $data['closedPnl'];
        $this->fillCount = $data['fillCount'];
        $this->createdAt = DateTimeHelper::makeFromTimestamp($data['createdAt']);
        $this->createdTime = DateTimeHelper::makeFromTimestamp($data['createdTime']);
        $this->updatedTime = DateTimeHelper::makeFromTimestamp($data['updatedTime']);
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
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getSide(): string
    {
        return $this->side;
    }

    /**
     * @return float
     */
    public function getQty(): float
    {
        return $this->qty;
    }

    /**
     * @return float
     */
    public function getLeverage(): float
    {
        return $this->leverage;
    }

    /**
     * @return float
     */
    public function getOrderPrice(): float
    {
        return $this->orderPrice;
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
    public function getExecType(): string
    {
        return $this->execType;
    }

    /**
     * @return float
     */
    public function getClosedSize(): float
    {
        return $this->closedSize;
    }


    /**
     * @return float
     */
    public function getCumEntryValue(): float
    {
        return $this->cumEntryValue;
    }

    /**
     * @return float
     */
    public function getAvgEntryPrice(): float
    {
        return $this->avgEntryPrice;
    }

    /**
     * @return float
     */
    public function getCumExitValue(): float
    {
        return $this->cumExitValue;
    }

    /**
     * @return float
     */
    public function getAvgExitPrice(): float
    {
        return $this->avgExitPrice;
    }

    /**
     * @return float
     */
    public function getClosedPnl(): float
    {
        return $this->closedPnl;
    }

    /**
     * @return int
     */
    public function getFillCount(): int
    {
        return $this->fillCount;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function getCreatedTime(): \DateTime
    {
        return $this->createdTime;
    }

    public function getUpdatedTime(): \DateTime
    {
        return $this->updatedTime;
    }

}
