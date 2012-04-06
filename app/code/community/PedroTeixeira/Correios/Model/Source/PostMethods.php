<?php
/**
 * Pedro Teixeira
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the New BSD License.
 * It is also available through the world-wide-web at this URL:
 * http://www.pteixeira.com.br/new-bsd-license/
 *
 * @category   PedroTeixeira
 * @package    PedroTeixeira_Correios
 * @copyright  Copyright (c) 2011 Pedro Teixeira (http://www.pteixeira.com.br)
 * @author     Pedro Teixeira <pedro@pteixeira.com.br>
 * @license    http://www.pteixeira.com.br/new-bsd-license/ New BSD License
 */

class PedroTeixeira_Correios_Model_Source_PostMethods
{

    public function toOptionArray()
    {
        return array(
            array('value'=>40010, 'label'=>Mage::helper('adminhtml')->__('Sedex Sem Contrato (40010)')),
            array('value'=>40096, 'label'=>Mage::helper('adminhtml')->__('Sedex Com Contrato (40096)')),
            array('value'=>81019, 'label'=>Mage::helper('adminhtml')->__('E-Sedex Com Contrato (81019)')),
            array('value'=>41106, 'label'=>Mage::helper('adminhtml')->__('PAC Sem Contrato (41106)')),
            array('value'=>41068, 'label'=>Mage::helper('adminhtml')->__('PAC Com Contrato (41068)')),
            array('value'=>40215, 'label'=>Mage::helper('adminhtml')->__('Sedex 10 (40215)')),
            array('value'=>40290, 'label'=>Mage::helper('adminhtml')->__('Sedex HOJE (40290)')),
            array('value'=>40045, 'label'=>Mage::helper('adminhtml')->__('Sedex a Cobrar (40045)')),
        );
    }

}
