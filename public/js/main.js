import openMenu from './modules/active';
import validator from './modules/validator';
import validatorLogin from './modules/login';
import linkClick from './modules/links';
import front from './modules/front';
import symText from './modules/symtext';
import textStroke from './modules/stroketext';
import seoText from './modules/seo-text';
import reviews from './modules/reviews';
import addToBalance from './modules/addfunds';
import promocode from './modules/promocode';
import newOrder from './modules/newOrder';
import cart from './modules/cart';

window.addEventListener('DOMContentLoaded', () => {
    openMenu('burger', 'sidebar', 'pre', 'blur');
    validator('reg_form','._req', '.form-error');
    validatorLogin('login__form', '._req', '.form-error');
    front();
    symText('textarea-text', '.text');
    textStroke('.textarea-stroke', '.stroke');
    seoText('.seo-textarea','.seo-span', '.seo-list');
    reviews('reviews-form', '.review-textarea', 'submit_review');
    addToBalance('balance-form', '._req', '.form-error');
    promocode('promo', '._req', '.form-error');
    newOrder('addToCart-form','.order-input','._req', '.form-error', '.span-dop', '.order__form-calculator');
    cart();
});