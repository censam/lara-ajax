<?php

namespace Censam\LaraAjax\Bootstrap\Builders;

use Censam\LaraAjax\Modal\Modal;
use Censam\LaraAjax\Modal\ModalInterface;

/**
 * class BootstrapDeleteConfirmationMessage
 *
 * @package laraAjax/Bootstrap/Builders
 * @author Sampath Gunasekara <wgsampath@gmail.com>
 */
class BootstrapDeleteConfirmationMessage implements ModalInterface
{
    /**
     * modal instance
     *
     * @var $Modal
     */
    public $Modal;

    /**
     * create new BootstrapDeleteConfitmationMessage instance
     */
    public function __construct()
    {
        $this->Modal = new Modal();
    }

    /**
     * Build modal head
     *
     * @param $title String
     */
    public function buildHead($title)
    {
        $this->Modal->modalHead = view('LaraAjax::bootstrap.get.head', compact('title'))->render();
    }

    /**
     * Build modal body
     *
     * @param $input Array
     */
    public function buildBody($a, $b, $c, $input)
    {
        $this->Modal->modalBody .= '<div class="modal-body">' . $input . '</div>';
    }

    /**
     * Build modal footer
     *
     * @param $link String
     * @param $action String
     */
    public function buildFooter($link, $action)
    {
        $this->Modal->modalFooter = view('LaraAjax::bootstrap.get.footer', compact('link', 'action'))->render();

    }

    /**
     * Get Modal instance
     *
     * @return Modal
     */
    public function getResult()
    {
        return $this->Modal;
    }

}
