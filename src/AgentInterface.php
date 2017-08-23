<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 07.10.2016
 * Time: 12:36
 */
namespace Ceive\Net\HttpFoundation {

	/**
	 * Interface AgentInterface
	 * @package Ceive\Net\HttpFoundation
	 */
	interface AgentInterface{

		/**
		 * @return string
		 */
		public function getName();

		/**
		 * @return string
		 */
		public function getVersion();

		/**
		 * @return string
		 */
		public function getPlatform();

		/**
		 * @return string
		 */
		public function getUserAgent();

		/**
		 * @return string
		 * @example HTTP/1.1
		 */
		public function getProtocol();

		/**
		 * @return string
		 */
		public function getBestLanguage();

		/**
		 * @return array
		 */
		public function getDesiredLanguages();

		/**
		 * @return string
		 */
		public function getBestMediaType();

		/**
		 * @return array
		 */
		public function getDesiredMediaTypes();

		/**
		 * @return string
		 */
		public function getBestCharset();



		/**
		 * @return string
		 */
		public function getIp();

		/**
		 * @return string
		 */
		public function getDomain();

		/**
		 * @return int
		 */
		public function getPort();
	}
}

