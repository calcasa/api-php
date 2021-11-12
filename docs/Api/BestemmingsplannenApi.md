# Calcasa\Api\BestemmingsplannenApi

All URIs are relative to https://api.calcasa.nl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBestemmingById()**](BestemmingsplannenApi.md#getBestemmingById) | **GET** /api/v0/bestemmingsplannen/{id} | Gegevens over de bestemmingsplannen op de locatie van een adres (BAG Nummeraanduiding ID).


## `getBestemmingById()`

```php
getBestemmingById($id): \Calcasa\Api\Model\Bestemmingsdata
```

Gegevens over de bestemmingsplannen op de locatie van een adres (BAG Nummeraanduiding ID).

Het bodemdata object zal gefilterd terug komen afhankelijk van het client_id wat gebruikt is voor de authenticatie.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Calcasa\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Calcasa\Api\Api\BestemmingsplannenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Een BAG Nummeraanduiding ID om een adres te specificeren.

try {
    $result = $apiInstance->getBestemmingById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BestemmingsplannenApi->getBestemmingById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Een BAG Nummeraanduiding ID om een adres te specificeren. |

### Return type

[**\Calcasa\Api\Model\Bestemmingsdata**](../Model/Bestemmingsdata.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
