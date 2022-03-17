<?php
/**
 * BusinessRulesCode
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
 * The version of the OpenAPI document: 1.1.2
 * Contact: info@calcasa.nl
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Calcasa\Api\Model;
use \Calcasa\Api\ObjectSerializer;

/**
 * BusinessRulesCode Class Doc Comment
 *
 * @category Class
 * @description Reden voor het niet voldoen aan de business rules. | Waarde | Omschrijving | | --- | --- | | &#x60;geenWaardebepalingMogelijk&#x60; | De ingevoerde woning kan modelmatig niet goed genoeg worden vastgesteld. | | &#x60;geenBestaandeWoning&#x60; | Geen bestaande koopwoning. | | &#x60;fouteOfOntbrekendeInvoer&#x60; | Noodzakelijke invoer ontbreekt of is foutief ingevoerd. | | &#x60;calcasaWaardeTeHoog&#x60; | Calcasa-waarde is te hoog volgens de business rules. | | &#x60;ltvTeHoog&#x60; | Loan-to-value is te hoog volgens de business rules. | | &#x60;hypotheekTeHoog&#x60; | Hypotheekbedrag is te hoog volgens de business rules. | | &#x60;woningtypeIncorrect&#x60; | Woningtype is incorrect volgens de business rules. | | &#x60;calcasaWaardeTeLaag&#x60; | Calcasa-waarde is te laag volgens de business rules. | | &#x60;calcasaWaardeTeHoogVoorNhg&#x60; | Calcasa-waarde is te hoog voor een NHG-waardering volgens de business rules. | | &#x60;calcasaWaardeEnKoopsomTeHoogVoorNhg&#x60; | Calcasa-waarde en ingevoerde koopsom zijn te hoog voor een NHG-waardering volgens de business rules. |
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BusinessRulesCode
{
    /**
     * Possible values of this enum
     */
    const GEEN_WAARDEBEPALING_MOGELIJK = 'geenWaardebepalingMogelijk';

    const GEEN_BESTAANDE_WONING = 'geenBestaandeWoning';

    const FOUTE_OF_ONTBREKENDE_INVOER = 'fouteOfOntbrekendeInvoer';

    const CALCASA_WAARDE_TE_HOOG = 'calcasaWaardeTeHoog';

    const LTV_TE_HOOG = 'ltvTeHoog';

    const HYPOTHEEK_TE_HOOG = 'hypotheekTeHoog';

    const WONINGTYPE_INCORRECT = 'woningtypeIncorrect';

    const CALCASA_WAARDE_TE_LAAG = 'calcasaWaardeTeLaag';

    const CALCASA_WAARDE_TE_HOOG_VOOR_NHG = 'calcasaWaardeTeHoogVoorNhg';

    const CALCASA_WAARDE_EN_KOOPSOM_TE_HOOG_VOOR_NHG = 'calcasaWaardeEnKoopsomTeHoogVoorNhg';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GEEN_WAARDEBEPALING_MOGELIJK,
            self::GEEN_BESTAANDE_WONING,
            self::FOUTE_OF_ONTBREKENDE_INVOER,
            self::CALCASA_WAARDE_TE_HOOG,
            self::LTV_TE_HOOG,
            self::HYPOTHEEK_TE_HOOG,
            self::WONINGTYPE_INCORRECT,
            self::CALCASA_WAARDE_TE_LAAG,
            self::CALCASA_WAARDE_TE_HOOG_VOOR_NHG,
            self::CALCASA_WAARDE_EN_KOOPSOM_TE_HOOG_VOOR_NHG
        ];
    }
}


