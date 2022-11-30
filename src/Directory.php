<?php
/**
 * Copyright (c) 2014 Raman Deep Bajwa <dbajwa763@gmail.com>
 * This file is licensed under the Licensed under the MIT license:
 * http://opensource.org/licenses/MIT
 */

namespace Tecnovix\Streams;

/**
 * Interface for stream wrappers that implements a directory
 */
interface Directory {
	/**
	 * @param string $path
	 * @param array $options
	 * @return bool
	 */
	public function dir_opendir($path, $options);

	/**
	 * @return string|bool
	 */
	public function dir_readdir();

	/**
	 * @return bool
	 */
	public function dir_closedir();

	/**
	 * @return bool
	 */
	public function dir_rewinddir();
}
