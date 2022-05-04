<?php

namespace Ebay\Buy\Browse;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public array $types = [
        'search' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\SearchPagedCollection',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'searchByImage' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\SearchPagedCollection',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItem' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\Item',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItemByLegacyId' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\Item',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItems' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\Items',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItemsByItemGroup' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\ItemGroup',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'checkCompatibility' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\CompatibilityResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'addItem' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getShoppingCart' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'removeItem' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateQuantity' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
    ];
}
