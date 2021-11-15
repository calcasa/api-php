# calcasa/api

This is a preliminary version of the Calcasa Public API. This service is currently in development.

## Changelog

### 2021-11-11
- Renamed /fundering endpoint to /funderingen to be more in line with other endpoints
- Renamed `HerstelType` to `FunderingHerstelType`.
- Added `FunderingType` values.

### 2021-11-10
- Adjusted OpenAPI Spec generation to fix some issues with certain generators. This also means that the nullable nature of certain fields is now correctly represented. Please refer to the Generation article for more information, the config files were updated aswell.
### 2021-11-09
- Added `Status` and `Taxatiedatum` to `Taxatiedata` model.

### 2021-11-08

- Renamed `id` field in `AdresInfo` model to `bagNummeraanduidingId`.
- Added `GET /v0/fundering/{id}` endpoint with corresponding models.
- Changed HTTP response code for the `BusinessRulesProblemDetails` error return type of `POST /v0/waardering` from `422 Unprocessable Entity` to `406 Not Acceptable` to fix a duplicate.

### 2021-10-13

- Added `taxatie` field to `Waardering` model.
- Added `Taxatiedata` model containing the `taxatieorganisatie` field for desktop valuations.

### 2021-09-29

- Added `aangemaakt` timestamp field to `Waardering` model.
- Added `WaarderingZoekParameters` model to replace `WaarderingInputParameters` in the `POST /v0/waarderingen/zoeken` endpoint.
- Split `Omgevingsdata` model into a set of separate `Gebiedsdata` models that also contain extra statistics.
- Added `bijzonderheden` field to `VorigeVerkoop` model.
- Renamed `ReferentieBijzonderheden` model to `VerkoopBijzonderheden`.

### 2021-09-22

- Initial release of v0

## Client packages
![Nuget](https://img.shields.io/nuget/v/Calcasa.Api?label=Nuget) - ![Packagist Downloads](https://img.shields.io/packagist/v/calcasa/api?label=Packagist) - ![PyPI - Downloads](https://img.shields.io/pypi/v/calcasa-api?label=PyPi)
## Client implementation notes
Clients should at all times be tolerant to the following:

- Extra fields in responses
- Empty or hidden fields in responses
- Extra values in enumerations
- Unexpected error responses in the form of [Problem Details](https://rfc-editor.org/rfc/rfc7807)

## OpenAPI Specification
This API is documented in **OpenAPI format version 3** you can use tools like the [OpenAPI Generator](https://github.com/OpenAPITools/openapi-generator) to generate API clients.

## Cross-Origin Resource Sharing
This API features Cross-Origin Resource Sharing (CORS) implemented in compliance with [W3C spec](https://www.w3.org/TR/cors/).
And that allows cross-domain communication from the browser.
All responses have a wildcard same-origin which makes them completely public and accessible to everyone, including any code on any site.

## Authentication

Authentication is done via [OAuth2](https://oauth.net/2/) and the [client credentials](https://oauth.net/2/grant-types/client-credentials/) grant type.


For more information, please visit [https://www.calcasa.nl/contact](https://www.calcasa.nl/contact).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/calcasa/api/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.calcasa.nl*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdressenApi* | [**getAdres**](docs/Api/AdressenApi.md#getadres) | **GET** /api/v0/adressen/{bagNummeraanduidingId} | Adres info op met het BAG Nummeraanduiding Id.
*AdressenApi* | [**searchAdres**](docs/Api/AdressenApi.md#searchadres) | **POST** /api/v0/adressen/zoeken | Zoek adres info op basis van het gegeven adres.
*BestemmingsplannenApi* | [**getBestemmingById**](docs/Api/BestemmingsplannenApi.md#getbestemmingbyid) | **GET** /api/v0/bestemmingsplannen/{id} | Gegevens over de bestemmingsplannen op de locatie van een adres (BAG Nummeraanduiding ID).
*BodemApi* | [**getBodemById**](docs/Api/BodemApi.md#getbodembyid) | **GET** /api/v0/bodem/{id} | Gegevens over de bodemkwaliteit op de locatie van een adres (BAG Nummeraanduiding ID).
*BuurtApi* | [**getBuurt**](docs/Api/BuurtApi.md#getbuurt) | **GET** /api/v0/buurt/{id} | Gegevens over een buurt en de wijk, gemeente en land waarin deze buurt gesitueerd is.
*FacturenApi* | [**getFactuur**](docs/Api/FacturenApi.md#getfactuur) | **GET** /api/v0/facturen/{id} | Factuur op basis van een Id.
*FotosApi* | [**getFoto**](docs/Api/FotosApi.md#getfoto) | **GET** /api/v0/fotos/{id} | Foto op basis van Id.
*FunderingenApi* | [**getFunderingById**](docs/Api/FunderingenApi.md#getfunderingbyid) | **GET** /api/v0/funderingen/{id} | Gegevens over de fundering op de locatie van een adres (BAG Nummeraanduiding ID).
*RapportenApi* | [**getRapport**](docs/Api/RapportenApi.md#getrapport) | **GET** /api/v0/rapporten/{id} | Rapport op basis van Id.
*WaarderingenApi* | [**createWaardering**](docs/Api/WaarderingenApi.md#createwaardering) | **POST** /api/v0/waarderingen | Creërt een waardering.
*WaarderingenApi* | [**getWaardering**](docs/Api/WaarderingenApi.md#getwaardering) | **GET** /api/v0/waarderingen/{id} | Waardering op basis van Id.
*WaarderingenApi* | [**getWaarderingOntwikkeling**](docs/Api/WaarderingenApi.md#getwaarderingontwikkeling) | **GET** /api/v0/waarderingen/{id}/ontwikkeling | Waardering ontwikkeling op basis van Id.
*WaarderingenApi* | [**patchWaarderingen**](docs/Api/WaarderingenApi.md#patchwaarderingen) | **PATCH** /api/v0/waarderingen/{id} | Patcht een waardering.
*WaarderingenApi* | [**searchWaarderingen**](docs/Api/WaarderingenApi.md#searchwaarderingen) | **POST** /api/v0/waarderingen/zoeken | Zoek waardering op basis van input parameters.

## Models

- [Aanvraagdoel](docs/Model/Aanvraagdoel.md)
- [Adres](docs/Model/Adres.md)
- [AdresInfo](docs/Model/AdresInfo.md)
- [Bestemmingsdata](docs/Model/Bestemmingsdata.md)
- [BodemStatusType](docs/Model/BodemStatusType.md)
- [Bodemdata](docs/Model/Bodemdata.md)
- [BusinessRulesCode](docs/Model/BusinessRulesCode.md)
- [BusinessRulesProblemDetails](docs/Model/BusinessRulesProblemDetails.md)
- [CbsIndeling](docs/Model/CbsIndeling.md)
- [Energielabel](docs/Model/Energielabel.md)
- [Factuur](docs/Model/Factuur.md)
- [Foto](docs/Model/Foto.md)
- [FunderingDataBron](docs/Model/FunderingDataBron.md)
- [FunderingHerstelType](docs/Model/FunderingHerstelType.md)
- [FunderingRisico](docs/Model/FunderingRisico.md)
- [FunderingRisicoLabel](docs/Model/FunderingRisicoLabel.md)
- [FunderingSoortBron](docs/Model/FunderingSoortBron.md)
- [FunderingType](docs/Model/FunderingType.md)
- [FunderingTypering](docs/Model/FunderingTypering.md)
- [Funderingdata](docs/Model/Funderingdata.md)
- [Gebiedsdata](docs/Model/Gebiedsdata.md)
- [InvalidArgumentProblemDetails](docs/Model/InvalidArgumentProblemDetails.md)
- [JsonPatchDocument](docs/Model/JsonPatchDocument.md)
- [KlantwaardeType](docs/Model/KlantwaardeType.md)
- [Kwartaal](docs/Model/Kwartaal.md)
- [Modeldata](docs/Model/Modeldata.md)
- [NotFoundProblemDetails](docs/Model/NotFoundProblemDetails.md)
- [Notitie](docs/Model/Notitie.md)
- [Notities](docs/Model/Notities.md)
- [Objectdata](docs/Model/Objectdata.md)
- [Omgevingsdata](docs/Model/Omgevingsdata.md)
- [Operation](docs/Model/Operation.md)
- [OperationType](docs/Model/OperationType.md)
- [PermissionsDeniedProblemDetails](docs/Model/PermissionsDeniedProblemDetails.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [ProductType](docs/Model/ProductType.md)
- [Rapport](docs/Model/Rapport.md)
- [Referentieobject](docs/Model/Referentieobject.md)
- [Taxatiedata](docs/Model/Taxatiedata.md)
- [Taxatiestatus](docs/Model/Taxatiestatus.md)
- [ValidationProblemDetails](docs/Model/ValidationProblemDetails.md)
- [VerkoopBijzonderheden](docs/Model/VerkoopBijzonderheden.md)
- [VorigeVerkoop](docs/Model/VorigeVerkoop.md)
- [Waardering](docs/Model/Waardering.md)
- [WaarderingInputParameters](docs/Model/WaarderingInputParameters.md)
- [WaarderingOntwikkeling](docs/Model/WaarderingOntwikkeling.md)
- [WaarderingOntwikkelingKwartaal](docs/Model/WaarderingOntwikkelingKwartaal.md)
- [WaarderingStatus](docs/Model/WaarderingStatus.md)
- [WaarderingWebhookPayload](docs/Model/WaarderingWebhookPayload.md)
- [WaarderingZoekParameters](docs/Model/WaarderingZoekParameters.md)
- [WoningType](docs/Model/WoningType.md)

## Authorization

### oauth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **api:all**: Full permissions for all areas of the public API
    - **api:waarderingen:all**: Full permissions for the valuations area of the public API
    - **api:rapporten:all**: Full permissions for the reports area of the public API
    - **api:facturen:all**: Full permissions for the invoices area of the public API
    - **api:adressen:all**: Full permissions for the addresses area of the public API
    - **api:fotos:all**: Full permissions for the photos area of the public API

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@calcasa.nl

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
