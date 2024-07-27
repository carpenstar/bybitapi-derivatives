<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseItemInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseItemInterface;

class GetOpenOrdersResponse extends AbstractResponse implements IGetOpenOrdersResponseInterface
{
    /**
     * @var string
     */
    private string $category;

    /**
     * @var string
     */
    private string $nextPageCursor;

    /**
     * @var IGetTradingFeeRateResponseItemInterface[]
     */
    private EntityCollection $list;

    public function __construct(array $data)
    {
        $this->category = $data['category'];
        $this->nextPageCursor = $data['nextPageCursor'];

        $list = new EntityCollection();

        if (!empty($data['list'])) {
            array_map(function ($item) use ($list) {
                $list->push(ResponseDtoBuilder::make(GetOpenOrdersResponseItem::class, $item));
            }, $data['list']);
        }

        $this->list = $list;
    }

    /**
     * @return IGetOpenOrdersResponseItemInterface[]
     */
    public function getOpenOrders(): array
    {
        return $this->list->all();
    }

    public function getNextPageCursor(): string
    {
        return $this->nextPageCursor;
    }

    public function getCategory(): string
    {
        return $this->category;
    }
}
