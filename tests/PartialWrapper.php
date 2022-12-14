<?php
/**
 * @copyright Copyright (c) 2020 Raman Deep Bajwa <dbajwa763@gmail.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace Tecnovix\Streams\Tests;

class PartialWrapper extends \Tecnovix\Streams\NullWrapper {
	public static function wrap($source) {
		return self::wrapSource($source);
	}

	public function stream_read($count) {
		$count = min($count, 2); // return as most 2 bytes
		return parent::stream_read($count);
	}

	public function stream_write($data) {
		$data = substr($data, 0, 2); //write as most 2 bytes
		return parent::stream_write($data);
	}
}
