# Calcasa\Api\BuurtApi

All URIs are relative to https://api.calcasa.nl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBuurt()**](BuurtApi.md#getBuurt) | **GET** /api/v0/buurt/{id} | Gegevens over een buurt en de wijk, gemeente en land waarin deze buurt gesitueerd is.


## `getBuurt()`

```php
getBuurt($id): \Calcasa\Api\Model\Omgevingsdata
```

Gegevens over een buurt en de wijk, gemeente en land waarin deze buurt gesitueerd is.

Het omgevingdata object zal gefilterd terug komen afhankelijk van het client_id wat gebruikt is voor de authenticatie.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Calcasa\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Calcasa\Api\Api\BuurtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getBuurt($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuurtApi->getBuurt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Calcasa\Api\Model\Omgevingsdata**](../Model/Omgevingsdata.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
