# calcasa/api

The Calcasa API is used to connect to Calcasa provided services.
For more information, please visit [Documentation](https://docs.calcasa.nl) or [GitHub](https://github.com/calcasa/api).

For more information, please visit [https://www.calcasa.nl/contact](https://www.calcasa.nl/contact).

## Installation & Usage

### Requirements

PHP 8.1 and later.

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
$bagNummeraanduidingId = 56; // int | Een BAG Nummeraanduiding ID om een adres te specificeren.

try {
    $result = $apiInstance->getAdres($bagNummeraanduidingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdressenApi->getAdres: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.calcasa.nl/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdressenApi* | [**getAdres**](docs/Api/AdressenApi.md#getadres) | **GET** /adressen/{bagNummeraanduidingId} | Adres info op basis van BAG Nummeraanduiding Id.
*AdressenApi* | [**searchAdres**](docs/Api/AdressenApi.md#searchadres) | **POST** /adressen/zoeken | Zoek adres info op basis van het gegeven adres.
*BestemmingsplannenApi* | [**getBestemmingById**](docs/Api/BestemmingsplannenApi.md#getbestemmingbyid) | **GET** /bestemmingsplannen/{bagNummeraanduidingId} | Gegevens over de bestemmingsplannen op de locatie van een adres (BAG Nummeraanduiding ID).
*BodemApi* | [**getBodemById**](docs/Api/BodemApi.md#getbodembyid) | **GET** /bodem/{bagNummeraanduidingId} | Gegevens over de bodemkwaliteit op de locatie van een adres (BAG Nummeraanduiding ID).
*BuurtApi* | [**getBuurt**](docs/Api/BuurtApi.md#getbuurt) | **GET** /buurt/{buurtCode} | Gegevens over een buurt en de wijk, gemeente en land waarin deze buurt gesitueerd is.
*CallbacksApi* | [**addOrUpdateCallbackSubscription**](docs/Api/CallbacksApi.md#addorupdatecallbacksubscription) | **POST** /callbacks/inschrijvingen | Voeg een callback inschrijving toe (of werk bij) voor de huidige client voor een adres.
*CallbacksApi* | [**deleteNotificationSubscription**](docs/Api/CallbacksApi.md#deletenotificationsubscription) | **DELETE** /callbacks/inschrijvingen/{bagNummeraanduidingId} | Verwijder de callback inschrijving voor deze client, dit adres en optioneel een geldverstrekker.
*CallbacksApi* | [**getNotificationSubscription**](docs/Api/CallbacksApi.md#getnotificationsubscription) | **GET** /callbacks/inschrijvingen/{bagNummeraanduidingId} | Haal de callback inschrijving op voor deze client, dit adres en eventueel opgegeven geldverstrekker.
*CallbacksApi* | [**getNotificationSubscriptions**](docs/Api/CallbacksApi.md#getnotificationsubscriptions) | **GET** /callbacks/inschrijvingen | Haal de callback inschrijvingen binnen voor deze client.
*ConfiguratieApi* | [**getCallbacks**](docs/Api/ConfiguratieApi.md#getcallbacks) | **GET** /configuratie/callbacks | Haal de geconfigureerde callback URL&#39;s op voor de huidige client.
*ConfiguratieApi* | [**updateCallbacks**](docs/Api/ConfiguratieApi.md#updatecallbacks) | **POST** /configuratie/callbacks | Configureer callback URL voor een specifieke API versie voor de huidige client.
*FacturenApi* | [**getFactuur**](docs/Api/FacturenApi.md#getfactuur) | **GET** /facturen/{id} | Factuur op basis van een waardering Id.
*FotosApi* | [**getFoto**](docs/Api/FotosApi.md#getfoto) | **GET** /fotos/{id} | Foto op basis van een foto Id.
*FunderingenApi* | [**getFunderingById**](docs/Api/FunderingenApi.md#getfunderingbyid) | **GET** /funderingen/{bagNummeraanduidingId} | Gegevens over de fundering op de locatie van een adres (BAG Nummeraanduiding ID).
*GeldverstrekkersApi* | [**getGeldverstrekkers**](docs/Api/GeldverstrekkersApi.md#getgeldverstrekkers) | **GET** /geldverstrekkers/{productType} | Alle geldverstrekkers die te gebruiken zijn voor aanvragen.
*RapportenApi* | [**getRapport**](docs/Api/RapportenApi.md#getrapport) | **GET** /rapporten/{id} | Rapport op basis van waardering Id.
*WaarderingenApi* | [**createWaardering**](docs/Api/WaarderingenApi.md#createwaardering) | **POST** /waarderingen | Creërt een waardering.
*WaarderingenApi* | [**getWaardering**](docs/Api/WaarderingenApi.md#getwaardering) | **GET** /waarderingen/{id} | Waardering op basis van Id.
*WaarderingenApi* | [**getWaarderingOntwikkeling**](docs/Api/WaarderingenApi.md#getwaarderingontwikkeling) | **GET** /waarderingen/{id}/ontwikkeling | Waardering ontwikkeling op basis van waardering Id.
*WaarderingenApi* | [**patchWaarderingen**](docs/Api/WaarderingenApi.md#patchwaarderingen) | **PATCH** /waarderingen/{id} | Patcht een waardering.
*WaarderingenApi* | [**searchWaarderingen**](docs/Api/WaarderingenApi.md#searchwaarderingen) | **POST** /waarderingen/zoeken | Zoek waardering op basis van input parameters.

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
- [CallbackInschrijving](docs/Model/CallbackInschrijving.md)
- [CbsIndeling](docs/Model/CbsIndeling.md)
- [DeelWaarderingWebhookPayload](docs/Model/DeelWaarderingWebhookPayload.md)
- [Energielabel](docs/Model/Energielabel.md)
- [EnergielabelData](docs/Model/EnergielabelData.md)
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
- [Geldverstrekker](docs/Model/Geldverstrekker.md)
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
- [ResourceExhaustedProblemDetails](docs/Model/ResourceExhaustedProblemDetails.md)
- [Taxatiedata](docs/Model/Taxatiedata.md)
- [Taxatiestatus](docs/Model/Taxatiestatus.md)
- [UnauthorizedProblemDetails](docs/Model/UnauthorizedProblemDetails.md)
- [ValidationProblemDetails](docs/Model/ValidationProblemDetails.md)
- [VerkoopBijzonderheden](docs/Model/VerkoopBijzonderheden.md)
- [VersionNames](docs/Model/VersionNames.md)
- [VorigeVerkoop](docs/Model/VorigeVerkoop.md)
- [Waardering](docs/Model/Waardering.md)
- [WaarderingInputParameters](docs/Model/WaarderingInputParameters.md)
- [WaarderingOntwikkeling](docs/Model/WaarderingOntwikkeling.md)
- [WaarderingOntwikkelingKwartaal](docs/Model/WaarderingOntwikkelingKwartaal.md)
- [WaarderingStatus](docs/Model/WaarderingStatus.md)
- [WaarderingWebhookPayload](docs/Model/WaarderingWebhookPayload.md)
- [WaarderingZoekParameters](docs/Model/WaarderingZoekParameters.md)
- [WebhookPayload](docs/Model/WebhookPayload.md)
- [WoningType](docs/Model/WoningType.md)

## Authorization

Authentication schemes defined for the API:
### oauth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **api:adressen:read**: 
    - **api:bestemmingsplannen:read**: 
    - **api:bodem:read**: 
    - **api:buurt:read**: 
    - **api:callback:read**: 
    - **api:callback:write**: 
    - **api:configuratie:read**: 
    - **api:configuratie:write**: 
    - **api:facturen:read**: 
    - **api:fotos:read**: 
    - **api:funderingen:read**: 
    - **api:geldverstrekkers:read**: 
    - **api:rapporten:read**: 
    - **api:waarderingen:read**: 
    - **api:waarderingen:patch**: 
    - **api:waarderingen:ontwikkeling**: 
    - **api:waarderingen:create**: 

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

- API version: `1.4.0-rc1`
    - Generator version: `7.13.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
