<?php
/**
 * Copyright (c) 2015 Raman Deep Bajwa <dbajwa763@gmail.com>
 * This file is licensed under the Licensed under the MIT license:
 * http://opensource.org/licenses/MIT
 */

namespace Tecnovix\Streams\Tests;

class DirectoryTestWrapperTest extends IteratorDirectoryTest {

	/**
	 * @param \Iterator | array $source
	 * @return resource
	 */
	protected function wrapSource($source) {
		$dir = \Tecnovix\Streams\IteratorDirectory::wrap($source);
		return DirectoryWrapperNull::wrap($dir);
	}

	public function testManipulateContent() {
		$source = \Tecnovix\Streams\IteratorDirectory::wrap(['asd', 'bar']);
		$wrapped = DirectoryWrapperDummy::wrap($source);
		$result = [];
		while (($file = readdir($wrapped)) !== false) {
			$result[] = $file;
		}
		$this->assertEquals(['asd_', 'bar_'], $result);
	}
}
