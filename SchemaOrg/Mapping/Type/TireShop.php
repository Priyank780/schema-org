<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TireShop.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\TireShopType instead.
 * 
 * @method TireShop setAdditionalType(Property\AdditionalType $additionalType)
 * @method TireShop setAddress(Property\Address $address)
 * @method TireShop setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method TireShop setAlternateName(Property\AlternateName $alternateName)
 * @method TireShop setAlumni(Property\Alumni $alumni)
 * @method TireShop setAreaServed(Property\AreaServed $areaServed)
 * @method TireShop setAward(Property\Award $award)
 * @method TireShop setBrand(Property\Brand $brand)
 * @method TireShop setContactPoint(Property\ContactPoint $contactPoint)
 * @method TireShop setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method TireShop setDepartment(Property\Department $department)
 * @method TireShop setDescription(Property\Description $description)
 * @method TireShop setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TireShop setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method TireShop setDuns(Property\Duns $duns)
 * @method TireShop setEmail(Property\Email $email)
 * @method TireShop setEmployee(Property\Employee $employee)
 * @method TireShop setEvent(Property\Event $event)
 * @method TireShop setFaxNumber(Property\FaxNumber $faxNumber)
 * @method TireShop setFounder(Property\Founder $founder)
 * @method TireShop setFoundingDate(Property\FoundingDate $foundingDate)
 * @method TireShop setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method TireShop setFunder(Property\Funder $funder)
 * @method TireShop setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method TireShop setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method TireShop setHasPOS(Property\HasPOS $hasPOS)
 * @method TireShop setIdentifier(Property\Identifier $identifier)
 * @method TireShop setImage(Property\Image $image)
 * @method TireShop setIsicV4(Property\IsicV4 $isicV4)
 * @method TireShop setLegalName(Property\LegalName $legalName)
 * @method TireShop setLeiCode(Property\LeiCode $leiCode)
 * @method TireShop setLocation(Property\Location $location)
 * @method TireShop setLogo(Property\Logo $logo)
 * @method TireShop setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TireShop setMakesOffer(Property\MakesOffer $makesOffer)
 * @method TireShop setMember(Property\Member $member)
 * @method TireShop setMemberOf(Property\MemberOf $memberOf)
 * @method TireShop setNaics(Property\Naics $naics)
 * @method TireShop setName(Property\Name $name)
 * @method TireShop setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method TireShop setOpeningHours(Property\OpeningHours $openingHours)
 * @method TireShop setOwns(Property\Owns $owns)
 * @method TireShop setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method TireShop setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method TireShop setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TireShop setPriceRange(Property\PriceRange $priceRange)
 * @method TireShop setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method TireShop setReview(Property\Review $review)
 * @method TireShop setSameAs(Property\SameAs $sameAs)
 * @method TireShop setSeeks(Property\Seeks $seeks)
 * @method TireShop setSponsor(Property\Sponsor $sponsor)
 * @method TireShop setSubOrganization(Property\SubOrganization $subOrganization)
 * @method TireShop setTaxID(Property\TaxID $taxID)
 * @method TireShop setTelephone(Property\Telephone $telephone)
 * @method TireShop setUrl(Property\Url $url)
 * @method TireShop setVatID(Property\VatID $vatID)
 */
class TireShop extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TireShop';
	}
}