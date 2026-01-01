<?php

namespace Miraheze\RenameWiki\Hooks;

use Miraheze\RenameWiki\RequestManager;

interface RenameWikiJobGetFileHook {

	/**
	 * @param string &$filePath
	 * @param RequestManager $requestManager
	 * @return void
	 */
	public function onRenameWikiJobGetFile(
		string &$filePath,
		RequestManager $requestManager
	): void;
}
