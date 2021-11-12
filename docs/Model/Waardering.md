# # Waardering

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id van de waardering of tracking Id. | [optional]
**aangemaakt** | **\DateTime** | Het tijdsstempel van wanneer de waardering aangemaakt is. | [optional]
**status** | [**WaarderingStatus**](WaarderingStatus.md) | | Waarde | Omschrijving | | --- | --- | | &#x60;onbekend&#x60; | Status onbekend. | | &#x60;initialiseren&#x60; | Deze waardering is geinitialiseerd maar moet nog bevestigd worden. | | &#x60;open&#x60; | Deze waardering is bevestigd maar moet nog uitgevoerd worden. | | &#x60;voltooid&#x60; | Deze waardering is voltooid. | | &#x60;opgewaardeerd&#x60; | Deze waardering is geupgrade naar een ander waardering type. | | &#x60;ongeldig&#x60; | Deze waardering is niet geldig, bijvoorbeeld omdat hij niet door de business rules is gekomen. | | &#x60;verlopen&#x60; | Deze waardering is verlopen omdat hij niet op tijd bevestigd is. | | &#x60;error&#x60; | Er is iets mis gegaan voor deze waardering. | | [optional]
**originele_input** | [**WaarderingInputParameters**](WaarderingInputParameters.md) |  | [optional]
**adres** | [**Adres**](Adres.md) |  | [optional]
**model** | [**Modeldata**](Modeldata.md) |  | [optional]
**taxatie** | [**Taxatiedata**](Taxatiedata.md) |  | [optional]
**object** | [**Objectdata**](Objectdata.md) |  | [optional]
**cbs_indeling** | [**CbsIndeling**](CbsIndeling.md) |  | [optional]
**fotos** | [**\Calcasa\Api\Model\Foto[]**](Foto.md) |  | [optional]
**referenties** | [**\Calcasa\Api\Model\Referentieobject[]**](Referentieobject.md) |  | [optional]
**vorige_verkopen** | [**\Calcasa\Api\Model\VorigeVerkoop[]**](VorigeVerkoop.md) |  | [optional]
**rapport** | [**Rapport**](Rapport.md) |  | [optional]
**factuur** | [**Factuur**](Factuur.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
