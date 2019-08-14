<?php
class Sonic_ActualPrice_Model_Resource_Setup extends Mage_Eav_Model_Entity_Setup
{
	/**
     * Add our actual price attributes
     *
     * @return Mage_Eav_Model_Entity_Setup
     */
    public function installActualPriceProductAttributes()
    {
        $attributes = $this->_getActualPriceProductAttributes();
 
        foreach ($attributes as $code => $attr) {
            $this->addAttribute('catalog_product', $code, $attr);
        }
 
        return $this;
    }
	
	public function installActualPriceSaleAttributes()
    {
        $this->addAttribute("order_item", "actual_price", array("type"=>"decimal"));
        return $this;
    }
	
	
	
 
    /**
     * Remove actual price attributes
     *
     * @return Mage_Eav_Model_Entity_Setup
     */
    public function removeActualPriceProductAttributes()
    {
        $attributes = $this->_getActualPriceProductAttributes();
 
        foreach ($attributes as $code => $attr) {
            $this->removeAttribute('catalog_product', $code);
        }
 
        return $this;
    }
 
    /**
     * Returns entities array to be used by
     * Mage_Eav_Model_Entity_Setup::installEntities()
     *
     * @return array ActualPrice entities
     */
    protected function _getActualPriceProductAttributes()
    {
        return array(
            'actual_price' => array(
                'group'             => 'Prices',
                'label'             => 'Actual Price',
                'type'              => 'decimal',
                'input'             => 'text',
                'default'           => '',
                'frontend_class'    => 'validate-number',
                'backend'           => '',
                'frontend'          => '',
                'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
                'visible'           => true,
                'required'          => true,
                'user_defined'      => false,
                'searchable'        => false,
                'filterable'        => false,
                'comparable'        => false,
                'visible_on_front'  => false,
                'visible_in_advanced_search' => false,
                'unique'            => false,
				'sort_order'        => 1
            )
        );
    }
}
	 