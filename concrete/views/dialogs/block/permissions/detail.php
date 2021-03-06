<?php

defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Block\Block;
use Concrete\Core\View\View;

/** @var Block $b */
/** @var int $rcID */

/** @noinspection PhpUnhandledExceptionInspection */
View::element('permission/details/block', ['b' => $b, 'rcID' => $rcID]);
