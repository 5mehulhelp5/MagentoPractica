<?php
namespace MarcasVendor\Marcas\Model;

use Magento\Framework\Model\AbstractModel;
use MarcasVendor\Marcas\Model\ResourceModel\MarcasData as MarcasDataResource;

class MarcasData extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(MarcasDataResource::class);
    }
}