<?php

namespace Censam\LaraAjax\Materialize\Builders;

use Censam\LaraAjax\Modal\Modal;
use Censam\LaraAjax\Modal\ModalInterface;

/**
 * class MaterializeDeleteConfirmationMessage
 *
 * @package laraAjax/Materialize/Builders
 * @author Sampath Gunasekara <wgsampath@gmail.com>
 */
class MaterializeDeleteConfirmationMessage implements ModalInterface
{
    /**
     * Modal Instance
     *
     * @var $Modal
     */
    public $Modal;

    /**
     * Create new MaterializeDeleteConfirmationMessage
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
        $this->Modal->modalHead = view('LaraAjax::materialize.get.head', compact('title'))->render();
    }

    /**
     * Build modal body
     *
     * @param $input Array
     */
    public function buildBody($a, $b, $c, $input)
    {
        $this->Modal->modalBody .= $input;
    }

    /**
     * Build modal footer
     *
     * @param $link String
     * @param $action String
     */public function buildfooter($link, $action)
    {
        $this->Modal->modalFooter = view('LaraAjax::materialize.get.footer', compact('link', 'action'))->render();
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
