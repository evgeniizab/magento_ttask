<?php
namespace Ez\Ttask\Block;
class Display extends \Magento\Framework\View\Element\Template
{
	protected $_postFactory;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Ez\Ttask\Model\PostFactory $postFactory,
		\Ez\Ttask\Model\ProjectFactory $projectFactory)
	{
		$this->_postFactory = $postFactory;
		$this->_projectFactory = $projectFactory;
		parent::__construct($context);
	}

	public function sayHello()
	{
		return __('Tasks list');
	}

	public function getPostCollection(){
		$post = $this->_postFactory->create();

		return $post->getCollection();
	}

	public function getTaskCollection(){
		$task = $this->_postFactory->create();
		return $task->getCollection();
	}

	public function getProjectCollection(){
		$project = $this->_projectFactory->create();

		return $project->getCollection();
	}




}
