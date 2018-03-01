<footer id="tk-footer" class="tk-footer">
    <div class="__container">
        <div class="__mailing-list tk-mailing-list-subscribe">
            <div class="__header -mobile" data-js-toggle data-js-toggle-target="#tk-footer .__mailing-list">
                <h4 class="tk-h3">Join Our Mailing List</h4>
                <img src="/skin/frontend/totokaelo/default/images/nav/caret.svg" alt="Open" width="6" />
            </div>
                
            <div class="block block-subscribe">
    <form action="https://totokaelo.com/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail" class="tk-mailing-list-signup">
        <div class="block-content">
            <div class="form-subscribe-header __header -desktop">
                <label class="tk-h3" for="newsletter">Join our Mailing List</label>
            </div>

            <div class="input-box">
                <input 
                     type="email" 
                     autocapitalize="off" 
                     autocorrect="off" 
                     spellcheck="false" 
                     name="email" 
                     placeholder="Email Address"
                     id="newsletter" 
                     title="Sign up for our newsletter" 
                     class="input-text required-entry validate-email tk-p1" 

                 />
            </div>

            <div class="__choices">
                <p class="tk-h4">
                    <input 
                       class="input-checkbox" 
                       type="checkbox" 
                       name="subscribe-to-interest-w" 
                       value="1"
                       id="newsletter-subscribe-w" 
                       checked="checked"
                   />
                    <label for="newsletter-subscribe-w">Women</label>
                </p>

                <p class="tk-h4">
                    <input 
                       class="input-checkbox" 
                       type="checkbox" 
                       name="subscribe-to-interest-m"
                       value="1"
                       id="newsletter-subscribe-m" 
                    />
                    <label for="newsletter-subscribe-m">Men</label>
                </p>
            </div> 

            <div class="__error">Please select a list!</div>

            <div class="actions">
                <button class="tk-button -o-blue" type="submit" title="Subscribe">Subscribe</button>
            </div>
        </div>
    </form>
    <script type="text/javascript">
    //<![CDATA[
        var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');

        // Yuck.
        var validator = newsletterSubscriberFormDetail.validator;

        validator.options.onFormValidate = function(result, form) {
            var $form = $j(form);
        };
    //]]>
    </script>
</div>
        </div>

        <div class="__client-service">
            <div class="__header -mobile" data-js-toggle data-js-toggle-target="#tk-footer .__client-service">
                <h4 class="tk-h3">Client Service</h4>
                <img src="/skin/frontend/totokaelo/default/images/nav/caret.svg" alt="Open" width="6" />
            </div>
            <h5 class="tk-h3 __header -desktop">Client Service</h5>

            <ul class="tk-h5">
                <li>
                    <a href="https://totokaelo.com/help/" class="tk-l4">Help</a>
                </li>
                <li>
                    <a href="https://totokaelo.com/help/#shipping" class="tk-l4">Shipping</a>
                </li>
                <li>
                    <a href="https://totokaelo.com/help/#returns" class="tk-l4">Returns</a>
                </li>
                <li>
                    <a href="https://totokaelo.com/help/#size-guide" class="tk-l4">Size Guide</a>
                </li>
                <li>
                    <a href="https://totokaelo.com/help/#payment" class="tk-l4">Payment</a>
                </li>
                <li>
                    <a href="https://totokaelo.com/help/#order-status" class="tk-l4">Order Status</a>
                </li>
                <li>
                    <a href="https://totokaelo.com/gift-card/" class="tk-l4">Gift Cards</a>
                </li>
            </ul>
        </div>

        <div class="__contact">
            <div class="__header -mobile" data-js-toggle data-js-toggle-target="#tk-footer .__contact">
                <h4 class="tk-h3">Information</h4>
                <img src="/skin/frontend/totokaelo/default/images/nav/caret.svg" alt="Open" width="6" />
            </div>

            <h5 class="tk-h3 __header -desktop">Information</h5>
            <ul class="tk-h5">
                <li>
                    <a href="https://totokaelo.com/contacts/" class="tk-l4">Contact</a>
                </li>
                <li>
                    <a href="https://totokaelo.com/about/totokaelo/" class="tk-l4">Store Information</a>
                </li>
                <li>
                    <a href="https://totokaelo.com/about/affiliates/" class="tk-l4">Affiliates</a>
                </li>
                <li>
                    <a href="https://totokaelo.com/careers/" class="tk-l4">Careers</a>
                </li>
            </ul>
        </div>

        <div class="__social">
            <div class="__header -mobile" data-js-toggle data-js-toggle-target="#tk-footer .__social">
                <h4 class="tk-h3">Find Us On</h4>
                <img src="/skin/frontend/totokaelo/default/images/nav/caret.svg" alt="Open" width="6" />
            </div>

            <h5 class="tk-h3 __header -desktop">Find Us On</h5>
            <ul class="tk-h5">
                <li>
                    <a href="https://instagram.com/totokaelo" class="tk-l4" target="_blank">Instagram</a>
                </li>
                <li>
                    <a href="https://facebook.com/totokaelo" class="tk-l4" target="_blank">Facebook</a>
                </li>
                <li>
                    <a href="https://pinterest.com/totokaelo" class="tk-l4" target="_blank">Pinterest</a>
                </li>
                <li>
                    <a href="https://twitter.com/totokaelo" class="tk-l4" target="_blank">Twitter</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="__terms">
        <span>
            &copy;2008-2018 Totokaelo LLC. All Rights Reserved.
        </span>
        <span>
            Totokaelo&trade; is a trademark of Totokaelo LLC.&nbsp;
        </span>
        <span>
            <a class="tk-l2" href="https://totokaelo.com/about/terms-and-conditions/">Terms of use</a>
            &mdash;
            <a class="tk-l2" href="https://totokaelo.com/about/privacy-and-security/">Privacy Policy</a>
        </span>
    </div>
</footer>