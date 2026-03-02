<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\DiscountWidget\Dependency\Client;

use Generated\Shared\Transfer\QuoteTransfer;

interface DiscountWidgetToQuoteClientInterface
{
    public function isQuoteLocked(QuoteTransfer $quoteTransfer): bool;

    public function isQuoteEditable(QuoteTransfer $quoteTransfer): bool;

    /**
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function getQuote();

    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return void
     */
    public function setQuote(QuoteTransfer $quoteTransfer);
}
