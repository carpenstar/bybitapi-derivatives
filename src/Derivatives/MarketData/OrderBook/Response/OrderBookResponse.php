<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookResponsePriceItemInterface;

class OrderBookResponse extends AbstractResponse
{
    private string $symbol;

    private \DateTime $timestamp;

    private int $updateId;

    private EntityCollection $bid;

    private EntityCollection $ask;

    public function __construct(array $data)
    {
        $this->bid = new EntityCollection();
        $this->ask = new EntityCollection();

        $this->symbol = $data['s'];
        $this->timestamp = DateTimeHelper::makeFromTimestamp($data['ts']);
        $this->updateId = $data['u'];

        $this
            ->setBid($data['b'])
            ->setAsk($data['a']);
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp(): \DateTime
    {
        return $this->timestamp;
    }

    /**
     * @return int
     */
    public function getUpdateId(): int
    {
        return $this->updateId;
    }

    private function setBid(?array $bids = []): self
    {
        $bidList = $this->bid;

        if (!empty($bids)) {
            array_map(function ($bid) use ($bidList) {
                $bidList->push(ResponseDtoBuilder::make(OrderBookPriceItemResponse::class, $bid));
            }, $bids);
        }

        return $this;
    }

    /**
     * @return IOrderBookResponsePriceItemInterface[]
     */
    public function getBid(): ?array
    {
        return $this->bid->all();
    }

    private function setAsk(?array $asks = []): self
    {
        $askList = $this->ask;

        if (!empty($asks)) {
            array_map(function ($ask) use ($askList) {
                $askList->push(ResponseDtoBuilder::make(OrderBookPriceItemResponse::class, $ask));
            }, $asks);
        }

        return $this;
    }

    /**
     * @return IOrderBookResponsePriceItemInterface[]
     */
    public function getAsk(): ?array
    {
        return $this->ask->all();
    }
}