<?php
/**
 * Delete
 *
 * @copyright Copyright © 2020 Ez. All rights reserved.
 * @author    evgenii@zabairachnyi.com
 */
namespace Ez\Ttask\Controller\Adminhtml\Tasks;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Ez\Ttask\Model\TasksFactory;

class Delete extends Action
{
    /** @var tasksFactory $objectFactory */
    protected $objectFactory;

    /**
     * @param Context $context
     * @param TasksFactory $objectFactory
     */
    public function __construct(
    Context $context,
    TasksFactory $objectFactory
    ) {
        $this->objectFactory = $objectFactory;
        parent::__construct($context);
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Ez_Ttask::tasks');
    }

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $id = $this->getRequest()->getParam('entity_id', null);

        try {
            $objectInstance = $this->objectFactory->create()->load($id);
            if ($objectInstance->getId()) {
                $objectInstance->delete();
                $this->messageManager->addSuccessMessage(__('You deleted the record.'));
            } else {
                $this->messageManager->addErrorMessage(__('Record does not exist.'));
            }
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage($exception->getMessage());
        }
        
        return $resultRedirect->setPath('*/*');
    }
}
