<?php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces;

interface ISwitchPositionModeRequestInterface
{
    /**
     * Symbol name. Either symbol or coin is required. symbol has a higher priority
     * @param string $symbol
     * @return self
     */
    public function setSymbol(string $symbol): self;
    public function getSymbol(): string;

    /**
     * Coin
     * @param string $coin
     * @return self
     */
    public function setCoin(string $coin): self;
    public function getCoin(): string;

    /**
     * Position mode. 0: Merged Single. 3: Both Side
     * @param int $mode
     * @return self
     */
    public function setMode(int $mode): self;
    public function getMode(): int;
}