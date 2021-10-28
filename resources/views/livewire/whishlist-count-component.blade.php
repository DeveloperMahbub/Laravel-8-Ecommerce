<div class="wrap-icon-section wishlist">
    <a href="{{route('product.wishlist')}}" class="link-direction">
        @if(Cart::instance('wishlist')->count() > 0)
            <i class="fa fa-heart" style="color: #ff7007;" aria-hidden="true"></i>
        @else
        <i class="fa fa-heart" aria-hidden="true"></i>
        @endif
        <div class="left-info">
            @if(Cart::instance('wishlist')->count() > 0)									
                <span class="index">{{Cart::instance('wishlist')->count()}} item</span>		
            @endif
            <span class="title">Wishlist</span>
        </div>
    </a>
</div>