<?php
/**
 * ProductType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Copyright 2021 Calcasa B.V.
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
 * Calcasa Public API v1
 *
 * The version of the OpenAPI document: 1.0.1
 * Contact: info@calcasa.nl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
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
 * @description | Waarde | Omschrijving | | --- | --- | | &#x60;onbekend&#x60; | Onbekend product type. Geen geldige invoer. | | &#x60;modelwaardeCalcasa&#x60; | Modelwaarde aanvraag met Calcasa Waardebepalingrapport. | | &#x60;modelwaardeRisico&#x60; | Modelwaarde aanvraag met risicorapport. | | &#x60;modelwaardeDesktopTaxatie&#x60; | Modelwaarde aanvraag met Desktop Taxatie Beknoptwaarderapport. | | &#x60;desktopTaxatie&#x60; | Desktop taxatie aanvraag met Desktop Taxatie rapport. |
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductType
{
    /**
     * Possible values of this enum
     */
    const ONBEKEND = 'onbekend';

    const MODELWAARDE_CALCASA = 'modelwaardeCalcasa';

    const MODELWAARDE_RISICO = 'modelwaardeRisico';

    const MODELWAARDE_DESKTOP_TAXATIE = 'modelwaardeDesktopTaxatie';

    const DESKTOP_TAXATIE = 'desktopTaxatie';

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
            self::DESKTOP_TAXATIE
        ];
    }
}


