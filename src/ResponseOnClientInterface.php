<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 04.10.2016
 * Time: 13:44
 */
namespace Ceive\Net\HttpFoundation {

	/**
	 * Interface ResponseOnClientInterface
	 * @package Ceive\Net\HttpFoundation
	 */
	interface ResponseOnClientInterface{

		/**
		 * @param $message
		 * @return mixed
		 */
		public function setMessage($message);

		/**
		 * @return string
		 */
		public function getMessage();

	}
}

