<?php

namespace Kieran\Component\MyQuiz\Administrator\View\AdminQuizView;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Factory;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_myQuiz
 */

class HtmlView extends BaseHtmlView {
    

    function display($tpl = null) {

        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');

        $this->search = Factory::getApplication()->input->post->getVar('search');
        
        parent::display($tpl);
    }

}