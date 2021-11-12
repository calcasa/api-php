# Calcasa\Api\BodemApi

All URIs are relative to https://api.calcasa.nl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBodemById()**](BodemApi.md#getBodemById) | **GET** /api/v0/bodem/{id} | Gegevens over de bodemkwaliteit op de locatie van een adres (BAG Nummeraanduiding ID).


## `getBodemById()`

```php
getBodemById($id): \Calcasa\Api\Model\Bodemdata
```

Gegevens over de bodemkwaliteit op de locatie van een adres (BAG Nummeraanduiding ID).

Het bodemdata object zal gefilterd terug komen afhankelijk van het client_id wat gebruikt is voor de authenticatie.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Calcasa\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Calcasa\Api\Api\BodemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Een BAG Nummeraanduiding ID om een adres te specificeren.

try {
    $result = $apiInstance->getBodemById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BodemApi->getBodemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Een BAG Nummeraanduiding ID om een adres te specificeren. |

### Return type

[**\Calcasa\Api\Model\Bodemdata**](../Model/Bodemdata.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
