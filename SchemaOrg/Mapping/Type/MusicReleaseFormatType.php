<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MusicReleaseFormatType.
 * 
 * @method MusicReleaseFormatType setAdditionalType(Property\AdditionalType $additionalType)
 * @method MusicReleaseFormatType setAlternateName(Property\AlternateName $alternateName)
 * @method MusicReleaseFormatType setDescription(Property\Description $description)
 * @method MusicReleaseFormatType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MusicReleaseFormatType setImage(Property\Image $image)
 * @method MusicReleaseFormatType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MusicReleaseFormatType setName(Property\Name $name)
 * @method MusicReleaseFormatType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MusicReleaseFormatType setSameAs(Property\SameAs $sameAs)
 * @method MusicReleaseFormatType setUrl(Property\Url $url)
 */
class MusicReleaseFormatType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicReleaseFormatType';
	}
}