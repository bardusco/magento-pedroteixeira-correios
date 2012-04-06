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

$installer = $this;
$installer->startSetup();
$connection = $installer->getConnection();

$installer->deleteConfigData('carriers/pedroteixeira_correios/urlmethod');

$sql = "select value from ".$installer->getTable('core/config_data')." where path='carriers/pedroteixeira_correios/postmethods'";
$methods = explode(',', $connection->fetchOne($sql));
foreach($methods as $key => $method){
    if($method == '41025'){
        unset($methods[$key]);
    }
}
if(count($methods) <= 0){
    $methods[] = '41106';
}
$installer->setConfigData('carriers/pedroteixeira_correios/postmethods', implode(',', $methods));

$sql = "select value from ".$installer->getTable('core/config_data')." where path='carriers/pedroteixeira_correios/free_method'";
if($connection->fetchOne($sql) == '41025'){
    $installer->setConfigData('carriers/pedroteixeira_correios/free_method', '41106');
}

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$setup->updateAttribute('catalog_product', 'volume_comprimento', 'note', 'Comprimento da embalagem do produto (Para cálculo dos Correios)');
$setup->updateAttribute('catalog_product', 'volume_altura', 'note', 'Altura da embalagem do produto (Para cálculo dos Correios)');
$setup->updateAttribute('catalog_product', 'volume_largura', 'note', 'Largura da embalagem do produto (Para cálculo dos Correios)');

$installer->endSetup();
