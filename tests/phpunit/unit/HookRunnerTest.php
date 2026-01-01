<?php

namespace Miraheze\RenameWiki\Tests\Unit;

use Generator;
use MediaWiki\Tests\HookContainer\HookRunnerTestBase;
use Miraheze\RenameWiki\Hooks\HookRunner;

/**
 * @covers \Miraheze\RenameWiki\Hooks\HookRunner
 */
class HookRunnerTest extends HookRunnerTestBase {

	/** @inheritDoc */
	public static function provideHookRunners(): Generator {
		yield HookRunner::class => [ HookRunner::class ];
	}
}
