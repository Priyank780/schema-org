<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;

/**
 * UnitText class.
 * 
 * @method UnitText setValue($value)
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Property\UnitTextProperty instead.
 */
class UnitText extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/unitText';
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof DataType\TextType;
	}
}