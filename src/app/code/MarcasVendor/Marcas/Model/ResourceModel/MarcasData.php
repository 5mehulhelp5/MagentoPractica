<?php
namespace MarcasVendor\Marcas\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class MarcasData extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('marcasdata', 'id');
    }
}