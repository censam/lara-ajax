<?php

namespace Censam\LaraAjax\Bootstrap\Builders;

use Censam\LaraAjax\Modal\Modal;
use Censam\LaraAjax\Modal\ModalInterface;

/**
 * class BootsrtapModalBuilder
 *
 * @package laraAjax/Bootstrap/Builders
 * @author Sampath Gunasekara <wgsampath@gmail.com>
 */
class BootstrapModalBuilder implements ModalInterface
{
    /**
     * Modal Instance
     *
     * @var $Modal
     */
    public $Modal;

    /**
     * Create new BootstrapModalBuilder instance
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
        $this->Modal->modalHead = view('LaraAjax::bootstrap.head', compact('title'))->render();
    }

    /**
     * Build modal body
     *
     * @param $lable String
     * @param $name String
     * @param $value String
     * @param $type String
     */
    public function buildBody($label, $name, $value, $type)
    {
        switch ($type) {
            case 'text':
                $this->Modal->modalBody .= view('LaraAjax::bootstrap.types.text',
                    compact('label', 'name', 'value', 'type'))->render();
                break;

            case 'date':
                $this->Modal->modalBody .=
                view('LaraAjax::bootstrap.types.text', compact('name', 'value', 'label', 'type'))->render();
                break;

            case 'select':
                $this->Modal->modalBody .=
                view('LaraAjax::bootstrap.types.select', compact('value', 'label', 'name'))->render();
                break;

            case 'radio':
                $this->Modal->modalBody .=
                view('LaraAjax::bootstrap.types.radio', compact('name', 'value', 'label'))->render();
                break;

            case 'checkbox':
                $this->Modal->modalBody .=
                view('LaraAjax::bootstrap.types.checkbox', compact('name', 'value', 'label'))->render();
                break;

            default:
                throw new \Exception('Type not found' . $type);
        }
    }

    /**
     * Build modal footer
     *
     * @param $link String
     * @param $action String
     */
    public function buildFooter($link, $action)
    {
        $this->Modal->modalFooter = view('LaraAjax::bootstrap.footer', compact('link', 'action'))->render();
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
