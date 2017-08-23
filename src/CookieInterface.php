<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 30.06.2016
 * Time: 15:21
 */
namespace Ceive\Net\HttpFoundation {
	
	use Ceive\Net\HttpFoundation\Cookie\ConfigurationInterface;
	use Ceive\Util\Named\NamedInterface;
	use Ceive\Value\IValue;
	use Ceive\Value\IValueSettable;
	
	/**
	 * Interface CookieInterface
	 * @package Ceive\Net\HttpFoundation
	 */
	interface CookieInterface extends ConfigurationInterface, IValue, IValueSettable, NamedInterface{

		/**
		 * @return mixed
		 */
		public function isOverdue();

	}
}

