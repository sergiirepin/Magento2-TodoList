<?php
namespace LearnMagento\ToDoList\Model;
class TodoItem extends \Magento\Framework\Model\AbstractModel implements \LearnMagento\ToDoList\Api\Data\TodoItemInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'learnmagento_todolist_todoitem';

    protected function _construct()
    {
        $this->_init('LearnMagento\ToDoList\Model\ResourceModel\TodoItem');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
