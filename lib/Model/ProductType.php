<?php
/**
 * ProductType
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Copyright 2025 Calcasa B.V.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * Calcasa Public API
 *
 * The Calcasa API is used to connect to Calcasa provided services. For more information, please visit [Documentation](https://docs.calcasa.nl) or [GitHub](https://github.com/calcasa/api).
 *
 * The version of the OpenAPI document: 1.4.0-rc1
 * Contact: info@calcasa.nl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.13.0
 */
 
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Calcasa\Api\Model;
use \Calcasa\Api\ObjectSerializer;

/**
 * ProductType Class Doc Comment
 *
 * @category Class
 * @description Het product type voor een waardering. Deze moeten handmatig aangezet worden voor de gebruikte credentails. | Waarde | Omschrijving | | --- | --- | | &#x60;onbekend&#x60; | Geen geldige invoer. Onbekend product type. | | &#x60;modelwaardeCalcasa&#x60; | Niet beschikbaar op dit moment.&lt;br&gt;            Modelwaarde aanvraag met Calcasa Waardebepalingrapport. | | &#x60;modelwaardeRisico&#x60; | Modelwaarde aanvraag met risicorapport. | | &#x60;modelwaardeDesktopTaxatie&#x60; | Modelwaarde aanvraag met Desktop Taxatie Beknoptwaarderapport. | | &#x60;desktopTaxatie&#x60; | Desktop taxatie aanvraag met Desktop Taxatie rapport. | | &#x60;desktopTaxatieHerwaardering&#x60; | Desktop taxatie aanvraag met Desktop Taxatie rapport voor herwaarderingen. |
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductType
{
    /**
     * Possible values of this enum
     */
    public const ONBEKEND = 'onbekend';

    public const MODELWAARDE_CALCASA = 'modelwaardeCalcasa';

    public const MODELWAARDE_RISICO = 'modelwaardeRisico';

    public const MODELWAARDE_DESKTOP_TAXATIE = 'modelwaardeDesktopTaxatie';

    public const DESKTOP_TAXATIE = 'desktopTaxatie';

    public const DESKTOP_TAXATIE_HERWAARDERING = 'desktopTaxatieHerwaardering';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONBEKEND,
            self::MODELWAARDE_CALCASA,
            self::MODELWAARDE_RISICO,
            self::MODELWAARDE_DESKTOP_TAXATIE,
            self::DESKTOP_TAXATIE,
            self::DESKTOP_TAXATIE_HERWAARDERING
        ];
    }
}


