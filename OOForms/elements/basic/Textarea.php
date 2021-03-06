<?php
/**
 * @package		OOForm
 * @copyright	Copyright (C) 2010 OOForm. All rights reserved.
 * @author		Daniel Zozin
 * @license		GNU/GPL, see COPYING file
 *
 * This file is part of OOForm.
 * OOForm is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * OOForm is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OOForm.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OOForm\elements\basic;

use OOForm\elements\InputField;
use OOForm\decorator\FormDecorator;

/**
 * Defines a textarea
 * @author Daniel Zozin
 *
 */
class Textarea extends InputField {
	
	private $value;
	
	public function __construct($name,$label) {
		parent::__construct($name,$label);
		$this->tagName = 'textarea';
	}
	
	public function setValue($value) {
		$this->value = $value;
	}
	
	public function getValue() {
		return $this->value;
	}
	
	public function renderTag(FormDecorator $decorator) {
		$this->resetValue();
		return $this->getValue ();
	}
	
	protected function resetValue() {
		if($this->getValue() !== null)
			$this->setValue($this->getLastValue());
	}
}

?>