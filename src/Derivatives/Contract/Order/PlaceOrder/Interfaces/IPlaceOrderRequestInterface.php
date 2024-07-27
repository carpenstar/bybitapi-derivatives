<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces;

interface IPlaceOrderRequestInterface
{
    public function getSymbol(): string;
    public function setSymbol(string $symbol): self;
    public function getSide(): string;
    public function setSide(string $side): self;
    public function getOrderType(): string;
    public function setOrderType(string $orderType): self;
    public function getQty(): float;
    public function setQty(float $quantity): self;
    public function getTimeInForce(): string;
    public function setTimeInForce(string $timeInForce): self;
    public function getPrice(): float;
    public function setPrice(float $price): self;
    public function getTriggerDirection(): int;
    public function setTriggerDirection(int $triggerDirection): self;
    public function getTriggerPrice(): string;
    public function setTriggerPrice(string $triggerPrice): self;
    public function getTriggerBy(): string;
    public function setTriggerBy(string $triggerBy): self;
    public function getPositionIdx(): int;
    public function setPositionIdx(int $positionIdx): self;
    public function getOrderLinkId(): string;
    public function setOrderLinkId(string $orderLinkId): self;
    public function getTakeProfit(): float;
    public function setTakeProfit(float $takeProfit): self;
    public function getStopLoss(): float;
    public function setStopLoss(float $stopLoss): self;
    public function getTpTriggerBy(): string;
    public function setTpTriggerBy(string $tpTriggerBy): self;
    public function getSlTriggerBy(): string;
    public function setSlTriggerBy(string $slTriggerBy): self;
    public function isReduceOnly(): bool;
    public function setReduceOnly(bool $reduceOnly): self;
    public function getSmpType(): string;
    public function setSmpType(string $smpType): self;
    public function isCloseOnTrigger(): bool;
    public function setCloseOnTrigger(bool $closeOnTrigger): self;
    public function getTpslMode(): string;
    public function setTpslMode(string $tpslMode): self;
    public function getTpLimitPrice(): string;
    public function setTpLimitPrice(string $tpLimitPrice): self;
    public function getSlLimitPrice(): string;
    public function setSlLimitPrice(string $slLimitPrice): self;
    public function getTpOrderType(): string;
    public function setTpOrderType(string $tpOrderType): self;
    public function getSlOrderType(): string;
    public function setSlOrderType(string $slOrderType): self;
}
