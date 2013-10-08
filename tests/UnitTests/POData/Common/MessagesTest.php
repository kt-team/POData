<?php


namespace UnitTests\POData\Common;


use POData\Common\Messages;
use UnitTests\POData\BaseUnitTestCase;

class MessagesTest extends BaseUnitTestCase {

	public function testVerifyMessageList()
	{
		//This test is here to fail if someone adds a message but not a test
		$actual = get_class_methods('POData\Common\Messages');

		$expected = array(
			'expressionLexerUnterminatedStringLiteral',
			'expressionLexerDigitExpected',
			'expressionLexerSyntaxError',
			'expressionLexerInvalidCharacter',
			'expressionParserInCompatibleTypes',
			'expressionParserOperatorNotSupportNull',
			'expressionParserOperatorNotSupportGuid',
			'expressionParserOperatorNotSupportBinary',
			'expressionParserUnrecognizedLiteral',
			'expressionParserUnknownFunction',
			'expressionParser2BooleanRequired',
			'expressionParser2UnexpectedExpression',
			'expressionParser2NonPrimitivePropertyNotAllowed',
			'expressionLexerNoApplicableFunctionsFound',
			'expressionLexerNoPropertyInType',
			'resourceAssociationSetPropertyMustBeNullOrInstanceofResourceProperty',
			'resourceAssociationSetEndPropertyMustBeNavigationProperty',
			'resourceAssociationSetEndResourceTypeMustBeAssignableToResourceSet',
			'resourceAssociationSetResourcePropertyCannotBeBothNull',
			'resourceAssociationSetSelfReferencingAssociationCannotBeBiDirectional',
			'resourceAssociationTypeEndPropertyMustBeNullOrInstanceofResourceProperty',
			'resourceAssociationTypeEndBothPropertyCannotBeNull',
			'expressionParserEntityCollectionNotAllowedInFilter',
			'commonArgumentShouldBeInteger',
			'commonArgumentShouldBeNonNegative',
			'commonNotValidPrimitiveEDMType',
			'configurationMaxResultAndPageSizeMutuallyExclusive',
			'configurationResourceSetNameNotFound',
			'configurationRightsAreNotInRange',
			'configurationCountNotAccepted',
			'resourceTypeNoBaseTypeForPrimitive',
			'resourceTypeNoAbstractForPrimitive',
			'resourceTypeTypeShouldImplementIType',
			'resourceTypeTypeShouldReflectionClass',
			'resourceTypeMissingKeyPropertiesForEntity',
			'resourceTypeNoAddPropertyForPrimitive',
			'resourceTypeKeyPropertiesOnlyOnEntityTypes',
			'resourceTypeETagPropertiesOnlyOnEntityTypes',
			'resourceTypePropertyWithSameNameAlreadyExists',
			'resourceTypeNoKeysInDerivedTypes',
			'resourceTypeHasStreamAttributeOnlyAppliesToEntityType',
			'resourceTypeNamedStreamsOnlyApplyToEntityType',
			'resourceTypeNamedStreamWithSameNameAlreadyExists',
			'resourcePropertyInvalidKindParameter',
			'resourcePropertyPropertyKindAndResourceTypeKindMismatch',
			'resourceSetContainerMustBeAssociatedWithEntityType',
			'providersWrapperExpressionProviderMustNotBeNullOrEmpty',
			'providersWrapperInvalidExpressionProviderInstance',
			'providersWrapperContainerNameMustNotBeNullOrEmpty',
			'providersWrapperContainerNamespaceMustNotBeNullOrEmpty',
			'providersWrapperEntitySetNameShouldBeUnique',
			'providersWrapperEntityTypeNameShouldBeUnique',
			'providersWrapperIDSMPGetResourceSetReturnsInvalidResourceSet',
			'queryProviderReturnsNonQueryResult',
            'queryProviderResultCountMissing',
            'queryProviderResultsMissing',
			'providersWrapperIDSQPMethodReturnsUnExpectedType',
			'providersWrapperIDSQPMethodReturnsInstanceWithNullKeyProperties',
			'providersWrapperIDSQPMethodReturnsInstanceWithNonMatchingKeys',
			'navigationInvalidResourceType',
			'keyDescriptorKeyCountNotMatching',
			'keyDescriptorMissingKeys',
			'keyDescriptorInCompatibleKeyType',
			'keyDescriptorInCompatibleKeyTypeAtPosition',
			'keyDescriptorValidateNotCalled',
			'syntaxError',
			'urlMalformedUrl',
			'segmentParserKeysMustBeNamed',
			'segmentParserMustBeLeafSegment',
			'segmentParserNoSegmentAllowedAfterPostLinkSegment',
			'segmentParserOnlyValueSegmentAllowedAfterPrimitivePropertySegment',
			'segmentParserCannotQueryCollection',
			'segmentParserCountCannotFollowSingleton',
			'segmentParserLinkSegmentMustBeFollowedByEntitySegment',
			'segmentParserMissingSegmentAfterLink',
			'segmentParserSegmentNotAllowedOnRoot',
			'segmentParserInconsistentTargetKindState',
			'segmentParserUnExpectedPropertyKind',
			'segmentParserCountCannotBeApplied',
			'uriProcessorResourceNotFound',
			'uriProcessorForbidden',
			'metadataAssociationTypeSetBidirectionalAssociationMustReturnSameResourceAssociationSetFromBothEnd',
			'metadataAssociationTypeSetMultipleAssociationSetsForTheSameAssociationTypeMustNotReferToSameEndSets',
			'metadataAssociationTypeSetInvalidGetDerivedTypesReturnType',
			'metadataResourceTypeSetNamedStreamsOnDerivedEntityTypesNotSupported',
			'metadataResourceTypeSetBagOfComplexTypeWithDerivedTypes',
			'metadataWriterExpectingEntityOrComplexResourceType',
			'metadataWriterNoResourceAssociationSetForNavigationProperty',
			'expandedProjectionNodeArgumentTypeShouldBeProjection',
			'expandProjectionParserPropertyNotFound',
			'expandProjectionParserExpandCanOnlyAppliedToEntity',
			'expandProjectionParserPrimitivePropertyUsedAsNavigationProperty',
			'expandProjectionParserComplexPropertyAsInnerSelectSegment',
			'expandProjectionParserBagPropertyAsInnerSelectSegment',
			'expandProjectionParserUnexpectedPropertyType',
			'expandProjectionParserPropertyWithoutMatchingExpand',
			'orderByInfoPathSegmentsArgumentShouldBeNonEmptyArray',
			'orderByInfoNaviUsedArgumentShouldBeNullOrNonEmptyArray',
			'orderByPathSegmentOrderBySubPathSegmentArgumentShouldBeNonEmptyArray',
			'orderByParserPropertyNotFound',
			'orderByParserBagPropertyNotAllowed',
			'orderByParserPrimitiveAsIntermediateSegment',
			'orderByParserSortByBinaryPropertyNotAllowed',
			'orderByParserResourceSetReferenceNotAllowed',
			'orderByParserSortByNavigationPropertyIsNotAllowed',
			'orderByParserSortByComplexPropertyIsNotAllowed',
			'orderByParserUnExpectedState',
			'orderByParserUnexpectedPropertyType',
			'orderByParserFailedToCreateDummyObject',
			'orderByParserFailedToAccessOrInitializeProperty',
			'failedToAccessProperty',
			'orderByLeafNodeArgumentShouldBeNonEmptyArray',
			'badRequestInvalidPropertyNameSpecified',
			'anonymousFunctionParameterShouldStartWithDollarSymbol',
			'skipTokenParserSyntaxError',
			'skipTokenParserUnexpectedTypeOfOrderByInfoArg',
			'skipTokenParserSkipTokenNotMatchingOrdering',
			'skipTokenParserNullNotAllowedForKeys',
			'skipTokenParserInCompatibleTypeAtPosition',
			'skipTokenInfoBothOrderByPathAndOrderByValuesShouldBeSetOrNotSet',
			'internalSkipTokenInfoFailedToAccessOrInitializeProperty',
			'internalSkipTokenInfoBinarySearchRequireArray',
			'requestVersionTooLow',
			'requestVersionIsBiggerThanProtocolVersion',
			'requestDescriptionInvalidVersionHeader',
			'requestDescriptionUnSupportedVersion',
			'uriProcessorRequestUriDoesNotHaveTheRightBaseUri',
			'queryProcessorInvalidValueForFormat',
			'queryProcessorNoQueryOptionsApplicable',
			'queryProcessorQueryFilterOptionNotApplicable',
			'queryProcessorQuerySetOptionsNotApplicable',
			'queryProcessorSkipTokenNotAllowed',
			'queryProcessorQueryExpandOptionNotApplicable',
			'queryProcessorInlineCountWithValueCount',
			'queryProcessorInvalidInlineCountOptionError',
			'queryProcessorIncorrectArgumentFormat',
			'queryProcessorSkipTokenCannotBeAppliedForNonPagedResourceSet',
			'queryProcessorSelectOrExpandOptionNotApplicable',
			'configurationProjectionsNotAccepted',
			'providersWrapperNull',
			'invalidMetadataInstance',
			'invalidQueryInstance',
			'streamProviderWrapperGetStreamETagReturnedInvalidETagFormat',
			'streamProviderWrapperGetStreamContentTypeReturnsEmptyOrNull',
			'streamProviderWrapperInvalidStreamFromGetReadStream',
			'streamProviderWrapperGetReadStreamUriMustReturnAbsoluteUriOrNull',
			'streamProviderWrapperMustImplementIStreamProviderToSupportStreaming',
			'streamProviderWrapperMaxProtocolVersionMustBeV3OrAboveToSupportNamedStreams',
			'streamProviderWrapperMustImplementStreamProvider2ToSupportNamedStreams',
			'streamProviderWrapperMustNotSetContentTypeAndEtag',
			'streamProviderWrapperInvalidStreamInstance',
			'streamProviderWrapperInvalidStream2Instance',
			'badProviderInconsistentEntityOrComplexTypeUsage',
			'badQueryNullKeysAreNotSupported',
			'objectModelSerializerFailedToAccessProperty',
			'objectModelSerializerLoopsNotAllowedInComplexTypes',
			'unsupportedMediaType',
			'httpProcessUtilityMediaTypeRequiresSemicolonBeforeParameter',
			'httpProcessUtilityMediaTypeUnspecified',
			'httpProcessUtilityMediaTypeRequiresSlash',
			'httpProcessUtilityMediaTypeRequiresSubType',
			'httpProcessUtilityMediaTypeMissingValue',
			'httpProcessUtilityEscapeCharWithoutQuotes',
			'httpProcessUtilityEscapeCharAtEnd',
			'httpProcessUtilityClosingQuoteNotFound',
			'httpProcessUtilityMalformedHeaderValue',
			'noETagPropertiesForType',
			'eTagValueDoesNotMatch',
			'eTagCannotBeSpecified',
			'bothIfMatchAndIfNoneMatchHeaderSpecified',
			'eTagNotAllowedForNonExistingResource',
			'onlyReadSupport',
			'badRequestInvalidUriForMediaResource',
			'hostNonODataOptionBeginsWithSystemCharacter',
			'hostODataQueryOptionFoundWithoutValue',
			'hostODataQueryOptionCannotBeSpecifiedMoreThanOnce',
			'hostMalFormedBaseUriInConfig',
			'hostRequestUriIsNotBasedOnRelativeUriInConfig',
			'badFormatForResource',
		);

		$this->assertEquals($expected, $actual, "You probably added a message without a corresponding test!");

	}


	/*
	public function testBadFormatForResource()
	{
		$this->assertEquals("The requested format of Atom is not supported for the identified resource", Messages::badFormatForResource(ResponseFormat::ATOM()));
	}
	*/
}