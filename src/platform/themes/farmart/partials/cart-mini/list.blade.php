<div class="panel__header">
    <span class="panel__header-title">{{ __('Shopping Cart') }}
        <span class="cart-counter">({{ Cart::instance('cart')->count() }})</span>
    </span>
    <a class="close-toggle--sidebar" href="#" data-toggle-closest=".cart__content">
        <span class="svg-icon">
            <svg>
                <use href="#svg-icon-arrow-right" xlink:href="#svg-icon-arrow-right"></use>
            </svg>
        </span>
    </a>
</div>
<div class="cart__items">
    @if (Cart::instance('cart')->count() > 0 && Cart::instance('cart')->products()->count() > 0)
        <ul class="mini-product-cart-list">
            @php
                $products = Cart::instance('cart')->products();
            @endphp
            @if (count($products))
                @foreach(Cart::instance('cart')->content() as $key => $cartItem)
                    @php
                        $product = $products->find($cartItem->id);
                    @endphp
                    @if (!empty($product))
                        {!! Theme::partial('cart-mini.item', compact('product', 'cartItem')) !!}
                    @endif
                @endforeach
            @endif
        </ul>
    @else
        <div class="cart_no_items py-3 px-3">
            <span class="cart-empty-message">{{ __('No products in the cart.') }}</span>
        </div>
    @endif
</div>

@if (Cart::instance('cart')->count() > 0 && Cart::instance('cart')->products()->count() > 0)
    <div class="control-buttons">
        <div class="mini-cart__total">
            <strong class="text-uppercase">{{ __('Total') }}:</strong>
            <span class="price-amount">
                <bdi>
                    @if (EcommerceHelper::isTaxEnabled())
                        {{ format_price(Cart::instance('cart')->rawSubTotal() + Cart::instance('cart')->rawTax()) }}
                    @else
                        {{ format_price(Cart::instance('cart')->rawSubTotal()) }}
                    @endif
                </bdi>
            </span>
        </div>
        <div class="mini-cart__buttons row g-0">
            <div class="col me-2">
                <a class="btn btn-light" href="{{ route('public.cart') }}">{{ __('View Cart') }}</a></div>
            <div class="col ms-2">
                @if (session('tracked_start_checkout'))
                    <a class="btn btn-primary checkout"
                        href="{{ route('public.checkout.information', session('tracked_start_checkout')) }}">{{ __('Checkout') }}</a>
                @endif
            </div>
        </div>
    </div>
@endif
