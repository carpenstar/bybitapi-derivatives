<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoResponseItemInterface;

class TickerInfoResponse extends AbstractResponse implements ITickerInfoResponseInterface
{
    /**
     * @var ITickerInfoResponseItemInterface[]
     */
    private EntityCollection $list;

    public function __construct(array $data)
    {
        $list = new EntityCollection();

        if (!empty($data['list'])) {
            array_map(function ($item) use ($list) {
                $list->push(ResponseDtoBuilder::make(TickerInfoResponseItem::class, $item));
            }, $data['list']);
        }

        $this->list = $list;
    }

    public function getTickerInfo(): ITickerInfoResponseItemInterface
    {
        return $this->list->fetch();
    }
}