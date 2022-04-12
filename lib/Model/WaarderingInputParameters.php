<?php
/**
 * WaarderingInputParameters
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
 * The version of the OpenAPI document: 1.1.4
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

use \ArrayAccess;
use \Calcasa\Api\ObjectSerializer;

/**
 * WaarderingInputParameters Class Doc Comment
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WaarderingInputParameters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WaarderingInputParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'geldverstrekker' => 'string',
        'product_type' => '\Calcasa\Api\V0\Model\ProductType',
        'hypotheekwaarde' => 'int',
        'aanvraagdoel' => '\Calcasa\Api\V0\Model\Aanvraagdoel',
        'klantwaarde' => 'int',
        'klantwaarde_type' => '\Calcasa\Api\V0\Model\KlantwaardeType',
        'is_bestaande_woning' => 'bool',
        'bag_nummeraanduiding_id' => 'int',
        'is_nhg' => 'bool',
        'is_bestaande_nhg_hypotheek' => 'bool',
        'benodigde_overbrugging' => 'int',
        'peildatum' => '\DateTime',
        'is_erfpacht' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'geldverstrekker' => null,
        'product_type' => null,
        'hypotheekwaarde' => 'int32',
        'aanvraagdoel' => null,
        'klantwaarde' => 'int32',
        'klantwaarde_type' => null,
        'is_bestaande_woning' => null,
        'bag_nummeraanduiding_id' => 'int64',
        'is_nhg' => null,
        'is_bestaande_nhg_hypotheek' => null,
        'benodigde_overbrugging' => 'int32',
        'peildatum' => 'date-time',
        'is_erfpacht' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'geldverstrekker' => 'geldverstrekker',
        'product_type' => 'productType',
        'hypotheekwaarde' => 'hypotheekwaarde',
        'aanvraagdoel' => 'aanvraagdoel',
        'klantwaarde' => 'klantwaarde',
        'klantwaarde_type' => 'klantwaardeType',
        'is_bestaande_woning' => 'isBestaandeWoning',
        'bag_nummeraanduiding_id' => 'bagNummeraanduidingId',
        'is_nhg' => 'isNhg',
        'is_bestaande_nhg_hypotheek' => 'isBestaandeNhgHypotheek',
        'benodigde_overbrugging' => 'benodigdeOverbrugging',
        'peildatum' => 'peildatum',
        'is_erfpacht' => 'isErfpacht'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'geldverstrekker' => 'setGeldverstrekker',
        'product_type' => 'setProductType',
        'hypotheekwaarde' => 'setHypotheekwaarde',
        'aanvraagdoel' => 'setAanvraagdoel',
        'klantwaarde' => 'setKlantwaarde',
        'klantwaarde_type' => 'setKlantwaardeType',
        'is_bestaande_woning' => 'setIsBestaandeWoning',
        'bag_nummeraanduiding_id' => 'setBagNummeraanduidingId',
        'is_nhg' => 'setIsNhg',
        'is_bestaande_nhg_hypotheek' => 'setIsBestaandeNhgHypotheek',
        'benodigde_overbrugging' => 'setBenodigdeOverbrugging',
        'peildatum' => 'setPeildatum',
        'is_erfpacht' => 'setIsErfpacht'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'geldverstrekker' => 'getGeldverstrekker',
        'product_type' => 'getProductType',
        'hypotheekwaarde' => 'getHypotheekwaarde',
        'aanvraagdoel' => 'getAanvraagdoel',
        'klantwaarde' => 'getKlantwaarde',
        'klantwaarde_type' => 'getKlantwaardeType',
        'is_bestaande_woning' => 'getIsBestaandeWoning',
        'bag_nummeraanduiding_id' => 'getBagNummeraanduidingId',
        'is_nhg' => 'getIsNhg',
        'is_bestaande_nhg_hypotheek' => 'getIsBestaandeNhgHypotheek',
        'benodigde_overbrugging' => 'getBenodigdeOverbrugging',
        'peildatum' => 'getPeildatum',
        'is_erfpacht' => 'getIsErfpacht'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['geldverstrekker'] = $data['geldverstrekker'] ?? null;
        $this->container['product_type'] = $data['product_type'] ?? null;
        $this->container['hypotheekwaarde'] = $data['hypotheekwaarde'] ?? null;
        $this->container['aanvraagdoel'] = $data['aanvraagdoel'] ?? null;
        $this->container['klantwaarde'] = $data['klantwaarde'] ?? null;
        $this->container['klantwaarde_type'] = $data['klantwaarde_type'] ?? null;
        $this->container['is_bestaande_woning'] = $data['is_bestaande_woning'] ?? null;
        $this->container['bag_nummeraanduiding_id'] = $data['bag_nummeraanduiding_id'] ?? null;
        $this->container['is_nhg'] = $data['is_nhg'] ?? null;
        $this->container['is_bestaande_nhg_hypotheek'] = $data['is_bestaande_nhg_hypotheek'] ?? null;
        $this->container['benodigde_overbrugging'] = $data['benodigde_overbrugging'] ?? null;
        $this->container['peildatum'] = $data['peildatum'] ?? null;
        $this->container['is_erfpacht'] = $data['is_erfpacht'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['product_type'] === null) {
            $invalidProperties[] = "'product_type' can't be null";
        }
        if ($this->container['bag_nummeraanduiding_id'] === null) {
            $invalidProperties[] = "'bag_nummeraanduiding_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets geldverstrekker
     *
     * @return string|null
     */
    public function getGeldverstrekker()
    {
        return $this->container['geldverstrekker'];
    }

    /**
     * Sets geldverstrekker
     *
     * @param string|null $geldverstrekker Ongebruikt voor alle producttypen op dit moment. Deze informatie komt uit de credentials.
     *
     * @return self
     */
    public function setGeldverstrekker($geldverstrekker)
    {
        $this->container['geldverstrekker'] = $geldverstrekker;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return ProductType
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param ProductType $product_type Verplicht voor alle aanvragen.  Bepalend voor welke andere velden verplicht zijn.Het product type voor een waardering. Deze moeten handmatig aangezet worden voor de gebruikte credentails. | Waarde | Omschrijving | | --- | --- | | `onbekend` | Geen geldige invoer. Onbekend product type. | | `modelwaardeCalcasa` | Niet beschikbaar op dit moment.<br>            Modelwaarde aanvraag met Calcasa Waardebepalingrapport. | | `modelwaardeRisico` | Modelwaarde aanvraag met risicorapport. | | `modelwaardeDesktopTaxatie` | Modelwaarde aanvraag met Desktop Taxatie Beknoptwaarderapport. | | `desktopTaxatie` | Desktop taxatie aanvraag met Desktop Taxatie rapport. |
     *
     * @return self
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets hypotheekwaarde
     *
     * @return int|null
     */
    public function getHypotheekwaarde()
    {
        return $this->container['hypotheekwaarde'];
    }

    /**
     * Sets hypotheekwaarde
     *
     * @param int|null $hypotheekwaarde Verplicht voor de producttypen `modelwaardeDesktopTaxatie` en `desktopTaxatie`.  Voor het aanvraagdoel `hypotheekOphogen` is dit de som van de huidige hypotheeksom en de ophoging.  In hele euros.
     *
     * @return self
     */
    public function setHypotheekwaarde($hypotheekwaarde)
    {
        $this->container['hypotheekwaarde'] = $hypotheekwaarde;

        return $this;
    }

    /**
     * Gets aanvraagdoel
     *
     * @return Aanvraagdoel|null
     */
    public function getAanvraagdoel()
    {
        return $this->container['aanvraagdoel'];
    }

    /**
     * Sets aanvraagdoel
     *
     * @param Aanvraagdoel|null $aanvraagdoel Verplicht voor de producttypen `modelwaardeDesktopTaxatie` en `desktopTaxatie`.  Bepalend voor welke andere velden verplicht zijn.English: Request Goal | Waarde | Omschrijving | | --- | --- | | `onbekend` | English: Unknown | | `aankoopNieuweWoning` | English: New Home Purchase | | `overbruggingsfinanciering` | English: Bridge Financing | | `hypotheekOversluiten` | English: Refinancing Mortgage | | `hypotheekOphogen` | English: Increasing Mortage | | `hypotheekWijziging` | English: Changing Mortgage | | `hypotheekrenteWijzigen` | English: Change Mortgage Intrest |
     *
     * @return self
     */
    public function setAanvraagdoel($aanvraagdoel)
    {
        $this->container['aanvraagdoel'] = $aanvraagdoel;

        return $this;
    }

    /**
     * Gets klantwaarde
     *
     * @return int|null
     */
    public function getKlantwaarde()
    {
        return $this->container['klantwaarde'];
    }

    /**
     * Sets klantwaarde
     *
     * @param int|null $klantwaarde Verplicht voor de producttypen `modelwaardeDesktopTaxatie` en `desktopTaxatie`.  In hele euros. De waarde zoals bekend bij de klant met bijbehorende KlantwaardeType.
     *
     * @return self
     */
    public function setKlantwaarde($klantwaarde)
    {
        $this->container['klantwaarde'] = $klantwaarde;

        return $this;
    }

    /**
     * Gets klantwaarde_type
     *
     * @return KlantwaardeType|null
     */
    public function getKlantwaardeType()
    {
        return $this->container['klantwaarde_type'];
    }

    /**
     * Sets klantwaarde_type
     *
     * @param KlantwaardeType|null $klantwaarde_type Verplicht voor de producttypen `modelwaardeDesktopTaxatie` en `desktopTaxatie`. Afhankelijk van de geldverstrekker- en accountconfiguratie is alleen `koopsom` toegestaan voor het aanvraagdoel `aankoopNieuweWoning`. | Waarde | Omschrijving | | --- | --- | | `onbekend` |  | | `koopsom` |  | | `taxatiewaarde` |  | | `wozWaarde` |  | | `eigenWaardeinschatting` |  |
     *
     * @return self
     */
    public function setKlantwaardeType($klantwaarde_type)
    {
        $this->container['klantwaarde_type'] = $klantwaarde_type;

        return $this;
    }

    /**
     * Gets is_bestaande_woning
     *
     * @return bool|null
     */
    public function getIsBestaandeWoning()
    {
        return $this->container['is_bestaande_woning'];
    }

    /**
     * Sets is_bestaande_woning
     *
     * @param bool|null $is_bestaande_woning Verplicht voor de producttypen `modelwaardeDesktopTaxatie` en `desktopTaxatie`.  Geeft aan of het te waarderen object een bestaande koopwoning is.
     *
     * @return self
     */
    public function setIsBestaandeWoning($is_bestaande_woning)
    {
        $this->container['is_bestaande_woning'] = $is_bestaande_woning;

        return $this;
    }

    /**
     * Gets bag_nummeraanduiding_id
     *
     * @return int
     */
    public function getBagNummeraanduidingId()
    {
        return $this->container['bag_nummeraanduiding_id'];
    }

    /**
     * Sets bag_nummeraanduiding_id
     *
     * @param int $bag_nummeraanduiding_id Verplicht voor alle producttypen.  Het BAG (Basisregistratie Adressen en Gebouwen) nummeraanduiding id.
     *
     * @return self
     */
    public function setBagNummeraanduidingId($bag_nummeraanduiding_id)
    {
        $this->container['bag_nummeraanduiding_id'] = $bag_nummeraanduiding_id;

        return $this;
    }

    /**
     * Gets is_nhg
     *
     * @return bool|null
     */
    public function getIsNhg()
    {
        return $this->container['is_nhg'];
    }

    /**
     * Sets is_nhg
     *
     * @param bool|null $is_nhg Verplicht voor de producttypen `modelwaardeDesktopTaxatie` en `desktopTaxatie`.  Geeft aan of er gebruikt gemaakt wordt van de Nationale Hypotheekgarantie.
     *
     * @return self
     */
    public function setIsNhg($is_nhg)
    {
        $this->container['is_nhg'] = $is_nhg;

        return $this;
    }

    /**
     * Gets is_bestaande_nhg_hypotheek
     *
     * @return bool|null
     */
    public function getIsBestaandeNhgHypotheek()
    {
        return $this->container['is_bestaande_nhg_hypotheek'];
    }

    /**
     * Sets is_bestaande_nhg_hypotheek
     *
     * @param bool|null $is_bestaande_nhg_hypotheek Verplicht te gebruiken voor de combinatie van de producttypen `modelwaardeDesktopTaxatie` en `desktopTaxatie`, als er gebruikt gemaakt wordt van de Nationale Hypotheekgarantie (`isNhg`) en het aanvraagdoel niet `aankoopNieuweWoning` is.  Geeft aan of er bij de eventuele bestaande hypotheek gebruik is gemaakt van de Nationale Hypotheekgarantie.
     *
     * @return self
     */
    public function setIsBestaandeNhgHypotheek($is_bestaande_nhg_hypotheek)
    {
        $this->container['is_bestaande_nhg_hypotheek'] = $is_bestaande_nhg_hypotheek;

        return $this;
    }

    /**
     * Gets benodigde_overbrugging
     *
     * @return int|null
     */
    public function getBenodigdeOverbrugging()
    {
        return $this->container['benodigde_overbrugging'];
    }

    /**
     * Sets benodigde_overbrugging
     *
     * @param int|null $benodigde_overbrugging Verplicht voor de combinatie van de producttypen `modelwaardeDesktopTaxatie` en `desktopTaxatie` en het aanvraagdoel `overbruggingsfinanciering`.  In hele euros.
     *
     * @return self
     */
    public function setBenodigdeOverbrugging($benodigde_overbrugging)
    {
        $this->container['benodigde_overbrugging'] = $benodigde_overbrugging;

        return $this;
    }

    /**
     * Gets peildatum
     *
     * @return \DateTime|null
     */
    public function getPeildatum()
    {
        return $this->container['peildatum'];
    }

    /**
     * Sets peildatum
     *
     * @param \DateTime|null $peildatum Optioneel te gebruiken voor de producttypen `modelwaardeRisico`.  Peildatum voor de aanvraag. Standaard de datum van vandaag.  Supports yyyy-MM-dd or optionally yyyy-MM-ddTHH:mm:ssZ (ISO) with the time stamp assumed to be in UTC and the time is dropped before using the value.
     *
     * @return self
     */
    public function setPeildatum($peildatum)
    {
        $this->container['peildatum'] = $peildatum;

        return $this;
    }

    /**
     * Gets is_erfpacht
     *
     * @return bool|null
     */
    public function getIsErfpacht()
    {
        return $this->container['is_erfpacht'];
    }

    /**
     * Sets is_erfpacht
     *
     * @param bool|null $is_erfpacht Potentieel verplicht voor de product typen `modelwaardeDesktopTaxatie` en `desktopTaxatie` afhankelijk van de geldverstrekker- en accountconfiguratie.
     *
     * @return self
     */
    public function setIsErfpacht($is_erfpacht)
    {
        $this->container['is_erfpacht'] = $is_erfpacht;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


