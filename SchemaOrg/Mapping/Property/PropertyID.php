<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;

/**
 * PropertyID class.
 * 
 * @method PropertyID setValue($value)
 */
class PropertyID extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/propertyID';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof DataType\TextType || $value instanceof DataType\URLType;
	}
}