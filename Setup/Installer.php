<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\ConfigurableSampleDataVenia\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface
{
    /**
     * @var \Magento\CatalogSampleDataVenia\Model\Attribute
     */
    private $attribute;

    /**
     * @var \Magento\CatalogSampleDataVenia\Model\Category
     */
    private $category;

    /**
     * @var \Magento\CatalogSampleDataVenia\Model\Product
     */
    private $configurableProduct;

    /**
     * @var \Magento\ProductLinksSampleData\Model\ProductLink
     */
    protected $productLinkSetup;

    /** @var Magento\CatalogSampleDataVenia\Model\Swatches */
    protected $swatches;

    /**
     * @param \Magento\CatalogSampleDataVenia\Model\Attribute $attribute
     * @param \Magento\CatalogSampleDataVenia\Model\Category $category
     * @param \Magento\ConfigurableSampleDataVenia\Model\Product $configurableProduct
     * @param \Magento\ProductLinksSampleData\Model\ProductLink $productLinkSetup
     * @param \Magento\ConfigurableSampleDataVenia\Model\Swatches $productLinkSetup
     */
    public function __construct(
        \Magento\CatalogSampleDataVenia\Model\Attribute $attribute,
        \Magento\CatalogSampleDataVenia\Model\Category $category,
        \Magento\ConfigurableSampleDataVenia\Model\Product $configurableProduct,
        //\Magento\ProductLinksSampleData\Model\ProductLink $productLinkSetup,
        \Magento\ConfigurableSampleDataVenia\Model\Swatches $swatches

    ) {
        $this->attribute = $attribute;
        $this->category = $category;
        $this->configurableProduct = $configurableProduct;
        //$this->productLinkSetup = $productLinkSetup;
        $this->swatches = $swatches;
    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {
        $this->attribute->install(['Magento_ConfigurableSampleDataVenia::fixtures/attributes.csv']);
        $this->swatches->install();
        $this->category->install(['Magento_ConfigurableSampleDataVenia::fixtures/categories.csv']);
        $this->configurableProduct->install();
        /*$this->productLinkSetup->install(
            ['Magento_ConfigurableSampleData::fixtures/Links/related.csv'],
            ['Magento_ConfigurableSampleData::fixtures/Links/upsell.csv'],
            ['Magento_ConfigurableSampleData::fixtures/Links/crossell.csv']
        );*/
    }
}
