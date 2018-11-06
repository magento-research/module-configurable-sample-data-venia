<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\ConfigurableSampleDataVenia\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\ConfigurableSampleDataVenia\Setup\Product;
use Magento\Framework\Setup\Patch\PatchVersionInterface;
use Magento\ConfigurableSampleDataVenia\Setup\SetSession;

/**
* Patch is mechanism, that allows to do atomic upgrade data changes
*/
class InstallConfigurableMetaData implements
    DataPatchInterface, PatchVersionInterface
{
    /**
     * @var ModuleDataSetupInterface $moduleDataSetup
     */
    private $moduleDataSetup;


    /**
     * @var \Magento\CatalogSampleDataVenia\Setup\Product
     */
    private $configurableProduct;


    /**
     * InstallConfigurableMetaData constructor.
     * @param SetSession $setSession
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param Product $configurableProduct
     */
    public function __construct(
        SetSession $setSession,
        ModuleDataSetupInterface $moduleDataSetup,
        Product $configurableProduct)
    {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->configurableProduct = $configurableProduct;
    }


    public function apply()
    {
       $this->configurableProduct->install('Magento_ConfigurableSampleDataVenia','fixtures/products_metadata.csv');
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [
            InstallConfigurableSampleData::class
        ];
    }
    public static function getVersion(){
        return '0.0.0';
    }
}
