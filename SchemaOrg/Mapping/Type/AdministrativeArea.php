<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AdministrativeArea.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\AdministrativeAreaType instead.
 * 
 * @method AdministrativeArea setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AdministrativeArea setAdditionalType(Property\AdditionalType $additionalType)
 * @method AdministrativeArea setAddress(Property\Address $address)
 * @method AdministrativeArea setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AdministrativeArea setAlternateName(Property\AlternateName $alternateName)
 * @method AdministrativeArea setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method AdministrativeArea setBranchCode(Property\BranchCode $branchCode)
 * @method AdministrativeArea setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method AdministrativeArea setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method AdministrativeArea setDescription(Property\Description $description)
 * @method AdministrativeArea setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AdministrativeArea setEvent(Property\Event $event)
 * @method AdministrativeArea setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AdministrativeArea setGeo(Property\Geo $geo)
 * @method AdministrativeArea setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AdministrativeArea setHasMap(Property\HasMap $hasMap)
 * @method AdministrativeArea setIdentifier(Property\Identifier $identifier)
 * @method AdministrativeArea setImage(Property\Image $image)
 * @method AdministrativeArea setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method AdministrativeArea setIsicV4(Property\IsicV4 $isicV4)
 * @method AdministrativeArea setLogo(Property\Logo $logo)
 * @method AdministrativeArea setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AdministrativeArea setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method AdministrativeArea setName(Property\Name $name)
 * @method AdministrativeArea setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method AdministrativeArea setPhoto(Property\Photo $photo)
 * @method AdministrativeArea setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AdministrativeArea setPublicAccess(Property\PublicAccess $publicAccess)
 * @method AdministrativeArea setReview(Property\Review $review)
 * @method AdministrativeArea setSameAs(Property\SameAs $sameAs)
 * @method AdministrativeArea setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method AdministrativeArea setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method AdministrativeArea setTelephone(Property\Telephone $telephone)
 * @method AdministrativeArea setUrl(Property\Url $url)
 */
class AdministrativeArea extends Place {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AdministrativeArea';
	}
}