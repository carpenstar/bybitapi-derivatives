<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseItemInterface;

class GetTradingFeeRateResponse extends AbstractResponse implements IGetTradingFeeRateResponseInterface
{
    /**
     * @var IGetTradingFeeRateResponseItemInterface[]
     */
    private EntityCollection $list;

    public function __construct(array $data)
    {
        $list = new EntityCollection();

        if (!empty($data['list'])) {
            array_map(function ($item) use ($list) {
                $list->push(ResponseDtoBuilder::make(GetTradingFeeRateResponseItem::class, $item));
            }, $data['list']);
        }

        $this->list = $list;
    }

    /**
     * @return IGetTradingFeeRateResponseItemInterface[]
     */
    public function getFeeRates(): array
    {
        return $this->list->all();
    }
}