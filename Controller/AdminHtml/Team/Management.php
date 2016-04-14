<?php

namespace Suite900\Menu\Controller\Adminhtml\Team;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Management extends Action
{
	protected $context;
	protected $pageFactory;

	public function __construct(Context $context, PageFactory $pageFactory)
	{
		$this->context = $context;
		$this->pageFactory = $pageFactory;
		
		parent::__construct($context);
	}

	public function execute()
	{

		$resultPage = $this->pageFactory->create();
		$resultPage->setActiveMenu('Suite900_Menu::team_management');
		$resultPage->getConfig()->getTitle()->prepend(__('Management Team'));
		return $resultPage;
	}
}