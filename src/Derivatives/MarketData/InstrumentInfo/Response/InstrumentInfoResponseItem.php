<?php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response;

use Carpenstar\ByBitAPI\Core\Builders\ResponseDtoBuilder;
use Carpenstar\ByBitAPI\Core\Helpers\DateTimeHelper;
use Carpenstar\ByBitAPI\Core\Objects\Collection\EntityCollection;
use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoResponseItemInterface;
use DateTime;

class InstrumentInfoResponseItem extends AbstractResponse implements IInstrumentInfoResponseItemInterface
{
    /**
     * Derivatives products category. Keeps empty string `""` when `category` is not passed
     * @var string|null
     */
    private ?string $symbol;

    /**
     * Contract type. `LinearPerpetual`, `InversePerpetual`, `InverseFutures`
     * @var null|string $contractType
     */
    private ?string $contractType;

    /**
     * Symbol status
     * @var null|string $status
     */
    private ?string $status;

    /**
     * Base coin. e.g BTCUSDT, BTC is base coin
     * @var string|null $baseCoin
     */
    private ?string $baseCoin;

    /**
     * Quote coin. e.g BTCPERP, USDC is quote coin
     * @var string|null
     */
    private ?string $quoteCoin;

    /**
     * The launch timestamp (ms)
     * @var \DateTime|null
     */
    private \DateTime $launchTime;

    /**
     * The delivery timestamp (ms). "0" for perpetual
     * @var null|DateTime $deliveryTime
     */
    private ?\DateTime $deliveryTime;

    /**
     * The delivery fee rate
     * @var float
     */
    private float $deliveryFeeRate;

    /**
     * Price scale
     * @var float
     */
    private float $priceScale;

    /**
     * Support unified margin trade or not
     * @var bool
     */
    private bool $unifiedMarginTrade;

    /**
     * Funding interval (minute)
     * @var int
     */
    private int $fundingInterval;

    /**
     * Settle coin. e.g BTCUSD, BTC is settle coin
     * @var string|null
     */
    private ?string $settleCoin;

    /**
     * The cursor used to pagination
     * @var string|null
     */
    private ?string $nextPageCursor;

    /**
     * @var EntityCollection
     */
    private EntityCollection $leverageFilter;

    /**
     * @var EntityCollection $pricefilter
     */
    private EntityCollection $priceFilter;

    /**
     * @var EntityCollection $lotSizeFilter
     */
    private EntityCollection $lotSizeFilter;

    public function __construct(array $data)
    {
        $leverageFilterCollection = new EntityCollection();
        $priceFilterCollection = new EntityCollection();
        $lotSizeFilterCollection = new EntityCollection();

        $this->settleCoin = $data['settleCoin'];
        $this->fundingInterval = (int)$data['fundingInterval'];
        $this->unifiedMarginTrade = (bool)$data['unifiedMarginTrade'];
        $this->priceScale = $data['priceScale'] ?? 0.0;
        $this->deliveryFeeRate = (float)$data['deliveryFeeRate'];
        $this->deliveryTime = DateTimeHelper::makeFromTimestamp($data['deliveryTime']);
        $this->launchTime = DateTimeHelper::makeFromTimestamp($data['launchTime']);
        $this->quoteCoin = $data['quoteCoin'];
        $this->baseCoin = $data['baseCoin'];
        $this->symbol = $data['symbol'];
        $this->contractType = $data['contractType'] ?? null;
        $this->status = $data['status'];
        $this->nextPageCursor = $data['nextPageCursor'] ?? null;

        if (!empty($data['priceFilter'])) {
            array_map(function ($priceFilter) use ($priceFilterCollection) {
                $priceFilterCollection->push(ResponseDtoBuilder::make(PriceFilterResponseItem::class, $priceFilter));
            }, [$data['priceFilter']]);
        }

        if (!empty($data['leverageFilter'])) {
            array_map(function ($leverageFilterItem) use ($leverageFilterCollection) {
                $leverageFilterCollection->push(ResponseDtoBuilder::make(LeverageFilterResponseItem::class, $leverageFilterItem));
            }, [$data['leverageFilter']]);
        }

        if (!empty($data['lotSizeFilter'])) {
            array_map(function ($lotSizeFilterItem) use ($lotSizeFilterCollection) {
                $lotSizeFilterCollection->push(ResponseDtoBuilder::make(LotSizeFilterResponseItem::class, $lotSizeFilterItem));
            }, [$data['lotSizeFilter']]);
        }

        $this
            ->setLeverageFilter($leverageFilterCollection)
            ->setPriceFilter($priceFilterCollection)
            ->setLotSizeFilter($lotSizeFilterCollection);
    }

    /**
     * @return EntityCollection
     */
    public function getLotSizeFilter(): EntityCollection
    {
        return $this->lotSizeFilter;
    }

    /**
     * @param EntityCollection $lotSizeFilter
     * @return self
     */
    private function setLotSizeFilter(EntityCollection $lotSizeFilter): self
    {
        $this->lotSizeFilter = $lotSizeFilter;
        return $this;
    }

    /**
     * @return EntityCollection
     */
    public function getPriceFilter(): EntityCollection
    {
        return $this->priceFilter;
    }

    /**
     * @param EntityCollection $priceFilter
     * @return self
     */
    private function setPriceFilter(EntityCollection $priceFilter): self
    {
        $this->priceFilter = $priceFilter;
        return $this;
    }

    /**
     * @param EntityCollection $leverageFilter
     * @return self
     */
    private function setLeverageFilter(EntityCollection $leverageFilter): self
    {
        $this->leverageFilter = $leverageFilter;
        return $this;
    }

    /**
     * @return EntityCollection
     */
    public function getLeverageFilter(): EntityCollection
    {
        return $this->leverageFilter;
    }

    /**
     * @return string|null
     */
    public function getSettleCoin(): ?string
    {
        return $this->settleCoin;
    }

    /**
     * @return int
     */
    public function getFundingInterval(): int
    {
        return $this->fundingInterval;
    }

    /**
     * @return bool
     */
    public function getUnifiedMarginTrade(): bool
    {
        return $this->unifiedMarginTrade;
    }

    /**
     * @return float
     */
    public function getPriceScale(): float
    {
        return $this->priceScale;
    }

    /**
     * @return float
     */
    public function getDeliveryFeeRate(): float
    {
        return $this->deliveryFeeRate;
    }

    /**
     * @return DateTime|null
     */
    public function getDeliveryTime(): ?DateTime
    {
        return $this->deliveryTime;
    }

    /**
     * @return \DateTime|null
     */
    public function getLaunchTime(): ?\DateTime
    {
        return $this->launchTime;
    }

    /**
     * @return string|null
     */
    public function getQuoteCoin(): ?string
    {
        return $this->quoteCoin;
    }

    /**
     * @return string|null
     */
    public function getBaseCoin(): ?string
    {
        return $this->baseCoin;
    }

    /**
     * @return string|null
     */
    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    /**
     * @return string|null
     */
    public function getContractType(): ?string
    {
        return $this->contractType;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getNextPageCursor(): ?string
    {
        return $this->nextPageCursor;
    }
}