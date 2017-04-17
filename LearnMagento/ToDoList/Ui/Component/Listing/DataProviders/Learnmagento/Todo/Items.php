<?php
namespace LearnMagento\ToDoList\Ui\Component\Listing\DataProviders\Learnmagento\Todo;

class Items extends \Magento\Ui\DataProvider\AbstractDataProvider
{    
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \LearnMagento\ToDoList\Model\ResourceModel\TodoItem\CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
    }
}
