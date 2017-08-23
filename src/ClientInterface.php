<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 02.07.2016
 * Time: 16:53
 */
namespace Ceive\Net\HttpFoundation {

	/**
	 * Interface ClientInterface
	 * @package Ceive\Net\HttpFoundation
	 */
	interface ClientInterface{

		/**
		 * @return string
		 */
		public function getIp();

		/**
		 * @return string
		 */
		public function getDomain();

		/**
		 * @return mixed
		 */
		public function getHost();

		/**
		 * @return int
		 */
		public function getPort();


	}
}

