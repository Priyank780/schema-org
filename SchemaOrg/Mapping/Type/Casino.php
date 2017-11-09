<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Casino.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CasinoType instead.
 * 
 * @method Casino setAdditionalType(Property\AdditionalType $additionalType)
 * @method Casino setAddress(Property\Address $address)
 * @method Casino setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Casino setAlternateName(Property\AlternateName $alternateName)
 * @method Casino setAlumni(Property\Alumni $alumni)
 * @method Casino setAreaServed(Property\AreaServed $areaServed)
 * @method Casino setAward(Property\Award $award)
 * @method Casino setBrand(Property\Brand $brand)
 * @method Casino setContactPoint(Property\ContactPoint $contactPoint)
 * @method Casino setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Casino setDepartment(Property\Department $department)
 * @method Casino setDescription(Property\Description $description)
 * @method Casino setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Casino setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Casino setDuns(Property\Duns $duns)
 * @method Casino setEmail(Property\Email $email)
 * @method Casino setEmployee(Property\Employee $employee)
 * @method Casino setEvent(Property\Event $event)
 * @method Casino setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Casino setFounder(Property\Founder $founder)
 * @method Casino setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Casino setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Casino setFunder(Property\Funder $funder)
 * @method Casino setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Casino setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Casino setHasPOS(Property\HasPOS $hasPOS)
 * @method Casino setIdentifier(Property\Identifier $identifier)
 * @method Casino setImage(Property\Image $image)
 * @method Casino setIsicV4(Property\IsicV4 $isicV4)
 * @method Casino setLegalName(Property\LegalName $legalName)
 * @method Casino setLeiCode(Property\LeiCode $leiCode)
 * @method Casino setLocation(Property\Location $location)
 * @method Casino setLogo(Property\Logo $logo)
 * @method Casino setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Casino setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Casino setMember(Property\Member $member)
 * @method Casino setMemberOf(Property\MemberOf $memberOf)
 * @method Casino setNaics(Property\Naics $naics)
 * @method Casino setName(Property\Name $name)
 * @method Casino setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Casino setOpeningHours(Property\OpeningHours $openingHours)
 * @method Casino setOwns(Property\Owns $owns)
 * @method Casino setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Casino setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Casino setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Casino setPriceRange(Property\PriceRange $priceRange)
 * @method Casino setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Casino setReview(Property\Review $review)
 * @method Casino setSameAs(Property\SameAs $sameAs)
 * @method Casino setSeeks(Property\Seeks $seeks)
 * @method Casino setSponsor(Property\Sponsor $sponsor)
 * @method Casino setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Casino setTaxID(Property\TaxID $taxID)
 * @method Casino setTelephone(Property\Telephone $telephone)
 * @method Casino setUrl(Property\Url $url)
 * @method Casino setVatID(Property\VatID $vatID)
 */
class Casino extends EntertainmentBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Casino';
	}
}