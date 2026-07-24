<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\DiscountWidget\Plugin\CartPage;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CartPage\Dependency\Plugin\DiscountWidget\DiscountVoucherFormWidgetPluginInterface;
use SprykerShop\Yves\DiscountWidget\Widget\DiscountVoucherFormWidget;

/**
 * @deprecated Use {@link \SprykerShop\Yves\DiscountWidget\Widget\DiscountVoucherFormWidget} instead
 *
 * @method \SprykerShop\Yves\DiscountWidget\DiscountWidgetFactory getFactory()
 */
class DiscountVoucherFormWidgetPlugin extends AbstractWidgetPlugin implements DiscountVoucherFormWidgetPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function initialize(): void
    {
        $widget = new DiscountVoucherFormWidget();

        $this->parameters = $widget->getParameters();
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public static function getName(): string
    {
        return static::NAME;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public static function getTemplate(): string
    {
        return DiscountVoucherFormWidget::getTemplate();
    }
}
