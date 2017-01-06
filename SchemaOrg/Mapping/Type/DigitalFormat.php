<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DigitalFormat.
 * 
 * @method DigitalFormat setAdditionalType(Property\AdditionalType $additionalType)
 * @method DigitalFormat setAlternateName(Property\AlternateName $alternateName)
 * @method DigitalFormat setDescription(Property\Description $description)
 * @method DigitalFormat setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DigitalFormat setImage(Property\Image $image)
 * @method DigitalFormat setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DigitalFormat setName(Property\Name $name)
 * @method DigitalFormat setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DigitalFormat setSameAs(Property\SameAs $sameAs)
 * @method DigitalFormat setUrl(Property\Url $url)
 */
class DigitalFormat extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DigitalFormat';
	}
}