<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerShop\Yves\DiscountWidget\Form;

use SprykerShop\Yves\DiscountWidget\Plugin\Provider\DiscountWidgetControllerProvider;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class CheckoutVoucherForm extends AbstractType
{
    const FORM_NAME = 'voucherForm';
    const FIELD_VOUCHER_DISCOUNTS = 'voucherDiscounts';

    /**
     * @return string
     */
    public function getName()
    {
        return static::FORM_NAME;
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->setAction('/checkout/add-voucher');

        $this->addVoucherCodeField($builder);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return $this
     */
    protected function addVoucherCodeField(FormBuilderInterface $builder)
    {
        $builder->add(static::FIELD_VOUCHER_DISCOUNTS, TextType::class, [
            'label' => 'page.checkout.finalize.enter-voucher',
            'required' => true,
        ]);

        return $this;
    }
}
