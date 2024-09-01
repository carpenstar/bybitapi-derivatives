[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/badges/build.png?b=master)](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)


# ByBitAPI - derivatives-trading package

> [!IMPORTANT]
> Это неофициальный SDK для взаимодействия с биржей ByBit. Разработка ведется одним человеком исключительно на энтузиазме и по мере возможности  
По всем вопросам вы можете связаться со мной в Issues, по email: mighty.vlad@gmail.com или в телеграм: @novisad0189

> [!IMPORTANT]
> Этот пакет является расширением [bybitapi-sdk-core](https://github.com/carpenstar/bybitapi-sdk-core) 

## Требования

- PHP >= 7.4 

## Установка

```sh 
composer require carpenstar/bybitapi-sdk-derivatives:3.*
```

## Содержание:

<table>
  <tr>
    <th colspan="5" style="text-align: left; font-weight: bold">MARKET DATA</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Эндпоинт</th>
    <th style="text-align: center; font-weight: bold">Тип доступа</th>
    <th style="text-align: center; font-weight: bold">Смотреть в директории</th>
    <th style="text-align: center; font-weight: bold">Официальная документации</th>
    <th style="text-align: center; font-weight: bold">Язык</th>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/FundingRateHistory">Funding Rate History</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/FundingRateHistory">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/funding-rate" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/FundingRateHistory/README.md">EN</a>, <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/FundingRateHistory/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/IndexPriceKline">Index Price Kline</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/IndexPriceKline">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/index-kline" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/IndexPriceKline/README.md">EN</a>, 
<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/IndexPriceKline/README_ru.md">RU</a>
    </td>  
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/InstrumentInfo">Instrument Info</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/InstrumentInfo">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/instrument-info" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/InstrumentInfo/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/InstrumentInfo/README_ru.md">RU</a>
    </td>    

</tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/Kline">Kline</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/Kline">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/kline" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/Kline/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/Kline/README_ru.md">RU</a>
    </td>  
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/MarkPriceKline">Mark Price Kline</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/MarkPriceKline">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/mark-kline" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/MarkPriceKline/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/MarkPriceKline/README_ru.md">RU</a>
    </td>  
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/OpenInterest">Open Interest</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/OpenInterest">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/open-interest" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/OpenInterest/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/OpenInterest/README_ru.md">RU</a>
    </td>  
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/OrderBook">Order Book</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/orderbook">перейти</a></td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/OrderBook" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/OrderBook/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/OrderBook/README_ru.md">RU</a>
    </td>    
</tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/PublicTradingHistory">Public Trading History</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/PublicTradingHistory">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/trade" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/PublicTradingHistory/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/PublicTradingHistory/README_ru.md">RU</a>
    </td>   
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/RiskLimit">Risk Limit</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/RiskLimit">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/risk-limit" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/RiskLimit/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/RiskLimit/README_ru.md">RU</a>
    </td>   
</tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/TickerInfo">Ticker Info</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/TickerInfo">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/ticker" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/TickerInfo/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/TickerInfo/README_ru.md">RU</a>
    </td>   
  </tr>
  <tr>
    <th colspan="5" style="text-align: left; font-weight: bold">CONTRACT - ACCOUNT</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Эндпоинт</th>
    <th style="text-align: center; font-weight: bold">Тип доступа</th>
    <th style="text-align: center; font-weight: bold">Смотреть в директории</th>
    <th style="text-align: center; font-weight: bold">Официальная документации</th>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Account/GetTradingFeeRate">Get Trading Fee Rate</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Account/GetTradingFeeRate">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/fee-rate" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/GetTradingFeeRate/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/GetTradingFeeRate/README_ru.md">RU</a>
    </td> 
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Account/WalletBalance">Wallet Balance</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Account/WalletBalance">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/wallet" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/WalletBalance/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/WalletBalance/README_ru.md">RU</a>
    </td> 
  </tr>
  <tr>
    <th colspan="5" style="text-align: left; font-weight: bold">CONTRACT - ORDER</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Эндпоинт</th>
    <th style="text-align: center; font-weight: bold">Тип доступа</th>
    <th style="text-align: center; font-weight: bold">Смотреть в директории</th>
    <th style="text-align: center; font-weight: bold">Официальная документации</th>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/CancelAllOrder">Cancel All Order</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/CancelAllOrder">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cancel-all" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/CancelAllOrder/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/CancelAllOrder/README_ru.md">RU</a>
    </td> 
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/CancelOrder">Cancel Order</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/CancelOrder">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cancel" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/CancelOrder/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/CancelOrder/README_ru.md">RU</a>
    </td> 
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/GetOpenOrders">Get Open Orders</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/GetOpenOrders">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/open-order" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/GetOpenOrders/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/GetOpenOrders/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/GetOrderList">Get Order List</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/GetOrderList">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/order-list" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/GetOrderList/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/GetOrderList/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/PlaceOrder">Place Order</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/PlaceOrder">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/place-order" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/PlaceOrder/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/PlaceOrder/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/ReplaceOrder">Replace Order</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/ReplaceOrder">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/replace-order" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/ReplaceOrder/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/ReplaceOrder/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <th colspan="5" style="text-align: left; font-weight: bold">CONTRACT - POSITION</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Эндпоинт</th>
    <th style="text-align: center; font-weight: bold">Тип доступа</th>
    <th style="text-align: center; font-weight: bold">Смотреть в директории</th>
    <th style="text-align: center; font-weight: bold">Официальная документации</th>
    <th style="text-align: center; font-weight: bold">Язык</th>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/GetClosedPnL">Get Closed PnL</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/GetClosedPnL">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/closepnl" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/GetClosedPnL/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/GetClosedPnL/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/GetExecutionList">Get Execution List</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/GetExecutionList">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/execution-list" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/GetExecutionList/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/GetExecutionList/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/MyPosition">My Position</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/MyPosition">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/position-list" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/MyPosition/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/MyPosition/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetAutoAddMargin">Set Auto Add Margin</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetAutoAddMargin">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/auto-margin" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetAutoAddMargin/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetAutoAddMargin/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetLeverage">Set Leverage</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetLeverage">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/leverage" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetLeverage/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetLeverage/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetRiskLimit">Set Risk Limit</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetRiskLimit">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/set-risk-limit" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetRiskLimit/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetRiskLimit/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetTradingStop">Set Trading Stop</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetTradingStop">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/trading-stop" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetTradingStop/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetTradingStop/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchCrossIsolatedMargin">Switch Cross Isolated Margin</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchCrossIsolatedMargin">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cross-isolated" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchCrossIsolatedMargin/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchCrossIsolatedMargin/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchPositionMode">Switch Position Mode</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchPositionMode">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/position-mode" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchPositionMode/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchPositionMode/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchTpSlMode">Switch TpSl Mode</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchTpSlMode">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/tpsl-mode" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchTpSlMode/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchTpSlMode/README_ru.md">RU</a>
    </td>
  </tr>
</table>

---
