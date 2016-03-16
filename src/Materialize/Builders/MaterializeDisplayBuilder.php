<?php

namespace Censam\LaraAjax\Materialize\Builders;

use Censam\LaraAjax\Modal\Modal;
use Censam\LaraAjax\Modal\ModalInterface;

/**
 * class MAterializeDisplayBuilder
 *
 * @package laraAjax/Materialize/Builders
 * @author Sampath Gunasekara <wgsampath@gmail.com>
 */
class MaterializeDisplayBuilder implements ModalInterface
{
    /**
     * Modal Instance
     *
     * @var $Modal
     */
    public $Modal;

    /**
     * Create new MaterializeDisplayBuilder instance
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
        $this->Modal->modalHead = '';
    }

    /**
     * Build modal body
     *
     * @param $input Array
     */
    public function buildBody($a, $b, $c, $input)
    {
        $this->Modal->modalBody .= view('LaraAjax::materialize.display.body', compact('input'))->render();
    }

    /**
     * Build modal footer
     *
     * @param $link String
     * @param $action String
     */
    public function buildFooter($link, $action)
    {
        $this->Modal->modalFooter = '';
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
