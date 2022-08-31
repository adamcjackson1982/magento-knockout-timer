<?php
namespace Adam\Countdown\Block;

use \Magento\Catalog\Block\Product\View;

class Timer extends View
{
	public function getTimerString() {
		return 'This is my timer for this sku';
	}
}
