              <div class="header-action-2">
                  <a href="shop-wishlist.php">
                      <img alt="wishlist" src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}">
                      @if (Cart::instance('wishlist')->count() > 0)
                          <span class="pro-count white">{{ Cart::instance('wishlist')->count() }}</span>
                      @endif
                  </a>
              </div>
