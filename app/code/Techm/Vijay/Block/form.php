<?php 
namespace Techm\Vijay\Block;
 
use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
 
class Form extends Template
{
    

    protected $_catalogSession;
    protected $_customerSession;
    protected $_checkoutSession;
    protected $response;
 

    public function __construct(Context $context, 
        \Magento\Catalog\Model\Session $catalogSession,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Framework\App\Response\Http $response,
        array $data = [])
    {

    	$this->_catalogSession = $catalogSession;
        $this->_checkoutSession = $checkoutSession;
        $this->_customerSession = $customerSession;
        $this->response = $response;
        parent::__construct($context, $data);
    }

    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
        
    public function getCatalogSession() 
    {
        return $this->_catalogSession;
    }
    
    public function getCustomerSession() 
    {
        return $this->_customerSession;
    }
    
    public function getCheckoutSession() 
    {
        return $this->_checkoutSession;
    }    
   
 
    

    public function getFormAction()
    {
        return $this->getUrl('vijay/index/save', ['_secure' => true]);
    }



}