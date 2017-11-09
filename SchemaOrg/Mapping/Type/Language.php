<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Language.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LanguageType instead.
 * 
 * @method Language setAdditionalType(Property\AdditionalType $additionalType)
 * @method Language setAlternateName(Property\AlternateName $alternateName)
 * @method Language setDescription(Property\Description $description)
 * @method Language setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Language setIdentifier(Property\Identifier $identifier)
 * @method Language setImage(Property\Image $image)
 * @method Language setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Language setName(Property\Name $name)
 * @method Language setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Language setSameAs(Property\SameAs $sameAs)
 * @method Language setUrl(Property\Url $url)
 */
class Language extends Intangible {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Language';
	}
}