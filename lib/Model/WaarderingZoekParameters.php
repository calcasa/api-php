<?php
/**
 * WaarderingZoekParameters
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
 * The version of the OpenAPI document: 1.2.1
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
 * WaarderingZoekParameters Class Doc Comment
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WaarderingZoekParameters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WaarderingZoekParameters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aangemaakt' => '\DateTime',
        'geldverstrekker' => 'string',
        'productType' => '\Calcasa\Api\Model\ProductType',
        'aanvraagdoel' => '\Calcasa\Api\Model\Aanvraagdoel',
        'waarderingStatus' => '\Calcasa\Api\Model\WaarderingStatus',
        'bagNummeraanduidingId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aangemaakt' => 'date-time',
        'geldverstrekker' => null,
        'productType' => null,
        'aanvraagdoel' => null,
        'waarderingStatus' => null,
        'bagNummeraanduidingId' => 'int64'
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
        'aangemaakt' => 'aangemaakt',
        'geldverstrekker' => 'geldverstrekker',
        'productType' => 'productType',
        'aanvraagdoel' => 'aanvraagdoel',
        'waarderingStatus' => 'waarderingStatus',
        'bagNummeraanduidingId' => 'bagNummeraanduidingId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aangemaakt' => 'setAangemaakt',
        'geldverstrekker' => 'setGeldverstrekker',
        'productType' => 'setProductType',
        'aanvraagdoel' => 'setAanvraagdoel',
        'waarderingStatus' => 'setWaarderingStatus',
        'bagNummeraanduidingId' => 'setBagNummeraanduidingId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aangemaakt' => 'getAangemaakt',
        'geldverstrekker' => 'getGeldverstrekker',
        'productType' => 'getProductType',
        'aanvraagdoel' => 'getAanvraagdoel',
        'waarderingStatus' => 'getWaarderingStatus',
        'bagNummeraanduidingId' => 'getBagNummeraanduidingId'
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
        $this->container['aangemaakt'] = $data['aangemaakt'] ?? null;
        $this->container['geldverstrekker'] = $data['geldverstrekker'] ?? null;
        $this->container['productType'] = $data['productType'] ?? null;
        $this->container['aanvraagdoel'] = $data['aanvraagdoel'] ?? null;
        $this->container['waarderingStatus'] = $data['waarderingStatus'] ?? null;
        $this->container['bagNummeraanduidingId'] = $data['bagNummeraanduidingId'] ?? null;
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
     * Gets aangemaakt
     *
     * @return \DateTime|null
     */
    public function getAangemaakt()
    {
        return $this->container['aangemaakt'];
    }

    /**
     * Sets aangemaakt
     *
     * @param \DateTime|null $aangemaakt De datum/tijd waarop de waardering is aangemaakt, in UTC.
     *
     * @return self
     */
    public function setAangemaakt($aangemaakt)
    {
        $this->container['aangemaakt'] = $aangemaakt;

        return $this;
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
     * @param string|null $geldverstrekker De naam van de geldverstrekker voor de waardering.
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
     * @param ProductType $productType Verplicht.Het product type voor een waardering. Deze moeten handmatig aangezet worden voor de gebruikte credentails. | Waarde | Omschrijving | | --- | --- | | `onbekend` | Geen geldige invoer. Onbekend product type. | | `modelwaardeCalcasa` | Niet beschikbaar op dit moment.<br>            Modelwaarde aanvraag met Calcasa Waardebepalingrapport. | | `modelwaardeRisico` | Modelwaarde aanvraag met risicorapport. | | `modelwaardeDesktopTaxatie` | Modelwaarde aanvraag met Desktop Taxatie Beknoptwaarderapport. | | `desktopTaxatie` | Desktop taxatie aanvraag met Desktop Taxatie rapport. |
     *
     * @return self
     */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;

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
     * @param Aanvraagdoel|null $aanvraagdoel aanvraagdoel
     *
     * @return self
     */
    public function setAanvraagdoel($aanvraagdoel)
    {
        $this->container['aanvraagdoel'] = $aanvraagdoel;

        return $this;
    }

    /**
     * Gets waarderingStatus
     *
     * @return WaarderingStatus|null
     */
    public function getWaarderingStatus()
    {
        return $this->container['waarderingStatus'];
    }

    /**
     * Sets waarderingStatus
     *
     * @param WaarderingStatus|null $waarderingStatus waarderingStatus
     *
     * @return self
     */
    public function setWaarderingStatus($waarderingStatus)
    {
        $this->container['waarderingStatus'] = $waarderingStatus;

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
     * @param int $bagNummeraanduidingId Verplicht.
     *
     * @return self
     */
    public function setBagNummeraanduidingId($bagNummeraanduidingId)
    {
        $this->container['bagNummeraanduidingId'] = $bagNummeraanduidingId;

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


