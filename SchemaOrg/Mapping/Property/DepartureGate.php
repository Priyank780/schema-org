<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;

/**
 * DepartureGate class.
 * 
 * @method DepartureGate setValue($value)
 */
class DepartureGate extends AbstractProperty {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/departureGate';
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