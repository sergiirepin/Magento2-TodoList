<?php
namespace LearnMagento\ToDoList\Controller\Adminhtml\Item;
class Index extends \Magento\Backend\App\Action
{
    
    const ADMIN_RESOURCE = 'LearnMagento_ToDoList::todo_list';
        
    protected $resultPageFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;        
        return parent::__construct($context);
    }
    
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend((__('Todo Items')));
        $resultPage->setActiveMenu('LearnMagento_ToDoList::todo_list');
        return $resultPage;
    }
}
