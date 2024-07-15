[![phpunit](https://github.com/carpenstar/bybitapi-sdk-derivatives/actions/workflows/github-action.yml/badge.svg?branch=master)](https://github.com/carpenstar/bybitapi-sdk-derivatives/actions/workflows/github-action.yml/badge.svg?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/badges/build.png?b=master)](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)


# ByBitAPI - derivatives-trading package

**Disclaimer: This is an unofficial SDK for integration with the ByBit exchange.
Functional support is provided only within the code's area of responsibility and, if possible, on the part of the developer**

**Integration development is not yet complete, so functionality (either completely or individual components) is not guaranteed.**

## Requirements

- PHP >= 7.4

## Installation

```sh 
composer require carpenstar/bybitapi-sdk-derivatives
```

## Contents:

<table>
  <tr>
    <th colspan="5" style="text-align: left; font-weight: bold">MARKET DATA</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Endpoint</th>
    <th style="text-align: center; font-weight: bold">Access type</th>
    <th style="text-align: center; font-weight: bold">View in directory</th>
    <th style="text-align: center; font-weight: bold">Official documentation</th>
    <th style="text-align: center; font-weight: bold">Language</th>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---funding-rate-history">Funding Rate History</a>
    </td>
    <td>Public</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/FundingRateHistory">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/funding-rate" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/FundingRateHistory/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/FundingRateHistory/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---index-price-kline">Index Price Kline</a>
    </td>
    <td>Public</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/IndexPriceKline">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/index-kline" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/IndexPriceKline/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/IndexPriceKline/README_ru.md">RU</a>
    </td>  
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---instrument-info">Instrument Info</a>
    </td>
    <td>Public</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/InstrumentInfo">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/instrument-info" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/InstrumentInfo/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/InstrumentInfo/README_ru.md">RU</a>
    </td>    

</tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---kline">Kline</a>
    </td>
    <td>Public</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/Kline">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/kline" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/Kline/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/Kline/README_ru.md">RU</a>
    </td>  
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---mark-price-kline">Mark Price Kline</a>
    </td>
    <td>Public</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/MarkPriceKline">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/mark-kline" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/MarkPriceKline/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/MarkPriceKline/README_ru.md">RU</a>
    </td>  
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---open-interest">Open Interest</a>
    </td>
    <td>Public</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/OpenInterest">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/open-interest" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/OpenInterest/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/OpenInterest/README_ru.md">RU</a>
    </td>  
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---order-book">Order Book</a>
    </td>
    <td>Public</td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/orderbook">view</a></td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/OrderBook" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/OrderBook/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/OrderBook/README_ru.md">RU</a>
    </td>    
</tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---public-trading-history">Public Trading History</a>
    </td>
    <td>Public</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/PublicTradingHistory">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/trade" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/PublicTradingHistory/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/PublicTradingHistory/README_ru.md">RU</a>
    </td>   
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---risk-limit">Risk Limit</a>
    </td>
    <td>Public</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/RiskLimit">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/risk-limit" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/RiskLimit/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/RiskLimit/README_ru.md">RU</a>
    </td>   
</tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---ticker-info">Ticker Info</a>
    </td>
    <td>Public</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/TickerInfo">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/ticker" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/TickerInfo/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/TickerInfo/README_ru.md">RU</a>
    </td>   
  </tr>
  <tr>
    <th colspan="5" style="text-align: left; font-weight: bold">CONTRACT - ACCOUNT</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Endpoint</th>
    <th style="text-align: center; font-weight: bold">Access Type</th>
    <th style="text-align: center; font-weight: bold">View in directory</th>
    <th style="text-align: center; font-weight: bold">Official documentation</th>
    <th style="text-align: center; font-weight: bold">Language</th>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---get-trading-fee-rate">Get Trading Fee Rate</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Account/GetTradingFeeRate">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/fee-rate" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/GetTradingFeeRate/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/GetTradingFeeRate/README_ru.md">RU</a>
    </td> 
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---wallet-balance">Wallet Balance</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Account/WalletBalance">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/wallet" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/WalletBalance/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/WalletBalance/README_ru.md">RU</a>
    </td> 
  </tr>
  <tr>
    <th colspan="5" style="text-align: left; font-weight: bold">CONTRACT - ORDER</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Endpoint</th>
    <th style="text-align: center; font-weight: bold">Access Type</th>
    <th style="text-align: center; font-weight: bold">View in directory</th>
    <th style="text-align: center; font-weight: bold">Official documentation</th>
    <th style="text-align: center; font-weight: bold">Language</th>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---order---cancel-all-order">Cancel All Order</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/CancelAllOrder">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cancel-all" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/CancelAllOrder/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/CancelAllOrder/README_ru.md">RU</a>
    </td> 
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---order---cancel-order">Cancel Order</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/CancelOrder">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cancel" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/CancelOrder/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/CancelOrder/README_ru.md">RU</a>
    </td> 
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---order---get-open-orders">Get Open Orders</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/GetOpenOrders">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/open-order" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/GetOpenOrders/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/GetOpenOrders/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---order---get-order-list">Get Order List</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/GetOrderList">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/order-list" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/GetOrderList/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/GetOrderList/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---order---place-order">Place Order</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/PlaceOrder">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/place-order" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/PlaceOrder/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/PlaceOrder/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---order---replace-order">Replace Order</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/ReplaceOrder">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/replace-order" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/ReplaceOrder/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/ReplaceOrder/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <th colspan="5" style="text-align: left; font-weight: bold">CONTRACT - POSITION</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Endpoint</th>
    <th style="text-align: center; font-weight: bold">Access Type</th>
    <th style="text-align: center; font-weight: bold">View in directory</th>
    <th style="text-align: center; font-weight: bold">Official documentation</th>
    <th style="text-align: center; font-weight: bold">Language</th>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---get-closed-pnl">Get Closed PnL</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/GetClosedPnL">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/closepnl" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/GetClosedPnL/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/GetClosedPnL/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---get-execution-list">Get Execution List</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/GetExecutionList">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/execution-list" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/GetExecutionList/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/GetExecutionList/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---my-position">My Position</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/MyPosition">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/position-list" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/MyPosition/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/MyPosition/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---set-auto-add-margin">Set Auto Add Margin</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetAutoAddMargin">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/auto-margin" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetAutoAddMargin/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetAutoAddMargin/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---set-leverage">Set Leverage</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetLeverage">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/leverage" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetLeverage/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetLeverage/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---set-risk-limit">Set Risk Limit</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetRiskLimit">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/set-risk-limit" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetRiskLimit/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetRiskLimit/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---set-trading-stop">Set Trading Stop</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetTradingStop">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/trading-stop" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetTradingStop/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetTradingStop/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---switch-cross-isolated-margin">Switch Cross Isolated Margin</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchCrossIsolatedMargin">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cross-isolated" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchCrossIsolatedMargin/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchCrossIsolatedMargin/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---switch-position-mode">Switch Position Mode</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchPositionMode">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/position-mode" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchPositionMode/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchPositionMode/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---switch-tpsl-mode">Switch TpSl Mode</a>
    </td>
    <td>Private</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchTpSlMode">view</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/tpsl-mode" target="_blank">view</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchTpSlMode/README.md">EN</a>,<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchTpSlMode/README_ru.md">RU</a>
    </td>
  </tr>
</table>

---
