<?php
/**
 * VerkoopBijzonderheden
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
 * Calcasa Public API
 *
 * The version of the OpenAPI document: v0
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
 * VerkoopBijzonderheden Class Doc Comment
 *
 * @category Class
 * @description | Waarde | Omschrijving | | --- | --- | | &#x60;onbekend&#x60; | Bijzonderheden onbekend. | | &#x60;executieverkoop&#x60; | Een indicatie dat het object is verkocht via een executieveiling. | | &#x60;familieverkoop&#x60; | Een indicatie dat de transactie is geregistreerd als familieverkoop. | | &#x60;meerOnroerendGoed&#x60; | Een indicatie dat de transactie meerdere percelen bevat. | | &#x60;zittendeHuurder&#x60; | Een indicatie dat de transactie is geregistreerd als verkoop aan de zittende huurder. | | &#x60;verkoperNietNatuurlijk&#x60; | Een indicatie dat de verkoper een niet-natuurlijke persoon is. | | &#x60;koperNietNatuurlijk&#x60; | Een indicatie dat de koper een niet-natuurlijke persoon is. | | &#x60;nietWoning&#x60; | Een indicatie dat het object geregistreerd is als niet-woning. | | &#x60;erfdienstbaarheid&#x60; | Een indicatie dat er een erfdienstbaarheid op het object gevestigd is. |
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VerkoopBijzonderheden
{
    /**
     * Possible values of this enum
     */
    const ONBEKEND = 'onbekend';

    const EXECUTIEVERKOOP = 'executieverkoop';

    const FAMILIEVERKOOP = 'familieverkoop';

    const MEER_ONROEREND_GOED = 'meerOnroerendGoed';

    const ZITTENDE_HUURDER = 'zittendeHuurder';

    const VERKOPER_NIET_NATUURLIJK = 'verkoperNietNatuurlijk';

    const KOPER_NIET_NATUURLIJK = 'koperNietNatuurlijk';

    const NIET_WONING = 'nietWoning';

    const ERFDIENSTBAARHEID = 'erfdienstbaarheid';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONBEKEND,
            self::EXECUTIEVERKOOP,
            self::FAMILIEVERKOOP,
            self::MEER_ONROEREND_GOED,
            self::ZITTENDE_HUURDER,
            self::VERKOPER_NIET_NATUURLIJK,
            self::KOPER_NIET_NATUURLIJK,
            self::NIET_WONING,
            self::ERFDIENSTBAARHEID
        ];
    }
}


