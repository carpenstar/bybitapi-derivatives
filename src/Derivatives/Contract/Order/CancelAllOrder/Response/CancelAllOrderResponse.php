<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseItemInterface;

class CancelAllOrderResponse extends AbstractResponse implements ICancelAllOrderResponseInterface
{
    /**
     * @var ICancelAllOrderResponseItemInterface[]
     */
    private EntityCollection $list;

    public function __construct(array $data)
    {
        $list = new EntityCollection();

        if (!empty($data['list'])) {
            array_map(function ($item) use ($list) {
                $list->push(ResponseDtoBuilder::make(CancelAllOrderResponseItem::class, $item));
            }, $data['list']);
        }

        $this->list = $list;
    }

    /**
     * @return ICancelAllOrderResponseItemInterface[]
     */
    public function getCancelOrdersList(): array
    {
        return $this->list->all();
    }
}
