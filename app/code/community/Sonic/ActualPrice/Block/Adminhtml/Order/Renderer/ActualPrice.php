<?phpclass Sonic_ActualPrice_Block_Adminhtml_Order_Renderer_ActualPrice extends  Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract{	public function render(Varien_Object $row)    {                    		$amount = 0;		$order = Mage::getModel('sales/order')->load($row->getData('entity_id'));		$_items = $order->getItemsCollection();		foreach ($_items as $item) {			//do something			$amount = $amount + ($item->getActualPrice()*$item->getQtyOrdered());		}        unset($order);		$Formatted_Price= Mage::helper('core')->currency($amount, true, false);        return $Formatted_Price;    }}