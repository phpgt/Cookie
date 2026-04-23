<?php
namespace GT\Cookie;

use GT\Cookie\Test\Helper\Override;

function setcookie() {
	Override::call("setcookie", func_get_args());
}
