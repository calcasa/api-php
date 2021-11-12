# # WaarderingWebhookPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback_name** | **string** |  | [optional] [readonly]
**event_id** | **string** | Event Id | [optional]
**waardering_id** | **string** | Waardering Id | [optional]
**old_status** | [**WaarderingStatus**](WaarderingStatus.md) | The old status. | Waarde | Omschrijving | | --- | --- | | &#x60;onbekend&#x60; | Status onbekend. | | &#x60;initialiseren&#x60; | Deze waardering is geinitialiseerd maar moet nog bevestigd worden. | | &#x60;open&#x60; | Deze waardering is bevestigd maar moet nog uitgevoerd worden. | | &#x60;voltooid&#x60; | Deze waardering is voltooid. | | &#x60;opgewaardeerd&#x60; | Deze waardering is geupgrade naar een ander waardering type. | | &#x60;ongeldig&#x60; | Deze waardering is niet geldig, bijvoorbeeld omdat hij niet door de business rules is gekomen. | | &#x60;verlopen&#x60; | Deze waardering is verlopen omdat hij niet op tijd bevestigd is. | | &#x60;error&#x60; | Er is iets mis gegaan voor deze waardering. | | [optional]
**new_status** | [**WaarderingStatus**](WaarderingStatus.md) | The new status. | Waarde | Omschrijving | | --- | --- | | &#x60;onbekend&#x60; | Status onbekend. | | &#x60;initialiseren&#x60; | Deze waardering is geinitialiseerd maar moet nog bevestigd worden. | | &#x60;open&#x60; | Deze waardering is bevestigd maar moet nog uitgevoerd worden. | | &#x60;voltooid&#x60; | Deze waardering is voltooid. | | &#x60;opgewaardeerd&#x60; | Deze waardering is geupgrade naar een ander waardering type. | | &#x60;ongeldig&#x60; | Deze waardering is niet geldig, bijvoorbeeld omdat hij niet door de business rules is gekomen. | | &#x60;verlopen&#x60; | Deze waardering is verlopen omdat hij niet op tijd bevestigd is. | | &#x60;error&#x60; | Er is iets mis gegaan voor deze waardering. | | [optional]
**timestamp** | **\DateTime** | The event timestamp. | [optional]
**is_test** | **bool** | Indicates whether this is a test valuation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
