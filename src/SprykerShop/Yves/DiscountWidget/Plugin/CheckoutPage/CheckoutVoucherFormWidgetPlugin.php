<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\DiscountWidget\Plugin\CheckoutPage;

use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CheckoutPage\Dependency\Plugin\DiscountWidget\CheckoutVoucherFormWidgetPluginInterface;
use SprykerShop\Yves\DiscountWidget\Widget\CheckoutVoucherFormWidget;

/**
 * @deprecated Use {@link \SprykerShop\Yves\DiscountWidget\Widget\CheckoutVoucherFormWidget} instead.
 */
class CheckoutVoucherFormWidgetPlugin extends AbstractWidgetPlugin implements CheckoutVoucherFormWidgetPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function initialize(QuoteTransfer $quoteTransfer): void
    {
        $widget = new CheckoutVoucherFormWidget($quoteTransfer);

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
        return CheckoutVoucherFormWidget::getTemplate();
    }
}
