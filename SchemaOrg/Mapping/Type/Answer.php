<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Answer.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\AnswerType instead.
 * 
 * @method Answer setAccessMode(Property\AccessMode $accessMode)
 * @method Answer setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Answer setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Answer setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Answer setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Answer setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Answer setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Answer setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Answer setAdditionalType(Property\AdditionalType $additionalType)
 * @method Answer setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Answer setAlternateName(Property\AlternateName $alternateName)
 * @method Answer setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Answer setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Answer setAudience(Property\Audience $audience)
 * @method Answer setAudio(Property\Audio $audio)
 * @method Answer setAuthor(Property\Author $author)
 * @method Answer setAward(Property\Award $award)
 * @method Answer setCharacter(Property\Character $character)
 * @method Answer setCitation(Property\Citation $citation)
 * @method Answer setComment(Property\Comment $comment)
 * @method Answer setCommentCount(Property\CommentCount $commentCount)
 * @method Answer setContentLocation(Property\ContentLocation $contentLocation)
 * @method Answer setContentRating(Property\ContentRating $contentRating)
 * @method Answer setContributor(Property\Contributor $contributor)
 * @method Answer setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Answer setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Answer setCreator(Property\Creator $creator)
 * @method Answer setDateCreated(Property\DateCreated $dateCreated)
 * @method Answer setDateModified(Property\DateModified $dateModified)
 * @method Answer setDatePublished(Property\DatePublished $datePublished)
 * @method Answer setDescription(Property\Description $description)
 * @method Answer setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Answer setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Answer setDownvoteCount(Property\DownvoteCount $downvoteCount)
 * @method Answer setEditor(Property\Editor $editor)
 * @method Answer setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Answer setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Answer setEncoding(Property\Encoding $encoding)
 * @method Answer setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Answer setExpires(Property\Expires $expires)
 * @method Answer setFileFormat(Property\FileFormat $fileFormat)
 * @method Answer setFunder(Property\Funder $funder)
 * @method Answer setGenre(Property\Genre $genre)
 * @method Answer setHasPart(Property\HasPart $hasPart)
 * @method Answer setHeadline(Property\Headline $headline)
 * @method Answer setIdentifier(Property\Identifier $identifier)
 * @method Answer setImage(Property\Image $image)
 * @method Answer setInLanguage(Property\InLanguage $inLanguage)
 * @method Answer setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Answer setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Answer setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Answer setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Answer setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Answer setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Answer setKeywords(Property\Keywords $keywords)
 * @method Answer setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Answer setLicense(Property\License $license)
 * @method Answer setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Answer setMainEntity(Property\MainEntity $mainEntity)
 * @method Answer setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Answer setMaterial(Property\Material $material)
 * @method Answer setMentions(Property\Mentions $mentions)
 * @method Answer setName(Property\Name $name)
 * @method Answer setOffers(Property\Offers $offers)
 * @method Answer setParentItem(Property\ParentItem $parentItem)
 * @method Answer setPosition(Property\Position $position)
 * @method Answer setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Answer setProducer(Property\Producer $producer)
 * @method Answer setProvider(Property\Provider $provider)
 * @method Answer setPublication(Property\Publication $publication)
 * @method Answer setPublisher(Property\Publisher $publisher)
 * @method Answer setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Answer setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Answer setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Answer setReview(Property\Review $review)
 * @method Answer setSameAs(Property\SameAs $sameAs)
 * @method Answer setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Answer setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Answer setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Answer setSponsor(Property\Sponsor $sponsor)
 * @method Answer setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Answer setText(Property\Text $text)
 * @method Answer setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Answer setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Answer setTranslator(Property\Translator $translator)
 * @method Answer setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Answer setUpvoteCount(Property\UpvoteCount $upvoteCount)
 * @method Answer setUrl(Property\Url $url)
 * @method Answer setVersion(Property\Version $version)
 * @method Answer setVideo(Property\Video $video)
 * @method Answer setWorkExample(Property\WorkExample $workExample)
 */
class Answer extends Comment {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Answer';
	}
}