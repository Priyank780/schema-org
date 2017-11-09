<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TransitMap.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\TransitMapType instead.
 * 
 * @method TransitMap setAdditionalType(Property\AdditionalType $additionalType)
 * @method TransitMap setAlternateName(Property\AlternateName $alternateName)
 * @method TransitMap setDescription(Property\Description $description)
 * @method TransitMap setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TransitMap setIdentifier(Property\Identifier $identifier)
 * @method TransitMap setImage(Property\Image $image)
 * @method TransitMap setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TransitMap setName(Property\Name $name)
 * @method TransitMap setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TransitMap setSameAs(Property\SameAs $sameAs)
 * @method TransitMap setUrl(Property\Url $url)
 */
class TransitMap extends MapCategoryType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TransitMap';
	}
}