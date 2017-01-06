<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Sunday.
 * 
 * @method Sunday setAdditionalType(Property\AdditionalType $additionalType)
 * @method Sunday setAlternateName(Property\AlternateName $alternateName)
 * @method Sunday setDescription(Property\Description $description)
 * @method Sunday setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Sunday setImage(Property\Image $image)
 * @method Sunday setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Sunday setName(Property\Name $name)
 * @method Sunday setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Sunday setSameAs(Property\SameAs $sameAs)
 * @method Sunday setUrl(Property\Url $url)
 */
class Sunday extends DayOfWeek {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Sunday';
	}
}