<?php
namespace LearnMagento\ToDoList\Model\ResourceModel;
class TodoItem extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('learnmagento_todolist_todoitem','learnmagento_todolist_todoitem_id');
    }
}
