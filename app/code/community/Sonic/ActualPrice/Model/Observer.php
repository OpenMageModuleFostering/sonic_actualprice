<?php
class Sonic_ActualPrice_Model_Observer
{
	public function setActualPrice(Varien_Event_Observer $observer) {
		$item = $observer->getQuoteItem();
		$product = $observer->getProduct();
		$item->setActualPrice($product->getActualPrice());
		return $this;
	}
}
	 