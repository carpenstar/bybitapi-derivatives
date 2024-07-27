<?php

namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineResponseInterface;

class KlineResponse extends AbstractResponse implements IKlineResponseInterface
{
    /**
     * @var KlineResponseItem[]
     */
    private EntityCollection $list;

    public function __construct(array $data)
    {
        $list = new EntityCollection();

        if (!empty($data['list'])) {
            array_map(function ($item) use ($list) {
                $list->push(ResponseDtoBuilder::make(KlineResponseItem::class, $item));
            }, $data['list']);
        }

        $this->list = $list;
    }

    public function getKlineList(): array
    {
        return $this->list->all();
    }
}
