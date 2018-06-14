<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\DiscountWidget\Dependency\Client;

use Generated\Shared\Transfer\QuoteTransfer;

class DiscountWidgetToCalculationClientBridge implements DiscountWidgetToCalculationClientInterface
{
    /**
     * @var \Spryker\Client\Calculation\CalculationClientInterface
     */
    protected $calculationClient;

    /**
     * @param \Spryker\Client\Calculation\CalculationClientInterface $calculationClient
     */
    public function __construct($calculationClient)
    {
        $this->calculationClient = $calculationClient;
    }

    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function recalculate(QuoteTransfer $quoteTransfer)
    {
        return $this->calculationClient->recalculate($quoteTransfer);
    }

    /**
     * @return \Spryker\Client\Calculation\Zed\CalculationStubInterface
     */
    public function getZedStub()
    {
        /** @var \Spryker\Client\Calculation\CalculationClient $client */
        $client = $this->calculationClient;

        return $client->getZedStub();
    }
}
