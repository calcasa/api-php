# Calcasa\Api\WaarderingenApi

All URIs are relative to https://api.calcasa.nl.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWaardering()**](WaarderingenApi.md#createWaardering) | **POST** /api/v0/waarderingen | Creërt een waardering.
[**getWaardering()**](WaarderingenApi.md#getWaardering) | **GET** /api/v0/waarderingen/{id} | Waardering op basis van Id.
[**getWaarderingOntwikkeling()**](WaarderingenApi.md#getWaarderingOntwikkeling) | **GET** /api/v0/waarderingen/{id}/ontwikkeling | Waardering ontwikkeling op basis van Id.
[**patchWaarderingen()**](WaarderingenApi.md#patchWaarderingen) | **PATCH** /api/v0/waarderingen/{id} | Patcht een waardering.
[**searchWaarderingen()**](WaarderingenApi.md#searchWaarderingen) | **POST** /api/v0/waarderingen/zoeken | Zoek waardering op basis van input parameters.


## `createWaardering()`

```php
createWaardering($waardering_input_parameters): \Calcasa\Api\Model\Waardering
```

Creërt een waardering.

Nadat de waardering aangemaakt is zal deze bevestigd moeten worden. De velden die nodig zijn voor creatie het flow veld de parameters.  ### Callbacks | Name | Url | Schema | | --- | --- | --- | | waardering | {configuredWebhookUrl}/waardering | [WaarderingWebhookPayload](/api/v0/reference/schemas/WaarderingWebhookPayload) |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Calcasa\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Calcasa\Api\Api\WaarderingenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waardering_input_parameters = new \Calcasa\Api\Model\WaarderingInputParameters(); // \Calcasa\Api\Model\WaarderingInputParameters

try {
    $result = $apiInstance->createWaardering($waardering_input_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaarderingenApi->createWaardering: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waardering_input_parameters** | [**\Calcasa\Api\Model\WaarderingInputParameters**](../Model/WaarderingInputParameters.md)|  | [optional]

### Return type

[**\Calcasa\Api\Model\Waardering**](../Model/Waardering.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWaardering()`

```php
getWaardering($id): \Calcasa\Api\Model\Waardering
```

Waardering op basis van Id.

Het waardering object zal gefilterd terug komen afhankelijk van het client_id wat gebruikt is voor de authenticatie.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Calcasa\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Calcasa\Api\Api\WaarderingenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWaardering($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaarderingenApi->getWaardering: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Calcasa\Api\Model\Waardering**](../Model/Waardering.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWaarderingOntwikkeling()`

```php
getWaarderingOntwikkeling($id): \Calcasa\Api\Model\WaarderingOntwikkeling
```

Waardering ontwikkeling op basis van Id.

Het waardering object zal gefilterd terug komen afhankelijk van het client_id wat gebruikt is voor de authenticatie.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Calcasa\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Calcasa\Api\Api\WaarderingenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getWaarderingOntwikkeling($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaarderingenApi->getWaarderingOntwikkeling: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Calcasa\Api\Model\WaarderingOntwikkeling**](../Model/WaarderingOntwikkeling.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/problem+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchWaarderingen()`

```php
patchWaarderingen($id, $json_patch_document): \Calcasa\Api\Model\Waardering
```

Patcht een waardering.

Op dit moment kan alleen de waarderingsstatus gepatcht worden.  Dit endpoint kan gebruikt worden om een waarderingsinitialisatie te bevestingen.  ### Callbacks | Name | Url | Schema | | --- | --- | --- | | waardering | {configuredWebhookUrl}/waardering | [WaarderingWebhookPayload](/api/v0/reference/schemas/WaarderingWebhookPayload) |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Calcasa\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Calcasa\Api\Api\WaarderingenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Het waarderings Id in de vorm van een UUID.
$json_patch_document = new \Calcasa\Api\Model\JsonPatchDocument(); // \Calcasa\Api\Model\JsonPatchDocument | Het JsonPatch document voor de operatie.

try {
    $result = $apiInstance->patchWaarderingen($id, $json_patch_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaarderingenApi->patchWaarderingen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Het waarderings Id in de vorm van een UUID. |
 **json_patch_document** | [**\Calcasa\Api\Model\JsonPatchDocument**](../Model/JsonPatchDocument.md)| Het JsonPatch document voor de operatie. | [optional]

### Return type

[**\Calcasa\Api\Model\Waardering**](../Model/Waardering.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`
- **Accept**: `application/problem+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchWaarderingen()`

```php
searchWaarderingen($waardering_zoek_parameters): \Calcasa\Api\Model\Waardering[]
```

Zoek waardering op basis van input parameters.

Alle items kunnen gebruikt worden voor het zoeken,  ProductType en BagNummeraanduidingId zijn verplicht.  Het waardering object zal gefilterd terug komen afhankelijk van het client_id wat gebruikt is voor de authenticatie.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Calcasa\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Calcasa\Api\Api\WaarderingenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$waardering_zoek_parameters = new \Calcasa\Api\Model\WaarderingZoekParameters(); // \Calcasa\Api\Model\WaarderingZoekParameters

try {
    $result = $apiInstance->searchWaarderingen($waardering_zoek_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WaarderingenApi->searchWaarderingen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **waardering_zoek_parameters** | [**\Calcasa\Api\Model\WaarderingZoekParameters**](../Model/WaarderingZoekParameters.md)|  | [optional]

### Return type

[**\Calcasa\Api\Model\Waardering[]**](../Model/Waardering.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/problem+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
