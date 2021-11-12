# Calcasa\Api\AdressenApi

All URIs are relative to https://api.calcasa.nl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAdres()**](AdressenApi.md#getAdres) | **GET** /api/v0/adressen/{bagNummeraanduidingId} | Adres info op met het BAG Nummeraanduiding Id.
[**searchAdres()**](AdressenApi.md#searchAdres) | **POST** /api/v0/adressen/zoeken | Zoek adres info op basis van het gegeven adres.


## `getAdres()`

```php
getAdres($bag_nummeraanduiding_id): \Calcasa\Api\Model\AdresInfo
```

Adres info op met het BAG Nummeraanduiding Id.

De Notities zullen leeg blijven voor dit endpoint.  Het adres object zal gefilterd terug komen afhankelijk van het client_id wat gebruikt is voor de authenticatie.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Calcasa\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Calcasa\Api\Api\AdressenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bag_nummeraanduiding_id = 56; // int

try {
    $result = $apiInstance->getAdres($bag_nummeraanduiding_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdressenApi->getAdres: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bag_nummeraanduiding_id** | **int**|  |

### Return type

[**\Calcasa\Api\Model\AdresInfo**](../Model/AdresInfo.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAdres()`

```php
searchAdres($adres): \Calcasa\Api\Model\AdresInfo
```

Zoek adres info op basis van het gegeven adres.

De notities geven aan of de input al dan niet gewijzigd of onbekend is.  De enige velden die echt nodig zijn voor een compleet resultaat zijn de postcode, het huisnummer en de huisnummer toevoeging.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Calcasa\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Calcasa\Api\Api\AdressenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$adres = new \Calcasa\Api\Model\Adres(); // \Calcasa\Api\Model\Adres

try {
    $result = $apiInstance->searchAdres($adres);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdressenApi->searchAdres: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **adres** | [**\Calcasa\Api\Model\Adres**](../Model/Adres.md)|  | [optional]

### Return type

[**\Calcasa\Api\Model\AdresInfo**](../Model/AdresInfo.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
