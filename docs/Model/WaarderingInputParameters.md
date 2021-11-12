# # WaarderingInputParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**geldverstrekker** | **string** |  | [optional]
**product_type** | [**ProductType**](ProductType.md) | | Waarde | Omschrijving | | --- | --- | | &#x60;onbekend&#x60; | Onbekend product type. Geen geldige invoer. | | &#x60;modelwaardeCalcasa&#x60; | Modelwaarde aanvraag met Calcasa Waardebepalingrapport. | | &#x60;modelwaardeRisico&#x60; | Modelwaarde aanvraag met risicorapport. | | &#x60;modelwaardeDesktopTaxatie&#x60; | Modelwaarde aanvraag met Desktop Taxatie Beknoptwaarderapport. | | &#x60;desktopTaxatie&#x60; | Desktop taxatie aanvraag Desktop Taxatie rapport. | | [optional]
**hypotheekwaarde** | **int** | In hele euros. | [optional]
**aanvraagdoel** | [**Aanvraagdoel**](Aanvraagdoel.md) | English: Request GoalEnglish: Request Goal | Waarde | Omschrijving | | --- | --- | | &#x60;onbekend&#x60; | English: Unknown | | &#x60;aankoopNieuweWoning&#x60; | English: New Home Purchase | | &#x60;overbruggingsfinanciering&#x60; | English: Bridge Financing | | &#x60;hypotheekOversluiten&#x60; | English: Refinancing Mortgage | | &#x60;hypotheekOphogen&#x60; | English: Increasing Mortage | | &#x60;hypotheekWijziging&#x60; | English: Changing Mortgage | | &#x60;hypotheekrenteWijzigen&#x60; | English: Change Mortgage Intrest | | [optional]
**klantwaarde** | **int** | In hele euros. | [optional]
**klantwaarde_type** | [**KlantwaardeType**](KlantwaardeType.md) | | Waarde | Omschrijving | | --- | --- | | &#x60;onbekend&#x60; |  | | &#x60;koopsom&#x60; |  | | &#x60;taxatiewaarde&#x60; |  | | &#x60;wozWaarde&#x60; |  | | &#x60;eigenWaardeinschatting&#x60; |  | | [optional]
**is_bestaande_woning** | **bool** |  | [optional]
**bag_nummeraanduiding_id** | **int** |  |
**is_nhg** | **bool** |  | [optional]
**is_bestaande_nhg_hypotheek** | **bool** |  | [optional]
**benodigde_overbrugging** | **int** | In hele euros. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
