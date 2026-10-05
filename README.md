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
*AdressenApi* | [**getAdres**](docs/Api/AdressenApi.md#getadres) | **GET** /adressen/{bagNummeraanduidingId} | Haal adresinformatie op.
*AdressenApi* | [**searchAdres**](docs/Api/AdressenApi.md#searchadres) | **POST** /adressen/zoeken | Zoek adresinformatie.
*BestemmingsplannenApi* | [**getBestemmingById**](docs/Api/BestemmingsplannenApi.md#getbestemmingbyid) | **GET** /bestemmingsplannen/{bagNummeraanduidingId} | Haal bestemmingsplannen op.
*BodemApi* | [**getBodemById**](docs/Api/BodemApi.md#getbodembyid) | **GET** /bodem/{bagNummeraanduidingId} | Haal bodemkwaliteitsgegevens op.
*BuurtApi* | [**getBuurt**](docs/Api/BuurtApi.md#getbuurt) | **GET** /buurt/{buurtCode} | Haal buurtgegevens op.
*CallbacksApi* | [**addOrUpdateCallbackSubscription**](docs/Api/CallbacksApi.md#addorupdatecallbacksubscription) | **POST** /callbacks/inschrijvingen | Maak of werk een callbackinschrijving bij.
*CallbacksApi* | [**deleteNotificationSubscription**](docs/Api/CallbacksApi.md#deletenotificationsubscription) | **DELETE** /callbacks/inschrijvingen/{bagNummeraanduidingId} | Verwijder een callbackinschrijving.
*CallbacksApi* | [**getNotificationSubscription**](docs/Api/CallbacksApi.md#getnotificationsubscription) | **GET** /callbacks/inschrijvingen/{bagNummeraanduidingId} | Haal een callbackinschrijving op.
*CallbacksApi* | [**getNotificationSubscriptions**](docs/Api/CallbacksApi.md#getnotificationsubscriptions) | **GET** /callbacks/inschrijvingen | Haal callbackinschrijvingen op.
*ConfiguratieApi* | [**getCallbackAuthentication**](docs/Api/ConfiguratieApi.md#getcallbackauthentication) | **GET** /configuratie/callbacks/authentication | Haal callbackauthenticatie op.
*ConfiguratieApi* | [**getCallbacks**](docs/Api/ConfiguratieApi.md#getcallbacks) | **GET** /configuratie/callbacks | Haal callback-URL&#39;s op.
*ConfiguratieApi* | [**getMtlsCertificate**](docs/Api/ConfiguratieApi.md#getmtlscertificate) | **GET** /configuratie/callbacks/mtls-certificate | Haal het mTLS-certificaat op.
*ConfiguratieApi* | [**getSignatureKeys**](docs/Api/ConfiguratieApi.md#getsignaturekeys) | **GET** /configuratie/callbacks/signature-keys | Haal JWKS-sleutels op.
*ConfiguratieApi* | [**postCallbackAuthentication**](docs/Api/ConfiguratieApi.md#postcallbackauthentication) | **POST** /configuratie/callbacks/authentication | Werk callbackauthenticatie bij.
*ConfiguratieApi* | [**updateCallbacks**](docs/Api/ConfiguratieApi.md#updatecallbacks) | **POST** /configuratie/callbacks | Configureer een callback-URL.
*FacturenApi* | [**getFactuur**](docs/Api/FacturenApi.md#getfactuur) | **GET** /facturen/{id} | Haal een factuur op.
*FileSetsApi* | [**confirmInboundFileSetById**](docs/Api/FileSetsApi.md#confirminboundfilesetbyid) | **POST** /file-sets/inbound/{inboundFileSetId} | Confirm an inbound file set.
*FileSetsApi* | [**createInboundFileSet**](docs/Api/FileSetsApi.md#createinboundfileset) | **POST** /file-sets/inbound | Create an inbound file set.
*FileSetsApi* | [**deleteOutboundFileSetById**](docs/Api/FileSetsApi.md#deleteoutboundfilesetbyid) | **DELETE** /file-sets/outbound/{outboundFileSetId} | Delete an outbound file set.
*FileSetsApi* | [**getFileSetLimits**](docs/Api/FileSetsApi.md#getfilesetlimits) | **GET** /file-sets/limits | Get file set limits.
*FileSetsApi* | [**getInboundFileSetById**](docs/Api/FileSetsApi.md#getinboundfilesetbyid) | **GET** /file-sets/inbound/{inboundFileSetId} | Get an inbound file set.
*FileSetsApi* | [**getInboundFileSets**](docs/Api/FileSetsApi.md#getinboundfilesets) | **GET** /file-sets/inbound | List inbound file sets.
*FileSetsApi* | [**getOutboundFileByIndex**](docs/Api/FileSetsApi.md#getoutboundfilebyindex) | **GET** /file-sets/outbound/{outboundFileSetId}/{fileIndex} | Download outbound file content.
*FileSetsApi* | [**getOutboundFileSetById**](docs/Api/FileSetsApi.md#getoutboundfilesetbyid) | **GET** /file-sets/outbound/{outboundFileSetId} | Get an outbound file set.
*FileSetsApi* | [**getOutboundFileSets**](docs/Api/FileSetsApi.md#getoutboundfilesets) | **GET** /file-sets/outbound | List outbound file sets.
*FileSetsApi* | [**putFileChunk**](docs/Api/FileSetsApi.md#putfilechunk) | **PUT** /file-sets/inbound/{inboundFileSetId}/{fileIndex}/{chunkIndex} | Upload an inbound file chunk.
*FotosApi* | [**getFoto**](docs/Api/FotosApi.md#getfoto) | **GET** /fotos/{id} | Haal een foto op.
*FunderingenApi* | [**getFunderingById**](docs/Api/FunderingenApi.md#getfunderingbyid) | **GET** /funderingen/{bagNummeraanduidingId} | Haal funderingsgegevens op.
*GeldverstrekkersApi* | [**getGeldverstrekkers**](docs/Api/GeldverstrekkersApi.md#getgeldverstrekkers) | **GET** /geldverstrekkers/{productType} | Haal geldverstrekkers op.
*PlanningApi* | [**assignOpnemer**](docs/Api/PlanningApi.md#assignopnemer) | **POST** /planning/opnames/{opnameId} | Assign an opnemer.
*PlanningApi* | [**deletePlanningForOpname**](docs/Api/PlanningApi.md#deleteplanningforopname) | **DELETE** /planning/opnames/{opnameId} | Delete an opname planning.
*PlanningApi* | [**getOpnames**](docs/Api/PlanningApi.md#getopnames) | **GET** /planning/opnames | List opnames.
*PlanningApi* | [**getOpnemers**](docs/Api/PlanningApi.md#getopnemers) | **GET** /planning/opnemers | List opnemers.
*RapportenApi* | [**getRapport**](docs/Api/RapportenApi.md#getrapport) | **GET** /rapporten/{id} | Haal een rapport op.
*WaarderingenApi* | [**checkProducten**](docs/Api/WaarderingenApi.md#checkproducten) | **POST** /waarderingen/check | Controleer mogelijke producten.
*WaarderingenApi* | [**createWaardering**](docs/Api/WaarderingenApi.md#createwaardering) | **POST** /waarderingen | Maak een waardering.
*WaarderingenApi* | [**getWaardering**](docs/Api/WaarderingenApi.md#getwaardering) | **GET** /waarderingen/{id} | Haal een waardering op.
*WaarderingenApi* | [**getWaarderingByReportHash**](docs/Api/WaarderingenApi.md#getwaarderingbyreporthash) | **GET** /waarderingen/by-hash/{hash} | Zoek op rapport-hash.
*WaarderingenApi* | [**getWaarderingOntwikkeling**](docs/Api/WaarderingenApi.md#getwaarderingontwikkeling) | **GET** /waarderingen/{id}/ontwikkeling | Haal waarderingsontwikkeling op.
*WaarderingenApi* | [**patchWaarderingen**](docs/Api/WaarderingenApi.md#patchwaarderingen) | **PATCH** /waarderingen/{id} | Werk een waardering bij.
*WaarderingenApi* | [**searchWaarderingen**](docs/Api/WaarderingenApi.md#searchwaarderingen) | **POST** /waarderingen/zoeken | Zoek waarderingen.

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
- [CallbackAuthentication](docs/Model/CallbackAuthentication.md)
- [CallbackInschrijving](docs/Model/CallbackInschrijving.md)
- [CbsIndeling](docs/Model/CbsIndeling.md)
- [CompressionType](docs/Model/CompressionType.md)
- [ContentTooLargeProblemDetails](docs/Model/ContentTooLargeProblemDetails.md)
- [CreateInboundFileSetRequest](docs/Model/CreateInboundFileSetRequest.md)
- [DeelWaarderingWebhookPayload](docs/Model/DeelWaarderingWebhookPayload.md)
- [Energielabel](docs/Model/Energielabel.md)
- [EnergielabelData](docs/Model/EnergielabelData.md)
- [ExpiredValuationProblemDetails](docs/Model/ExpiredValuationProblemDetails.md)
- [Factuur](docs/Model/Factuur.md)
- [FileContentError](docs/Model/FileContentError.md)
- [FileInfo](docs/Model/FileInfo.md)
- [FileNotice](docs/Model/FileNotice.md)
- [FileSet](docs/Model/FileSet.md)
- [FileSetLimits](docs/Model/FileSetLimits.md)
- [Foto](docs/Model/Foto.md)
- [FrontendDeeplinks](docs/Model/FrontendDeeplinks.md)
- [FunderingDataBron](docs/Model/FunderingDataBron.md)
- [FunderingHerstelType](docs/Model/FunderingHerstelType.md)
- [FunderingRisico](docs/Model/FunderingRisico.md)
- [FunderingRisicoLabel](docs/Model/FunderingRisicoLabel.md)
- [FunderingSoortBron](docs/Model/FunderingSoortBron.md)
- [FunderingTechnischHerstelType](docs/Model/FunderingTechnischHerstelType.md)
- [FunderingType](docs/Model/FunderingType.md)
- [FunderingTypering](docs/Model/FunderingTypering.md)
- [Funderingdata](docs/Model/Funderingdata.md)
- [Funderingsrisico](docs/Model/Funderingsrisico.md)
- [Gebiedsdata](docs/Model/Gebiedsdata.md)
- [Geldverstrekker](docs/Model/Geldverstrekker.md)
- [InboundFileInfo](docs/Model/InboundFileInfo.md)
- [InboundFileSet](docs/Model/InboundFileSet.md)
- [InboundFileSetAlreadyExistsProblemDetails](docs/Model/InboundFileSetAlreadyExistsProblemDetails.md)
- [InboundFileSetInvalidStateProblemDetails](docs/Model/InboundFileSetInvalidStateProblemDetails.md)
- [InboundFileSetState](docs/Model/InboundFileSetState.md)
- [InboundFileSetWebhookPayload](docs/Model/InboundFileSetWebhookPayload.md)
- [InvalidArgumentProblemDetails](docs/Model/InvalidArgumentProblemDetails.md)
- [JsonPatchDocument](docs/Model/JsonPatchDocument.md)
- [KlantwaardeType](docs/Model/KlantwaardeType.md)
- [Kwartaal](docs/Model/Kwartaal.md)
- [LengthRequiredProblemDetails](docs/Model/LengthRequiredProblemDetails.md)
- [MTLSType](docs/Model/MTLSType.md)
- [Modeldata](docs/Model/Modeldata.md)
- [NotFoundProblemDetails](docs/Model/NotFoundProblemDetails.md)
- [Notitie](docs/Model/Notitie.md)
- [Notities](docs/Model/Notities.md)
- [Objectdata](docs/Model/Objectdata.md)
- [Omgevingsdata](docs/Model/Omgevingsdata.md)
- [OnderhoudStaat](docs/Model/OnderhoudStaat.md)
- [Operation](docs/Model/Operation.md)
- [OperationType](docs/Model/OperationType.md)
- [Opname](docs/Model/Opname.md)
- [Opnamedata](docs/Model/Opnamedata.md)
- [Opnemer](docs/Model/Opnemer.md)
- [OutboundFileSet](docs/Model/OutboundFileSet.md)
- [OutboundFileSetInvalidStateProblemDetails](docs/Model/OutboundFileSetInvalidStateProblemDetails.md)
- [OutboundFileSetState](docs/Model/OutboundFileSetState.md)
- [OutboundFileSetWebhookPayload](docs/Model/OutboundFileSetWebhookPayload.md)
- [PermissionsDeniedProblemDetails](docs/Model/PermissionsDeniedProblemDetails.md)
- [PlanningInfo](docs/Model/PlanningInfo.md)
- [Point](docs/Model/Point.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [ProductCheck](docs/Model/ProductCheck.md)
- [ProductCheckItem](docs/Model/ProductCheckItem.md)
- [ProductCheckParameters](docs/Model/ProductCheckParameters.md)
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
    - **api:file-set:inbound:read**: 
    - **api:file-set:inbound:write**: 
    - **api:file-set:outbound:read**: 
    - **api:file-set:outbound:write**: 
    - **api:fotos:read**: 
    - **api:funderingen:read**: 
    - **api:geldverstrekkers:read**: 
    - **api:rapporten:read**: 
    - **api:waarderingen:read**: 
    - **api:waarderingen:patch**: 
    - **api:waarderingen:ontwikkeling**: 
    - **api:waarderingen:create**: 
    - **api:planning:read**: 
    - **api:planning:write**: 

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

- API version: `1.7.0-beta03`
    - Package version: `1.7.0-beta03`
    - Generator version: `7.23.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
