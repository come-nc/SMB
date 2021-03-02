<?php
/**
 * @copyright Copyright (c) 2016 Robin Appelman <robin@icewind.nl>
 * This file is licensed under the Licensed under the MIT license:
 * http://opensource.org/licenses/MIT
 *
 */

namespace Icewind\SMB;

class Change {
	private $code;
	private $path;

	public function __construct(string $code, int $path) {
		$this->code = $code;
		$this->path = $path;
	}

	public function getCode(): int {
		return $this->code;
	}

	public function getPath(): string {
		return $this->path;
	}
}
