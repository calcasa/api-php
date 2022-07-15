<?php
/**
 * FunderingType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Copyright 2022 Calcasa B.V.
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
 * The version of the OpenAPI document: 1.1.7
 * Contact: info@calcasa.nl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Calcasa\Api\Model;
use \Calcasa\Api\ObjectSerializer;

/**
 * FunderingType Class Doc Comment
 *
 * @category Class
 * @description Funderingstypes. | Waarde | Omschrijving | | --- | --- | | &#x60;onbekendFunderingType&#x60; | Onbekend fundering-type | | &#x60;hout&#x60; | Hout. | | &#x60;houtAmsterdam&#x60; | Hout, Amsterdamse variant. | | &#x60;houtRotterdam&#x60; | Hout, Rotterdamse variant. | | &#x60;beton&#x60; | Beton. | | &#x60;nietOnderheid&#x60; | Niet onderheid. | | &#x60;nietOnderheidGemetseld&#x60; | Niet onderheid, gemetseld. | | &#x60;nietOnderheidStroken&#x60; | Niet onderheid, stroken. | | &#x60;nietOnderheidPlaat&#x60; | Niet onderheid, plaat. | | &#x60;nietOnderheidBetonplaat&#x60; | Niet onderheid, betonplaat. | | &#x60;nietOnderheidSlieten&#x60; | Niet onderheid, slieten. | | &#x60;houtOplanger&#x60; | Hout met oplanger. | | &#x60;betonVerzwaard&#x60; | Beton verzwaard. | | &#x60;gecombineerd&#x60; | Gecombineerd. | | &#x60;staal&#x60; | Stalen buispaal. | | &#x60;houtAmsterdamRotterdam&#x60; | Houten paal, Rotterdam/Amsterdam methode. | | &#x60;houtRotterdamSpaarboog&#x60; | Houten paal, Rotterdam methode met spaarboog. | | &#x60;houtAmsterdamSpaarboog&#x60; | Houten paal, Amsterdam methode met spaarboog. |
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FunderingType
{
    /**
     * Possible values of this enum
     */
    public const ONBEKEND_FUNDERING_TYPE = 'onbekendFunderingType';

    public const HOUT = 'hout';

    public const HOUT_AMSTERDAM = 'houtAmsterdam';

    public const HOUT_ROTTERDAM = 'houtRotterdam';

    public const BETON = 'beton';

    public const NIET_ONDERHEID = 'nietOnderheid';

    public const NIET_ONDERHEID_GEMETSELD = 'nietOnderheidGemetseld';

    public const NIET_ONDERHEID_STROKEN = 'nietOnderheidStroken';

    public const NIET_ONDERHEID_PLAAT = 'nietOnderheidPlaat';

    public const NIET_ONDERHEID_BETONPLAAT = 'nietOnderheidBetonplaat';

    public const NIET_ONDERHEID_SLIETEN = 'nietOnderheidSlieten';

    public const HOUT_OPLANGER = 'houtOplanger';

    public const BETON_VERZWAARD = 'betonVerzwaard';

    public const GECOMBINEERD = 'gecombineerd';

    public const STAAL = 'staal';

    public const HOUT_AMSTERDAM_ROTTERDAM = 'houtAmsterdamRotterdam';

    public const HOUT_ROTTERDAM_SPAARBOOG = 'houtRotterdamSpaarboog';

    public const HOUT_AMSTERDAM_SPAARBOOG = 'houtAmsterdamSpaarboog';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONBEKEND_FUNDERING_TYPE,
            self::HOUT,
            self::HOUT_AMSTERDAM,
            self::HOUT_ROTTERDAM,
            self::BETON,
            self::NIET_ONDERHEID,
            self::NIET_ONDERHEID_GEMETSELD,
            self::NIET_ONDERHEID_STROKEN,
            self::NIET_ONDERHEID_PLAAT,
            self::NIET_ONDERHEID_BETONPLAAT,
            self::NIET_ONDERHEID_SLIETEN,
            self::HOUT_OPLANGER,
            self::BETON_VERZWAARD,
            self::GECOMBINEERD,
            self::STAAL,
            self::HOUT_AMSTERDAM_ROTTERDAM,
            self::HOUT_ROTTERDAM_SPAARBOOG,
            self::HOUT_AMSTERDAM_SPAARBOOG
        ];
    }
}


