<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\DiscountWidget\Plugin\CartPage;

use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CartPage\Dependency\Plugin\DiscountWidget\DiscountSummaryWidgetPluginInterface;

/**
 * @deprecated Use molecule('cart-discount-summary', 'DiscountWidget') instead.
 *
 * @method \SprykerShop\Yves\DiscountWidget\DiscountWidgetFactory getFactory()
 */
class DiscountSummaryWidgetPlugin extends AbstractWidgetPlugin implements DiscountSummaryWidgetPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function initialize(QuoteTransfer $quoteTransfer): void
    {
        $this->addParameter('cart', $quoteTransfer);
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
        return '@DiscountWidget/views/cart-discount-summary/cart-discount-summary.twig';
    }
}
