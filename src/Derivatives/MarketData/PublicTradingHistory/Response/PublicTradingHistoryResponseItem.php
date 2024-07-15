<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response;

use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryResponseItemInterface;

class PublicTradingHistoryResponseItem extends AbstractResponse implements IPublicTradingHistoryResponseItemInterface
{
    /**
     * Execution id
     * @var string $execId
     */
    private string $execId;

    /**
     * Symbol name
     * @var string $symbol
     */
    private string $symbol;

    /**
     * Trade price
     * @var float $price
     */
    private float $price;

    /**
     * Trade size
     * @var float $size
     */
    private float $size;

    /**
     * Side of taker Buy, Sell
     * @var string $side
     */
    private string $side;

    /**
     * Trade time
     * @var \DateTime $time
     */
    private \DateTime $time;

    /**
     * Is block trade
     * @var bool $isBlockTrade
     */
    private bool $isBlockTrade;

    public function __construct(array $data)
    {
        $this->execId = $data['execId'];
        $this->symbol = $data['symbol'];
        $this->price = $data['price'];
        $this->size = $data['size'];
        $this->side = $data['side'];
        $this->time = DateTimeHelper::makeFromTimestamp($data['time']);
        $this->isBlockTrade = $data['isBlockTrade'];
    }

    /**
     * @return string
     */
    public function getExecId(): string
    {
        return $this->execId;
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
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getSize(): float
    {
        return $this->size;
    }

    /**
     * @return string
     */
    public function getSide(): string
    {
        return $this->side;
    }

    /**
     * @return \DateTime
     */
    public function getTime(): \DateTime
    {
        return $this->time;
    }

    /**
     * @return bool
     */
    public function isBlockTrade(): bool
    {
        return $this->isBlockTrade;
    }
}