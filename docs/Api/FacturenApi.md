# Calcasa\Api\FacturenApi

All URIs are relative to https://api.calcasa.nl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFactuur()**](FacturenApi.md#getFactuur) | **GET** /api/v0/facturen/{id} | Factuur op basis van een Id.


## `getFactuur()`

```php
getFactuur($id): \SplFileObject
```

Factuur op basis van een Id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Calcasa\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Calcasa\Api\Api\FacturenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getFactuur($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FacturenApi->getFactuur: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

**\SplFileObject**

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
