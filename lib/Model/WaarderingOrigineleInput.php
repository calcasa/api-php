<?php
/**
 * WaarderingOrigineleInput
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
 * The version of the OpenAPI document: 1.2.0
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

use \ArrayAccess;
use \Calcasa\Api\ObjectSerializer;

/**
 * WaarderingOrigineleInput Class Doc Comment
 *
 * @category Class
 * @description De invoer die gebruikt is voor het aanmaken van deze waardering.
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WaarderingOrigineleInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Waardering_origineleInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'geldverstrekker' => 'string',
        'productType' => '\Calcasa\Api\Model\ProductType',
        'hypotheekwaarde' => 'int',
        'aanvraagdoel' => '\Calcasa\Api\Model\Aanvraagdoel',
        'klantwaarde' => 'int',
        'klantwaardeType' => '\Calcasa\Api\Model\KlantwaardeType',
        'isBestaandeWoning' => 'bool',
        'bagNummeraanduidingId' => 'int',
        'isNhg' => 'bool',
        'isBestaandeNhgHypotheek' => 'bool',
        'benodigdeOverbrugging' => 'int',
        'peildatum' => '\DateTime',
        'isErfpacht' => 'bool',
        'klantkenmerk' => 'string'
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
        'productType' => null,
        'hypotheekwaarde' => 'int32',
        'aanvraagdoel' => null,
        'klantwaarde' => 'int32',
        'klantwaardeType' => null,
        'isBestaandeWoning' => null,
        'bagNummeraanduidingId' => 'int64',
        'isNhg' => null,
        'isBestaandeNhgHypotheek' => null,
        'benodigdeOverbrugging' => 'int32',
        'peildatum' => 'date-time',
        'isErfpacht' => null,
        'klantkenmerk' => null
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
        'productType' => 'productType',
        'hypotheekwaarde' => 'hypotheekwaarde',
        'aanvraagdoel' => 'aanvraagdoel',
        'klantwaarde' => 'klantwaarde',
        'klantwaardeType' => 'klantwaardeType',
        'isBestaandeWoning' => 'isBestaandeWoning',
        'bagNummeraanduidingId' => 'bagNummeraanduidingId',
        'isNhg' => 'isNhg',
        'isBestaandeNhgHypotheek' => 'isBestaandeNhgHypotheek',
        'benodigdeOverbrugging' => 'benodigdeOverbrugging',
        'peildatum' => 'peildatum',
        'isErfpacht' => 'isErfpacht',
        'klantkenmerk' => 'klantkenmerk'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'geldverstrekker' => 'setGeldverstrekker',
        'productType' => 'setProductType',
        'hypotheekwaarde' => 'setHypotheekwaarde',
        'aanvraagdoel' => 'setAanvraagdoel',
        'klantwaarde' => 'setKlantwaarde',
        'klantwaardeType' => 'setKlantwaardeType',
        'isBestaandeWoning' => 'setIsBestaandeWoning',
        'bagNummeraanduidingId' => 'setBagNummeraanduidingId',
        'isNhg' => 'setIsNhg',
        'isBestaandeNhgHypotheek' => 'setIsBestaandeNhgHypotheek',
        'benodigdeOverbrugging' => 'setBenodigdeOverbrugging',
        'peildatum' => 'setPeildatum',
        'isErfpacht' => 'setIsErfpacht',
        'klantkenmerk' => 'setKlantkenmerk'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'geldverstrekker' => 'getGeldverstrekker',
        'productType' => 'getProductType',
        'hypotheekwaarde' => 'getHypotheekwaarde',
        'aanvraagdoel' => 'getAanvraagdoel',
        'klantwaarde' => 'getKlantwaarde',
        'klantwaardeType' => 'getKlantwaardeType',
        'isBestaandeWoning' => 'getIsBestaandeWoning',
        'bagNummeraanduidingId' => 'getBagNummeraanduidingId',
        'isNhg' => 'getIsNhg',
        'isBestaandeNhgHypotheek' => 'getIsBestaandeNhgHypotheek',
        'benodigdeOverbrugging' => 'getBenodigdeOverbrugging',
        'peildatum' => 'getPeildatum',
        'isErfpacht' => 'getIsErfpacht',
        'klantkenmerk' => 'getKlantkenmerk'
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
        $this->container['productType'] = $data['productType'] ?? null;
        $this->container['hypotheekwaarde'] = $data['hypotheekwaarde'] ?? null;
        $this->container['aanvraagdoel'] = $data['aanvraagdoel'] ?? null;
        $this->container['klantwaarde'] = $data['klantwaarde'] ?? null;
        $this->container['klantwaardeType'] = $data['klantwaardeType'] ?? null;
        $this->container['isBestaandeWoning'] = $data['isBestaandeWoning'] ?? null;
        $this->container['bagNummeraanduidingId'] = $data['bagNummeraanduidingId'] ?? null;
        $this->container['isNhg'] = $data['isNhg'] ?? null;
        $this->container['isBestaandeNhgHypotheek'] = $data['isBestaandeNhgHypotheek'] ?? null;
        $this->container['benodigdeOverbrugging'] = $data['benodigdeOverbrugging'] ?? null;
        $this->container['peildatum'] = $data['peildatum'] ?? null;
        $this->container['isErfpacht'] = $data['isErfpacht'] ?? null;
        $this->container['klantkenmerk'] = $data['klantkenmerk'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['productType'] === null) {
            $invalidProperties[] = "'productType' can't be null";
        }
        if ($this->container['bagNummeraanduidingId'] === null) {
            $invalidProperties[] = "'bagNummeraanduidingId' can't be null";
        }
        if (!is_null($this->container['klantkenmerk']) && (mb_strlen($this->container['klantkenmerk']) > 100)) {
            $invalidProperties[] = "invalid value for 'klantkenmerk', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['klantkenmerk']) && (mb_strlen($this->container['klantkenmerk']) < 0)) {
            $invalidProperties[] = "invalid value for 'klantkenmerk', the character length must be bigger than or equal to 0.";
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
     * Gets productType
     *
     * @return ProductType
     */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
     * Sets productType
     *
     * @param ProductType $productType Verplicht voor alle aanvragen.  Bepalend voor welke andere velden verplicht zijn.Het product type voor een waardering. Deze moeten handmatig aangezet worden voor de gebruikte credentails. | Waarde | Omschrijving | | --- | --- | | `onbekend` | Geen geldige invoer. Onbekend product type. | | `modelwaardeCalcasa` | Niet beschikbaar op dit moment.<br>            Modelwaarde aanvraag met Calcasa Waardebepalingrapport. | | `modelwaardeRisico` | Modelwaarde aanvraag met risicorapport. | | `modelwaardeDesktopTaxatie` | Modelwaarde aanvraag met Desktop Taxatie Beknoptwaarderapport. | | `desktopTaxatie` | Desktop taxatie aanvraag met Desktop Taxatie rapport. |
     *
     * @return self
     */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;

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
     * Gets klantwaardeType
     *
     * @return KlantwaardeType|null
     */
    public function getKlantwaardeType()
    {
        return $this->container['klantwaardeType'];
    }

    /**
     * Sets klantwaardeType
     *
     * @param KlantwaardeType|null $klantwaardeType Verplicht voor de producttypen `modelwaardeDesktopTaxatie` en `desktopTaxatie`. Afhankelijk van de geldverstrekker- en accountconfiguratie is alleen `koopsom` toegestaan voor het aanvraagdoel `aankoopNieuweWoning`. | Waarde | Omschrijving | | --- | --- | | `onbekend` |  | | `koopsom` |  | | `taxatiewaarde` |  | | `wozWaarde` |  | | `eigenWaardeinschatting` |  |
     *
     * @return self
     */
    public function setKlantwaardeType($klantwaardeType)
    {
        $this->container['klantwaardeType'] = $klantwaardeType;

        return $this;
    }

    /**
     * Gets isBestaandeWoning
     *
     * @return bool|null
     */
    public function getIsBestaandeWoning()
    {
        return $this->container['isBestaandeWoning'];
    }

    /**
     * Sets isBestaandeWoning
     *
     * @param bool|null $isBestaandeWoning Verplicht voor de producttypen `modelwaardeDesktopTaxatie` en `desktopTaxatie`.  Geeft aan of het te waarderen object een bestaande koopwoning is.
     *
     * @return self
     */
    public function setIsBestaandeWoning($isBestaandeWoning)
    {
        $this->container['isBestaandeWoning'] = $isBestaandeWoning;

        return $this;
    }

    /**
     * Gets bagNummeraanduidingId
     *
     * @return int
     */
    public function getBagNummeraanduidingId()
    {
        return $this->container['bagNummeraanduidingId'];
    }

    /**
     * Sets bagNummeraanduidingId
     *
     * @param int $bagNummeraanduidingId Verplicht voor alle producttypen.  Het BAG (Basisregistratie Adressen en Gebouwen) nummeraanduiding id.
     *
     * @return self
     */
    public function setBagNummeraanduidingId($bagNummeraanduidingId)
    {
        $this->container['bagNummeraanduidingId'] = $bagNummeraanduidingId;

        return $this;
    }

    /**
     * Gets isNhg
     *
     * @return bool|null
     */
    public function getIsNhg()
    {
        return $this->container['isNhg'];
    }

    /**
     * Sets isNhg
     *
     * @param bool|null $isNhg Verplicht voor de producttypen `modelwaardeDesktopTaxatie` en `desktopTaxatie`.  Geeft aan of er gebruikt gemaakt wordt van de Nationale Hypotheekgarantie.
     *
     * @return self
     */
    public function setIsNhg($isNhg)
    {
        $this->container['isNhg'] = $isNhg;

        return $this;
    }

    /**
     * Gets isBestaandeNhgHypotheek
     *
     * @return bool|null
     */
    public function getIsBestaandeNhgHypotheek()
    {
        return $this->container['isBestaandeNhgHypotheek'];
    }

    /**
     * Sets isBestaandeNhgHypotheek
     *
     * @param bool|null $isBestaandeNhgHypotheek Verplicht te gebruiken voor de combinatie van de producttypen `modelwaardeDesktopTaxatie` en `desktopTaxatie`, als er gebruikt gemaakt wordt van de Nationale Hypotheekgarantie (`isNhg`) en het aanvraagdoel niet `aankoopNieuweWoning` is.  Geeft aan of er bij de eventuele bestaande hypotheek gebruik is gemaakt van de Nationale Hypotheekgarantie.
     *
     * @return self
     */
    public function setIsBestaandeNhgHypotheek($isBestaandeNhgHypotheek)
    {
        $this->container['isBestaandeNhgHypotheek'] = $isBestaandeNhgHypotheek;

        return $this;
    }

    /**
     * Gets benodigdeOverbrugging
     *
     * @return int|null
     */
    public function getBenodigdeOverbrugging()
    {
        return $this->container['benodigdeOverbrugging'];
    }

    /**
     * Sets benodigdeOverbrugging
     *
     * @param int|null $benodigdeOverbrugging Verplicht voor de combinatie van de producttypen `modelwaardeDesktopTaxatie` en `desktopTaxatie` en het aanvraagdoel `overbruggingsfinanciering`.  In hele euros.
     *
     * @return self
     */
    public function setBenodigdeOverbrugging($benodigdeOverbrugging)
    {
        $this->container['benodigdeOverbrugging'] = $benodigdeOverbrugging;

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
     * Gets isErfpacht
     *
     * @return bool|null
     */
    public function getIsErfpacht()
    {
        return $this->container['isErfpacht'];
    }

    /**
     * Sets isErfpacht
     *
     * @param bool|null $isErfpacht Potentieel verplicht voor de product typen `modelwaardeDesktopTaxatie` en `desktopTaxatie` afhankelijk van de geldverstrekker- en accountconfiguratie.
     *
     * @return self
     */
    public function setIsErfpacht($isErfpacht)
    {
        $this->container['isErfpacht'] = $isErfpacht;

        return $this;
    }

    /**
     * Gets klantkenmerk
     *
     * @return string|null
     */
    public function getKlantkenmerk()
    {
        return $this->container['klantkenmerk'];
    }

    /**
     * Sets klantkenmerk
     *
     * @param string|null $klantkenmerk Vrij veld voor het opslaan van een klantkenmerk, zoals bijvoorbeeld een dossiernummer of andere interne referentie. Dit veld komt later weer terug in het `origineleInput` veld in het `waardering` object.
     *
     * @return self
     */
    public function setKlantkenmerk($klantkenmerk)
    {
        if (!is_null($klantkenmerk) && (mb_strlen($klantkenmerk) > 100)) {
            throw new \InvalidArgumentException('invalid length for $klantkenmerk when calling WaarderingOrigineleInput., must be smaller than or equal to 100.');
        }
        if (!is_null($klantkenmerk) && (mb_strlen($klantkenmerk) < 0)) {
            throw new \InvalidArgumentException('invalid length for $klantkenmerk when calling WaarderingOrigineleInput., must be bigger than or equal to 0.');
        }

        $this->container['klantkenmerk'] = $klantkenmerk;

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


