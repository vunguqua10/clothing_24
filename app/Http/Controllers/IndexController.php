<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function indexLightFooter(){
        return view("shop-index-light-footer.shop-index-light-footer");
    }

    public function indexHeaderFix(){
        return view("shop-index-header-fix.shop-index-header-fix");
    }

    public function about(){
        return view("shop-about.shop-about");
    }

    public function account(){
        return view("shop-account.shop-account");
    }

    public function checkout(){
        return view("shop-checkout.shop-checkout");
    }

    public function contacts(){
        return view("shop-contacts.shop-contacts");
    }

    public function faq(){
        return view("shop-faq.shop-faq");
    }

    public function goodsCompare(){
        return view("shop-goods-compare.shop-goods-compare");
    }

    public function item(){
        return view("shop-item.shop-item");
    }

    public function privacyPolicy(){
        return view("shop-privacy-policy.shop-privacy-policy");
    }

    public function productList(){
        return view("shop-product-list.shop-product-list");
    }

    public function searchResult(){
        return view("shop-search-result.shop-search-result");
    }

    public function shoppingCart(){
        return view("shop-shopping-cart.shop-shopping-cart");
    }

    public function shoppingCartNull(){
        return view("shop-shopping-cart-null.shop-shopping-cart-null");
    }

    public function standartForms(){
        return view("shop-standart-forms.shop-standart-forms");
    }

    public function termsConditionsPage(){
        return view("shop-terms-conditions-page.shop-terms-conditions-page");
    }

    public function wishlist(){
        return view("shop-wishlist.shop-wishlist");
    }
}
