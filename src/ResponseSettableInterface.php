<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 02.07.2016
 * Time: 15:59
 */
namespace Ceive\Net\HttpFoundation {
	
	use Ceive\Net\Hypertext\HeaderRegistryWriteInterface;
	
	/**
	 * Interface ResponseSettableInterface
	 * @package Ceive\Net\HttpFoundation
	 */
	interface ResponseSettableInterface extends HeaderRegistryWriteInterface{

		/**
		 * @param RequestInterface $request
		 * @return mixed
		 */
		public function setRequest(RequestInterface $request);

		/**
		 * @param array|string $key
		 * @param $value
		 * @param int $expires
		 * @param string $path
		 * @param null $secure
		 * @param null $httpOnly
		 * @param null $domain
		 * @return mixed
		 */
		public function setCookie($key, $value = null, $expires = null, $path = null, $secure = null, $httpOnly = null, $domain = null);

		/**
		 * @param $content
		 * @return mixed
		 */
		public function setContent($content);

		/**
		 * @param $type
		 * @return mixed
		 */
		public function setContentType($type);

		/**
		 * @param $disposition
		 * @return mixed
		 */
		public function setContentDisposition($disposition);

	}
}

