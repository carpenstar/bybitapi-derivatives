<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Tests;

use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseItemInterface;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Request\WalletBalanceRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\WalletBalance;
use PHPUnit\Framework\TestCase;

class WalletBalanceTest extends TestCase
{
    public function testSuccessEndpoint()
    {
        $bybit = (new BybitAPI())->setCredentials('https://api-testnet.bybit.com', 'fL02oi5qo8i2jDxlum', 'Ne1EE35XTprIWrId9vGEAc1ZYJTmodA4qFzZ');

        $response = $bybit->privateEndpoint(WalletBalance::class, (new WalletBalanceRequest()))->execute();

        echo "Return code: {$response->getReturnCode()} \n";
        echo "Return message: {$response->getReturnMessage()} \n";

        $walletBalances = array_slice($response->getResult()->getBalances(), 0, 3);

        /** @var IWalletBalanceResponseItemInterface $balance */
        foreach ($walletBalances as $balance) {
            echo "----- \n";
            echo "Coin: {$balance->getCoin()} \n";
            echo "Equity: {$balance->getEquity()} \n";
            echo "Wallet Balance: {$balance->getWalletBalance()} \n";
            echo "Position Margin: {$balance->getPositionMargin()} \n";
            echo "Available Balance: {$balance->getAvailableBalance()} \n";
            echo "Order Margin: {$balance->getOrderMargin()} \n";
            echo "Occ Closing Fee: {$balance->getOccClosingFee()} \n";
            echo "Occ Funding Fee: {$balance->getOccFundingFee()} \n";
            echo "Unrealised PnL: {$balance->getUnrealisedPnl()} \n";
            echo "Cumulative Realised PnL: {$balance->getCumRealisedPnl()} \n";
            echo "Given Cash: {$balance->getGivenCash()} \n";
            echo "Service Cash: {$balance->getServiceCash()} \n";
            echo "Account IM: {$balance->getAccountIM()} \n";
            echo "Account MM: {$balance->getAccountMM()} \n";
        }

        /**
         * Return code: 0
         * Return message: OK
         * -----
         * Coin: BTC
         * Equity: 0.2
         * Wallet Balance: 0.2
         * Position Margin: 0
         * Available Balance: 0.2
         * Order Margin: 0
         * Occ Closing Fee: 0
         * Occ Funding Fee: 0
         * Unrealised PnL: 0
         * Cumulative Realised PnL: 0
         * Given Cash: 0
         * Service Cash: 0
         * Account IM:
         * Account MM:
         * -----
         * Coin: ETH
         * Equity: 0
         * Wallet Balance: 0
         * Position Margin: 0
         * Available Balance: 0
         * Order Margin: 0
         * Occ Closing Fee: 0
         * Occ Funding Fee: 0
         * Unrealised PnL: 0
         * Cumulative Realised PnL: 0
         * Given Cash: 0
         * Service Cash: 0
         * Account IM:
         * Account MM:
         * -----
         * Coin: EOS
         * Equity: 0
         * Wallet Balance: 0
         * Position Margin: 0
         * Available Balance: 0
         * Order Margin: 0
         * Occ Closing Fee: 0
         * Occ Funding Fee: 0
         * Unrealised PnL: 0
         * Cumulative Realised PnL: 0
         * Given Cash: 0
         * Service Cash: 0
         * Account IM:
         * Account MM:
         */

        $this->assertTrue(true);
    }

}
