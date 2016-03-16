<?php

namespace Censam\LaraAjax\Bootstrap\Builders;

use Censam\LaraAjax\Modal\Modal;
use Censam\LaraAjax\Modal\ModalInterface;

/**
 * class BootstrapDisplayBuilder
 *
 * @package laraAjax/Bootstrap/Builders
 * @author Sampath Gunasekara <wgsampath@gmail.com>
 */
class BootstrapDisplayBuilder implements ModalInterface
{
    /**
     * Modal Instance
     *
     * @var $Modal
     */
    public $Modal;

    /**
     * Create new BootstrapDisplayBuilder instance
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
        $this->Modal->modalHead = view('LaraAjax::bootstrap.get.head', compact('title'));
    }

    /**
     * Build modal body
     *
     * @param $input Array
     */
    public function buildBody($a, $b, $c, $input)
    {
        $this->Modal->modalBody .= view('LaraAjax::bootstrap.display.body', compact('input'))->render();

    }

    /**
     * Build modal footer
     *
     * @param $link String
     * @param $action String
     */
    public function buildFooter($link, $action)
    {
        $this->Modal->modalFooter = '</div></div></div></div>';
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
