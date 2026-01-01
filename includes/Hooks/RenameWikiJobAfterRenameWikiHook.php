<?php

namespace Miraheze\RenameWiki\Hooks;

use Miraheze\RenameWiki\RequestManager;

interface RenameWikiJobAfterRenameWikiHook {

	/**
	 * @param string $filePath
	 * @param RequestManager $requestManager
	 * @return void
	 */
	public function onRenameWikiJobAfterRenameWiki(
		string $filePath,
		RequestManager $requestManager
	): void;
}
