<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EntryPoint.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\EntryPointType instead.
 * 
 * @method EntryPoint setAdditionalType(Property\AdditionalType $additionalType)
 * @method EntryPoint setAlternateName(Property\AlternateName $alternateName)
 * @method EntryPoint setDescription(Property\Description $description)
 * @method EntryPoint setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EntryPoint setIdentifier(Property\Identifier $identifier)
 * @method EntryPoint setImage(Property\Image $image)
 * @method EntryPoint setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EntryPoint setName(Property\Name $name)
 * @method EntryPoint setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EntryPoint setSameAs(Property\SameAs $sameAs)
 * @method EntryPoint setUrl(Property\Url $url)
 */
class EntryPoint extends Intangible {

	/**
	 * @var Property\ActionApplication
	 */
	private $actionApplication;

	/**
	 * @var Property\ActionPlatform
	 */
	private $actionPlatform;

	/**
	 * @var Property\ContentType
	 */
	private $contentType;

	/**
	 * @var Property\EncodingType
	 */
	private $encodingType;

	/**
	 * @var Property\HttpMethod
	 */
	private $httpMethod;

	/**
	 * @var Property\UrlTemplate
	 */
	private $urlTemplate;

	/**
	 * Get action application.
	 * 
	 * @return Property\ActionApplication
	 */
	public function getActionApplication() {
		return $this->actionApplication;
	}

	/**
	 * Get action platform.
	 * 
	 * @return Property\ActionPlatform
	 */
	public function getActionPlatform() {
		return $this->actionPlatform;
	}

	/**
	 * Get content type.
	 * 
	 * @return Property\ContentType
	 */
	public function getContentType() {
		return $this->contentType;
	}

	/**
	 * Get encoding type.
	 * 
	 * @return Property\EncodingType
	 */
	public function getEncodingType() {
		return $this->encodingType;
	}

	/**
	 * Get http method.
	 * 
	 * @return Property\HttpMethod
	 */
	public function getHttpMethod() {
		return $this->httpMethod;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EntryPoint';
	}

	/**
	 * Get url template.
	 * 
	 * @return Property\UrlTemplate
	 */
	public function getUrlTemplate() {
		return $this->urlTemplate;
	}

	/**
	 * Set action application.
	 * 
	 * @param Property\ActionApplication $actionApplication
	 * @return EntryPoint
	 */
	public function setActionApplication(Property\ActionApplication $actionApplication) {
		$this->actionApplication = $actionApplication;

		return $this;
	}

	/**
	 * Set action platform.
	 * 
	 * @param Property\ActionPlatform $actionPlatform
	 * @return EntryPoint
	 */
	public function setActionPlatform(Property\ActionPlatform $actionPlatform) {
		$this->actionPlatform = $actionPlatform;

		return $this;
	}

	/**
	 * Set content type.
	 * 
	 * @param Property\ContentType $contentType
	 * @return EntryPoint
	 */
	public function setContentType(Property\ContentType $contentType) {
		$this->contentType = $contentType;

		return $this;
	}

	/**
	 * Set encoding type.
	 * 
	 * @param Property\EncodingType $encodingType
	 * @return EntryPoint
	 */
	public function setEncodingType(Property\EncodingType $encodingType) {
		$this->encodingType = $encodingType;

		return $this;
	}

	/**
	 * Set http method.
	 * 
	 * @param Property\HttpMethod $httpMethod
	 * @return EntryPoint
	 */
	public function setHttpMethod(Property\HttpMethod $httpMethod) {
		$this->httpMethod = $httpMethod;

		return $this;
	}

	/**
	 * Set url template.
	 * 
	 * @param Property\UrlTemplate $urlTemplate
	 * @return EntryPoint
	 */
	public function setUrlTemplate(Property\UrlTemplate $urlTemplate) {
		$this->urlTemplate = $urlTemplate;

		return $this;
	}
}