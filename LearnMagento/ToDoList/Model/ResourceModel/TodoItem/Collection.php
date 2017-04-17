<?php
namespace LearnMagento\ToDoList\Model\ResourceModel\TodoItem;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('LearnMagento\ToDoList\Model\TodoItem','LearnMagento\ToDoList\Model\ResourceModel\TodoItem');
    }
}
