<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 02.07.2016
 * Time: 16:02
 */
namespace Ceive\Net\HttpFoundation {
	
	use Ceive\User\AccessAuth\Auth;
	use Ceive\Net\Hypertext\HeaderRegistryWriteInterface;
	use Ceive\Util\Contents\ContentsAwareInterface;
	
	/**
	 * Interface RequestWriteInterface
	 * @package Ceive\Net\HttpFoundation
	 */
	interface RequestWriteInterface extends HeaderRegistryWriteInterface{

		/**
		 * @param $method
		 * @return mixed
		 */
		public function setMethod($method);

		/**
		 * @param $name
		 * @param $value
		 * @return mixed
		 */
		public function setCookie($name, $value);

		/**
		 * @param $type
		 * @return mixed
		 */
		public function setContentType($type);

		/**
		 * @param null $content
		 * @return mixed
		 */
		public function setContent($content = null);

		/**
		 * @param $name
		 * @param $value
		 * @return mixed
		 */
		public function setPost($name, $value);

		/**
		 * @param $name
		 * @param $value
		 * @return mixed
		 */
		public function setQuery($name, $value);

		/**
		 * @param bool|true $secure
		 * @return $this
		 */
		public function setSecure($secure = true);

		/**
		 * @param $uri
		 * @return mixed
		 */
		public function setUri($uri);

		/**
		 * @param Auth $auth
		 * @return mixed
		 */
		public function setAuth(Auth $auth);

		/**
		 * @param null $referrer
		 * @return mixed
		 */
		public function setReferrer($referrer = null);

		/**
		 * @param \Ceive\Util\Contents\ContentsAwareInterface $file
		 * @param null $name
		 * @return $this
		 */
		public function setFile(ContentsAwareInterface $file, $name = null);

		/**
		 * @param \Ceive\Util\Contents\ContentsAwareInterface[] $files
		 * @param bool|false $merge
		 * @return $this
		 */
		public function setFiles(array $files, $merge = false);

		/**
		 * @param $requestedWith
		 * @return mixed
		 */
		public function setRequestedWith($requestedWith);

		/**
		 * @param $scheme
		 * @return mixed
		 */
		public function setScheme($scheme = 'http');

	}
}

