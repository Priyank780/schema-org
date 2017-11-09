<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * DataFeedElement class.
 * 
 * @method DataFeedElement setValue($value)
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Property\DataFeedElementProperty instead.
 */
class DataFeedElement extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/dataFeedElement';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\DataFeedItem || $value instanceof DataType\TextType || $value instanceof Type\Thing;
	}
}