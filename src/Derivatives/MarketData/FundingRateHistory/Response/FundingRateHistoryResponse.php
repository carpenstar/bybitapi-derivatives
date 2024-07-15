<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Response;


use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryResponseInterface;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryResponseItemInterface;

class FundingRateHistoryResponse extends AbstractResponse implements IFundingRateHistoryResponseInterface
{
    /**
     * @var IFundingRateHistoryResponseItemInterface[]
     */
    private EntityCollection $list;

    public function __construct(array $data)
    {
        $list = new EntityCollection();

        if (!empty($data['list'])) {
            array_map(function ($item) use ($list) {
                $list->push(ResponseDtoBuilder::make(FundingRateHistoryResponseItem::class, $item));
            }, $data['list']);
        }

        $this->list = $list;
    }

    /**
     * @return IFundingRateHistoryResponseItemInterface[]
     */
    public function getFundingRates(): array
    {
        return $this->list->all();
    }
}