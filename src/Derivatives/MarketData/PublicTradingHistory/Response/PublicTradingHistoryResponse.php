<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryResponseItemInterface;

class PublicTradingHistoryResponse extends AbstractResponse implements IPublicTradingHistoryResponseInterface
{
    /** @var IPublicTradingHistoryResponseItemInterface[] */
    private EntityCollection $list;

    public function __construct(array $data)
    {
        $list = new EntityCollection();

        if (!empty($data['list'])) {
            array_map(function ($item) use ($list) {
                $list->push(ResponseDtoBuilder::make(PublicTradingHistoryResponseItem::class, $item));
            }, $data['list']);
        }

        $this->list = $list;
    }

    public function getTradingList(): array
    {
        return $this->list->all();
    }
}
