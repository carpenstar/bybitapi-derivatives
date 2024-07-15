<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Response;

use Carpenstar\ByBitAPI\Core\Objects\AbstractResponse;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseItemInterface;

class WalletBalanceResponseItem extends AbstractResponse implements IWalletBalanceResponseItemInterface
{
    private string $coin;
    private float $equity;
    private float $walletBalance;
    private float $positionMargin;
    private float $availableBalance;
    private float $orderMargin;
    private float $occClosingFee;
    private float $occFundingFee;
    private float $unrealisedPnl;
    private float $cumRealisedPnl;
    private float $givenCash;
    private float $serviceCash;
    private float $accountIM;
    private float $accountMM;

    public function __construct(array $data)
    {
        $this->coin = $data['coin'];
        $this->equity = $data['equity'];
        $this->walletBalance = (float) $data['walletBalance'];
        $this->positionMargin = (float) $data['positionMargin'];
        $this->availableBalance = (float) $data['availableBalance'];
        $this->orderMargin = (float) $data['orderMargin'];
        $this->occClosingFee = (float) $data['occClosingFee'];
        $this->occFundingFee = (float) $data['occFundingFee'];
        $this->unrealisedPnl = (float) $data['unrealisedPnl'];
        $this->cumRealisedPnl = (float) $data['cumRealisedPnl'];
        $this->givenCash = (float) $data['givenCash'];
        $this->serviceCash = (float) $data['serviceCash'];
        $this->accountIM = (float) $data['accountIM'];
        $this->accountMM = (float) $data['accountMM'];
    }

    /**
     * @return string
     */
    public function getCoin(): string
    {
        return $this->coin;
    }

    /**
     * @return float
     */
    public function getEquity(): float
    {
        return $this->equity;
    }

    /**
     * @return float
     */
    public function getWalletBalance(): float
    {
        return $this->walletBalance;
    }

    /**
     * @return float
     */
    public function getPositionMargin(): float
    {
        return $this->positionMargin;
    }

    /**
     * @return float
     */
    public function getAvailableBalance(): float
    {
        return $this->availableBalance;
    }

    /**
     * @return float
     */
    public function getOrderMargin(): float
    {
        return $this->orderMargin;
    }

    /**
     * @return float
     */
    public function getOccClosingFee(): float
    {
        return $this->occClosingFee;
    }

    /**
     * @return float
     */
    public function getOccFundingFee(): float
    {
        return $this->occFundingFee;
    }

    /**
     * @return float
     */
    public function getUnrealisedPnl(): float
    {
        return $this->unrealisedPnl;
    }

    /**
     * @return float
     */
    public function getCumRealisedPnl(): float
    {
        return $this->cumRealisedPnl;
    }

    /**
     * @return float
     */
    public function getGivenCash(): float
    {
        return $this->givenCash;
    }

    /**
     * @return float
     */
    public function getServiceCash(): float
    {
        return $this->serviceCash;
    }

    /**
     * @return string
     */
    public function getAccountIM(): float
    {
        return $this->accountIM;
    }

    /**
     * @return string
     */
    public function getAccountMM(): float
    {
        return $this->accountMM;
    }
}