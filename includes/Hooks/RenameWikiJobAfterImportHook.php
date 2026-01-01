<?php

namespace Miraheze\RenameWiki\Hooks;

use Miraheze\RenameWiki\RequestManager;

interface RenameWikiJobAfterImportHook {

	/**
	 * @param string $filePath
	 * @param RequestManager $requestManager
	 * @return void
	 */
	public function onRenameWikiJobAfterImport(
		string $filePath,
		RequestManager $requestManager
	): void;
}
