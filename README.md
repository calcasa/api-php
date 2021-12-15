# calcasa/api

The Calcasa API is used to connect to Calcasa provided services. This is the first production version of the service

## Changelog

### 2021-12-13 (v1.0.0)
- Initial release of v0 based on v0.0.6

## Client packages
[Nuget](https://www.nuget.org/packages/Calcasa.Api) - [Packagist](https://packagist.org/packages/calcasa/api) - [PyPI](https://pypi.org/project/calcasa.api)
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
$bag_nummeraanduiding_id = 56; // int | Een BAG Nummeraanduiding ID om een adres te specificeren.

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
*AdressenApi* | [**getAdres**](docs/Api/AdressenApi.md#getadres) | **GET** /api/v1/adressen/{bagNummeraanduidingId} | Adres info op basis van BAG Nummeraanduiding Id.
*AdressenApi* | [**searchAdres**](docs/Api/AdressenApi.md#searchadres) | **POST** /api/v1/adressen/zoeken | Zoek adres info op basis van het gegeven adres.
*BestemmingsplannenApi* | [**getBestemmingById**](docs/Api/BestemmingsplannenApi.md#getbestemmingbyid) | **GET** /api/v1/bestemmingsplannen/{bagNummeraanduidingId} | Gegevens over de bestemmingsplannen op de locatie van een adres (BAG Nummeraanduiding ID).
*BodemApi* | [**getBodemById**](docs/Api/BodemApi.md#getbodembyid) | **GET** /api/v1/bodem/{id} | Gegevens over de bodemkwaliteit op de locatie van een adres (BAG Nummeraanduiding ID).
*BuurtApi* | [**getBuurt**](docs/Api/BuurtApi.md#getbuurt) | **GET** /api/v1/buurt/{buurtId} | Gegevens over een buurt en de wijk, gemeente en land waarin deze buurt gesitueerd is.
*ConfiguratieApi* | [**getCallbacks**](docs/Api/ConfiguratieApi.md#getcallbacks) | **GET** /api/v1/configuratie/callbacks | Haal de geconfigureerde callback URL&#39;s op voor de huidige client.
*ConfiguratieApi* | [**updateCallbacks**](docs/Api/ConfiguratieApi.md#updatecallbacks) | **POST** /api/v1/configuratie/callbacks | Configureer callback URL voor een specifieke API versie voor de huidige client.
*FacturenApi* | [**getFactuur**](docs/Api/FacturenApi.md#getfactuur) | **GET** /api/v1/facturen/{id} | Factuur op basis van een waardering Id.
*FotosApi* | [**getFoto**](docs/Api/FotosApi.md#getfoto) | **GET** /api/v1/fotos/{id} | Foto op basis van een foto Id.
*FunderingenApi* | [**getFunderingById**](docs/Api/FunderingenApi.md#getfunderingbyid) | **GET** /api/v1/funderingen/{bagNummeraanduidingId} | Gegevens over de fundering op de locatie van een adres (BAG Nummeraanduiding ID).
*RapportenApi* | [**getRapport**](docs/Api/RapportenApi.md#getrapport) | **GET** /api/v1/rapporten/{id} | Rapport op basis van waardering Id.
*WaarderingenApi* | [**createWaardering**](docs/Api/WaarderingenApi.md#createwaardering) | **POST** /api/v1/waarderingen | Creërt een waardering.
*WaarderingenApi* | [**getWaardering**](docs/Api/WaarderingenApi.md#getwaardering) | **GET** /api/v1/waarderingen/{id} | Waardering op basis van Id.
*WaarderingenApi* | [**getWaarderingOntwikkeling**](docs/Api/WaarderingenApi.md#getwaarderingontwikkeling) | **GET** /api/v1/waarderingen/{id}/ontwikkeling | Waardering ontwikkeling op basis van waardering Id.
*WaarderingenApi* | [**patchWaarderingen**](docs/Api/WaarderingenApi.md#patchwaarderingen) | **PATCH** /api/v1/waarderingen/{id} | Patcht een waardering.
*WaarderingenApi* | [**searchWaarderingen**](docs/Api/WaarderingenApi.md#searchwaarderingen) | **POST** /api/v1/waarderingen/zoeken | Zoek waardering op basis van input parameters.

## Models

- [Aanvraagdoel](docs/Model/Aanvraagdoel.md)
- [Adres](docs/Model/Adres.md)
- [AdresInfo](docs/Model/AdresInfo.md)
- [Bestemmingsdata](docs/Model/Bestemmingsdata.md)
- [BodemStatusType](docs/Model/BodemStatusType.md)
- [Bodemdata](docs/Model/Bodemdata.md)
- [BusinessRulesCode](docs/Model/BusinessRulesCode.md)
- [BusinessRulesProblemDetails](docs/Model/BusinessRulesProblemDetails.md)
- [Callback](docs/Model/Callback.md)
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
- [WaarderingZoekParameters](docs/Model/WaarderingZoekParameters.md)
- [WoningType](docs/Model/WoningType.md)

## Authorization

### oauth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **all**: Full permissions for all areas.
    - **api:all**: Full permissions for all areas of the public API.
    - **api:bestemmingsplannen:all**: Full permissions for the bestemmingsplannen area of the public API.
    - **api:bodem:all**: Full permissions for the bodem area of the public API.
    - **api:buurt:all**: Full permissions for the buurt area of the public API.
    - **api:configuratie:all**: Full permissions for the configuratie area of the public API.
    - **api:facturen:all**: Full permissions for the facturen area of the public API.
    - **api:fotos:all**: Full permissions for the fotos area of the public API.
    - **api:funderingen:all**: Full permissions for the funderingen area of the public API.
    - **api:rapporten:all**: Full permissions for the rapporten area of the public API.
    - **api:waarderingen:all**: Full permissions for the waarderingen area of the public API.
    - **api:adressen:read**: Read permissions for the adressen area of the public API.
    - **api:bestemmingsplannen:read**: Read permissions for the bestemmingsplannen area of the public API.
    - **api:bodem:read**: Read permissions for the bodem area of the public API.
    - **api:buurt:read**: Read permissions for the buurt area of the public API.
    - **api:configuratie:read**: Read permissions for the configuratie area of the public API.
    - **api:configuratie:write**: Write permissions for the configuratie area of the public API.
    - **api:facturen:read**: Read permissions for the facturen area of the public API.
    - **api:fotos:read**: Read permissions for the fotos area of the public API.
    - **api:funderingen:read**: Read permissions for the funderingen area of the public API.
    - **api:rapporten:read**: Read permissions for the rapporten area of the public API.
    - **api:waarderingen:create**: Create permissions for the waarderingen area of the public API.
    - **api:waarderingen:patch**: Patch permissions for the waarderingen area of the public API.
    - **api:waarderingen:read**: Read permissions for the waarderingen area of the public API.
    - **api:waarderingen:ontwikkeling**: Read permissions for the ontwikkelingen endpoint in the waarderingen area of the public API.

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

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
