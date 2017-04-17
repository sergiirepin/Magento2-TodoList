<?php
namespace LearnMagento\ToDoList\Block;
use Magento\Framework\View\Element\Template;
use \LearnMagento\ToDoList\Model;

class Main extends \Magento\Framework\View\Element\Template
{
    protected $todoFactory;

    protected $itemsCollection;

    public function __construct(Template\Context $context, array $data = [], Model\TodoItemFactory $todoFactory )
    {
        $this->todoFactory = $todoFactory;
        parent::__construct($context, $data);
    }

    public function _prepareLayout()
    {
        $this->itemsCollection = $this->todoFactory->create()->getCollection();
    }

    public function getItems()
    {
        return $this->itemsCollection;
    }
}
