<?php
/**
 * Funderingdata
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

use \ArrayAccess;
use \Calcasa\Api\ObjectSerializer;

/**
 * Funderingdata Class Doc Comment
 *
 * @category Class
 * @description Uitvoer met funderingsinformatie.
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Funderingdata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Funderingdata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'typering' => '\Calcasa\Api\V0\Model\FunderingTypering',
        'herstel_type' => '\Calcasa\Api\V0\Model\FunderingHerstelType',
        'droogstand_risico' => '\Calcasa\Api\V0\Model\FunderingRisico',
        'optrekkend_vocht_risico' => '\Calcasa\Api\V0\Model\FunderingRisico',
        'bio_infectie_risico' => '\Calcasa\Api\V0\Model\FunderingRisico',
        'herstelkosten' => 'double',
        'bron' => '\Calcasa\Api\V0\Model\FunderingDataBron'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'typering' => null,
        'herstel_type' => null,
        'droogstand_risico' => null,
        'optrekkend_vocht_risico' => null,
        'bio_infectie_risico' => null,
        'herstelkosten' => 'double',
        'bron' => null
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
        'typering' => 'typering',
        'herstel_type' => 'herstelType',
        'droogstand_risico' => 'droogstandRisico',
        'optrekkend_vocht_risico' => 'optrekkendVochtRisico',
        'bio_infectie_risico' => 'bioInfectieRisico',
        'herstelkosten' => 'herstelkosten',
        'bron' => 'bron'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'typering' => 'setTypering',
        'herstel_type' => 'setHerstelType',
        'droogstand_risico' => 'setDroogstandRisico',
        'optrekkend_vocht_risico' => 'setOptrekkendVochtRisico',
        'bio_infectie_risico' => 'setBioInfectieRisico',
        'herstelkosten' => 'setHerstelkosten',
        'bron' => 'setBron'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'typering' => 'getTypering',
        'herstel_type' => 'getHerstelType',
        'droogstand_risico' => 'getDroogstandRisico',
        'optrekkend_vocht_risico' => 'getOptrekkendVochtRisico',
        'bio_infectie_risico' => 'getBioInfectieRisico',
        'herstelkosten' => 'getHerstelkosten',
        'bron' => 'getBron'
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
        $this->container['typering'] = $data['typering'] ?? null;
        $this->container['herstel_type'] = $data['herstel_type'] ?? null;
        $this->container['droogstand_risico'] = $data['droogstand_risico'] ?? null;
        $this->container['optrekkend_vocht_risico'] = $data['optrekkend_vocht_risico'] ?? null;
        $this->container['bio_infectie_risico'] = $data['bio_infectie_risico'] ?? null;
        $this->container['herstelkosten'] = $data['herstelkosten'] ?? null;
        $this->container['bron'] = $data['bron'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets typering
     *
     * @return FunderingTypering|null
     */
    public function getTypering()
    {
        return $this->container['typering'];
    }

    /**
     * Sets typering
     *
     * @param FunderingTypering|null $typering Informatie over het type fundering.
     *
     * @return self
     */
    public function setTypering($typering)
    {
        $this->container['typering'] = $typering;

        return $this;
    }

    /**
     * Gets herstel_type
     *
     * @return FunderingHerstelType|null
     */
    public function getHerstelType()
    {
        return $this->container['herstel_type'];
    }

    /**
     * Sets herstel_type
     *
     * @param FunderingHerstelType|null $herstel_type Het herstel-type van de fundering.
     *
     * @return self
     */
    public function setHerstelType($herstel_type)
    {
        $this->container['herstel_type'] = $herstel_type;

        return $this;
    }

    /**
     * Gets droogstand_risico
     *
     * @return FunderingRisico|null
     */
    public function getDroogstandRisico()
    {
        return $this->container['droogstand_risico'];
    }

    /**
     * Sets droogstand_risico
     *
     * @param FunderingRisico|null $droogstand_risico Risico-informatie over droogstand.
     *
     * @return self
     */
    public function setDroogstandRisico($droogstand_risico)
    {
        $this->container['droogstand_risico'] = $droogstand_risico;

        return $this;
    }

    /**
     * Gets optrekkend_vocht_risico
     *
     * @return FunderingRisico|null
     */
    public function getOptrekkendVochtRisico()
    {
        return $this->container['optrekkend_vocht_risico'];
    }

    /**
     * Sets optrekkend_vocht_risico
     *
     * @param FunderingRisico|null $optrekkend_vocht_risico Risico-informatie over optrekkend vocht.
     *
     * @return self
     */
    public function setOptrekkendVochtRisico($optrekkend_vocht_risico)
    {
        $this->container['optrekkend_vocht_risico'] = $optrekkend_vocht_risico;

        return $this;
    }

    /**
     * Gets bio_infectie_risico
     *
     * @return FunderingRisico|null
     */
    public function getBioInfectieRisico()
    {
        return $this->container['bio_infectie_risico'];
    }

    /**
     * Sets bio_infectie_risico
     *
     * @param FunderingRisico|null $bio_infectie_risico Risico-informatie over bacteriële infectie.
     *
     * @return self
     */
    public function setBioInfectieRisico($bio_infectie_risico)
    {
        $this->container['bio_infectie_risico'] = $bio_infectie_risico;

        return $this;
    }

    /**
     * Gets herstelkosten
     *
     * @return double|null
     */
    public function getHerstelkosten()
    {
        return $this->container['herstelkosten'];
    }

    /**
     * Sets herstelkosten
     *
     * @param double|null $herstelkosten Indicatieve herstelkosten van de fundering.
     *
     * @return self
     */
    public function setHerstelkosten($herstelkosten)
    {
        $this->container['herstelkosten'] = $herstelkosten;

        return $this;
    }

    /**
     * Gets bron
     *
     * @return FunderingDataBron|null
     */
    public function getBron()
    {
        return $this->container['bron'];
    }

    /**
     * Sets bron
     *
     * @param FunderingDataBron|null $bron De bron van de data.Bron waar de funderingsinformatie opgehaald is. | Waarde | Omschrijving | | --- | --- | | `calcasa` | Calcasa data. | | `fundermaps` | Fundermaps data. |
     *
     * @return self
     */
    public function setBron($bron)
    {
        $this->container['bron'] = $bron;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


