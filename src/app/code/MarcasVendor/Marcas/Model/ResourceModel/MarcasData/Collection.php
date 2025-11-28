<?php
namespace MarcasVendor\Marcas\Model\ResourceModel\MarcasData;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'marcas_data_collection';
    protected $_eventObject = 'marcas_data_collection';

    protected function _construct()
    {
        $this->_init(
            'MarcasVendor\Marcas\Model\MarcasData',
            'MarcasVendor\Marcas\Model\ResourceModel\MarcasData'
        );
    }
}