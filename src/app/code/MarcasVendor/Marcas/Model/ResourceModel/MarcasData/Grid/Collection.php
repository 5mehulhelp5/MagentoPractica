<?php
namespace MarcasVendor\Marcas\Model\ResourceModel\MarcasData\Grid;

use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;
use Psr\Log\LoggerInterface as Logger;

class Collection extends SearchResult
{
    public function __construct(
        EntityFactory $entityFactory,
        Logger $logger,
        FetchStrategy $fetchStrategy,
        EventManager $eventManager,
        $mainTable = 'marcasdata',
        $resourceModel = 'MarcasVendor\Marcas\Model\ResourceModel\MarcasData'
    ) {
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $mainTable, $resourceModel);
    }

    protected function _initSelect()
    {
        parent::_initSelect();
        
        $this->addFilterToMap('id', 'main_table.id');
        $this->addFilterToMap('nombre', 'main_table.nombre');
        $this->addFilterToMap('status', 'main_table.status');
        $this->addFilterToMap('provincia', 'main_table.provincia');
        $this->addFilterToMap('canton', 'main_table.canton');
        $this->addFilterToMap('distrito', 'main_table.distrito');
        
        return $this;
    }
}