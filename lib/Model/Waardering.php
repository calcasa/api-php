<?php
/**
 * Waardering
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Copyright 2023 Calcasa B.V.
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
 * The version of the OpenAPI document: 1.3.1
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
 * Waardering Class Doc Comment
 *
 * @category Class
 * @package  Calcasa\Api
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Waardering implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Waardering';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'aangemaakt' => '\DateTime',
        'status' => '\Calcasa\Api\Model\WaarderingStatus',
        'origineleInput' => '\Calcasa\Api\Model\WaarderingInputParameters',
        'adres' => '\Calcasa\Api\Model\Adres',
        'model' => '\Calcasa\Api\Model\Modeldata',
        'taxatie' => '\Calcasa\Api\Model\Taxatiedata',
        'object' => '\Calcasa\Api\Model\Objectdata',
        'cbsIndeling' => '\Calcasa\Api\Model\CbsIndeling',
        'fotos' => '\Calcasa\Api\Model\Foto[]',
        'referenties' => '\Calcasa\Api\Model\Referentieobject[]',
        'vorigeVerkopen' => '\Calcasa\Api\Model\VorigeVerkoop[]',
        'rapport' => '\Calcasa\Api\Model\Rapport',
        'factuur' => '\Calcasa\Api\Model\Factuur'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'aangemaakt' => 'date-time',
        'status' => null,
        'origineleInput' => null,
        'adres' => null,
        'model' => null,
        'taxatie' => null,
        'object' => null,
        'cbsIndeling' => null,
        'fotos' => null,
        'referenties' => null,
        'vorigeVerkopen' => null,
        'rapport' => null,
        'factuur' => null
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
        'id' => 'id',
        'aangemaakt' => 'aangemaakt',
        'status' => 'status',
        'origineleInput' => 'origineleInput',
        'adres' => 'adres',
        'model' => 'model',
        'taxatie' => 'taxatie',
        'object' => 'object',
        'cbsIndeling' => 'cbsIndeling',
        'fotos' => 'fotos',
        'referenties' => 'referenties',
        'vorigeVerkopen' => 'vorigeVerkopen',
        'rapport' => 'rapport',
        'factuur' => 'factuur'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'aangemaakt' => 'setAangemaakt',
        'status' => 'setStatus',
        'origineleInput' => 'setOrigineleInput',
        'adres' => 'setAdres',
        'model' => 'setModel',
        'taxatie' => 'setTaxatie',
        'object' => 'setObject',
        'cbsIndeling' => 'setCbsIndeling',
        'fotos' => 'setFotos',
        'referenties' => 'setReferenties',
        'vorigeVerkopen' => 'setVorigeVerkopen',
        'rapport' => 'setRapport',
        'factuur' => 'setFactuur'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'aangemaakt' => 'getAangemaakt',
        'status' => 'getStatus',
        'origineleInput' => 'getOrigineleInput',
        'adres' => 'getAdres',
        'model' => 'getModel',
        'taxatie' => 'getTaxatie',
        'object' => 'getObject',
        'cbsIndeling' => 'getCbsIndeling',
        'fotos' => 'getFotos',
        'referenties' => 'getReferenties',
        'vorigeVerkopen' => 'getVorigeVerkopen',
        'rapport' => 'getRapport',
        'factuur' => 'getFactuur'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['aangemaakt'] = $data['aangemaakt'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['origineleInput'] = $data['origineleInput'] ?? null;
        $this->container['adres'] = $data['adres'] ?? null;
        $this->container['model'] = $data['model'] ?? null;
        $this->container['taxatie'] = $data['taxatie'] ?? null;
        $this->container['object'] = $data['object'] ?? null;
        $this->container['cbsIndeling'] = $data['cbsIndeling'] ?? null;
        $this->container['fotos'] = $data['fotos'] ?? null;
        $this->container['referenties'] = $data['referenties'] ?? null;
        $this->container['vorigeVerkopen'] = $data['vorigeVerkopen'] ?? null;
        $this->container['rapport'] = $data['rapport'] ?? null;
        $this->container['factuur'] = $data['factuur'] ?? null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Id van de waardering of tracking Id.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param \DateTime|null $aangemaakt Het tijdsstempel van wanneer de waardering aangemaakt is.
     *
     * @return self
     */
    public function setAangemaakt($aangemaakt)
    {
        $this->container['aangemaakt'] = $aangemaakt;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Calcasa\Api\Model\WaarderingStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Calcasa\Api\Model\WaarderingStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets origineleInput
     *
     * @return \Calcasa\Api\Model\WaarderingInputParameters|null
     */
    public function getOrigineleInput()
    {
        return $this->container['origineleInput'];
    }

    /**
     * Sets origineleInput
     *
     * @param \Calcasa\Api\Model\WaarderingInputParameters|null $origineleInput origineleInput
     *
     * @return self
     */
    public function setOrigineleInput($origineleInput)
    {
        $this->container['origineleInput'] = $origineleInput;

        return $this;
    }

    /**
     * Gets adres
     *
     * @return \Calcasa\Api\Model\Adres|null
     */
    public function getAdres()
    {
        return $this->container['adres'];
    }

    /**
     * Sets adres
     *
     * @param \Calcasa\Api\Model\Adres|null $adres adres
     *
     * @return self
     */
    public function setAdres($adres)
    {
        $this->container['adres'] = $adres;

        return $this;
    }

    /**
     * Gets model
     *
     * @return \Calcasa\Api\Model\Modeldata|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \Calcasa\Api\Model\Modeldata|null $model model
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets taxatie
     *
     * @return \Calcasa\Api\Model\Taxatiedata|null
     */
    public function getTaxatie()
    {
        return $this->container['taxatie'];
    }

    /**
     * Sets taxatie
     *
     * @param \Calcasa\Api\Model\Taxatiedata|null $taxatie taxatie
     *
     * @return self
     */
    public function setTaxatie($taxatie)
    {
        $this->container['taxatie'] = $taxatie;

        return $this;
    }

    /**
     * Gets object
     *
     * @return \Calcasa\Api\Model\Objectdata|null
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param \Calcasa\Api\Model\Objectdata|null $object object
     *
     * @return self
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets cbsIndeling
     *
     * @return \Calcasa\Api\Model\CbsIndeling|null
     */
    public function getCbsIndeling()
    {
        return $this->container['cbsIndeling'];
    }

    /**
     * Sets cbsIndeling
     *
     * @param \Calcasa\Api\Model\CbsIndeling|null $cbsIndeling cbsIndeling
     *
     * @return self
     */
    public function setCbsIndeling($cbsIndeling)
    {
        $this->container['cbsIndeling'] = $cbsIndeling;

        return $this;
    }

    /**
     * Gets fotos
     *
     * @return \Calcasa\Api\Model\Foto[]|null
     */
    public function getFotos()
    {
        return $this->container['fotos'];
    }

    /**
     * Sets fotos
     *
     * @param \Calcasa\Api\Model\Foto[]|null $fotos fotos
     *
     * @return self
     */
    public function setFotos($fotos)
    {
        $this->container['fotos'] = $fotos;

        return $this;
    }

    /**
     * Gets referenties
     *
     * @return \Calcasa\Api\Model\Referentieobject[]|null
     */
    public function getReferenties()
    {
        return $this->container['referenties'];
    }

    /**
     * Sets referenties
     *
     * @param \Calcasa\Api\Model\Referentieobject[]|null $referenties referenties
     *
     * @return self
     */
    public function setReferenties($referenties)
    {
        $this->container['referenties'] = $referenties;

        return $this;
    }

    /**
     * Gets vorigeVerkopen
     *
     * @return \Calcasa\Api\Model\VorigeVerkoop[]|null
     */
    public function getVorigeVerkopen()
    {
        return $this->container['vorigeVerkopen'];
    }

    /**
     * Sets vorigeVerkopen
     *
     * @param \Calcasa\Api\Model\VorigeVerkoop[]|null $vorigeVerkopen vorigeVerkopen
     *
     * @return self
     */
    public function setVorigeVerkopen($vorigeVerkopen)
    {
        $this->container['vorigeVerkopen'] = $vorigeVerkopen;

        return $this;
    }

    /**
     * Gets rapport
     *
     * @return \Calcasa\Api\Model\Rapport|null
     */
    public function getRapport()
    {
        return $this->container['rapport'];
    }

    /**
     * Sets rapport
     *
     * @param \Calcasa\Api\Model\Rapport|null $rapport rapport
     *
     * @return self
     */
    public function setRapport($rapport)
    {
        $this->container['rapport'] = $rapport;

        return $this;
    }

    /**
     * Gets factuur
     *
     * @return \Calcasa\Api\Model\Factuur|null
     */
    public function getFactuur()
    {
        return $this->container['factuur'];
    }

    /**
     * Sets factuur
     *
     * @param \Calcasa\Api\Model\Factuur|null $factuur factuur
     *
     * @return self
     */
    public function setFactuur($factuur)
    {
        $this->container['factuur'] = $factuur;

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


