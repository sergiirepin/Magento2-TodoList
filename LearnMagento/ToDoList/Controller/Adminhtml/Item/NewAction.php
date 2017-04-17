<?php
namespace LearnMagento\ToDoList\Controller\Adminhtml\Item;

class NewAction extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'LearnMagento_ToDoList::todo_list';       
    protected $resultForwardFactory;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory
    ) {
        $this->resultForwardFactory = $resultForwardFactory;
        return parent::__construct($context);
    }
    
    public function execute()
    {
        return $this->resultForwardFactory->create()->forward('edit');
    }    
}
