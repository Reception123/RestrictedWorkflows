<?php

namespace Miraheze\RenameWiki;

use MediaWiki\Config\Config;
use MediaWiki\Config\ServiceOptions;
use MediaWiki\Context\RequestContext;
use MediaWiki\MediaWikiServices;
use Miraheze\RenameWiki\Hooks\HookRunner;

// PHPUnit does not understand coverage for this file.
// It is covered though, see ServiceWiringTest.
// @codeCoverageIgnoreStart

return [
	'RenameWikiConfig' => static function ( MediaWikiServices $services ): Config {
		return $services->getConfigFactory()->makeConfig( 'RenameWiki' );
	},
	'RenameWikiHookRunner' => static function ( MediaWikiServices $services ): HookRunner {
		return new HookRunner( $services->getHookContainer() );
	},
	'RenameWikiRequestManager' => static function ( MediaWikiServices $services ): RequestManager {
		return new RequestManager(
			$services->getActorStoreFactory(),
			$services->getConnectionProvider(),
			$services->getExtensionRegistry(),
			$services->getJobQueueGroupFactory(),
			$services->getLinkRenderer(),
			$services->getRepoGroup(),
			RequestContext::getMain(),
			new ServiceOptions(
				RequestManager::CONSTRUCTOR_OPTIONS,
				$services->get( 'RenameWikiConfig' )
			),
			$services->getUserFactory(),
			$services->getUserGroupManagerFactory(),
			$services->has( 'ManageWikiModuleFactory' ) ?
				$services->get( 'ManageWikiModuleFactory' ) : null
		);
	},
];

// @codeCoverageIgnoreEnd
