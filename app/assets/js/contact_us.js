var LolitaFramework;
(function (LolitaFramework) {
    var ContactUs = (function () {
        function ContactUs() {
            var _this = this;
            jQuery(document).on('submit', '#contact_us_form', function (e) { return _this.submit(e); });
        }
        ContactUs.prototype.submit = function (e) {
            var request, data;
            data = this.serialize(jQuery(e.currentTarget));
            data = jQuery.extend({
                nonce: window.lolita_framework.LF_NONCE }, data);
            request = window.wp.ajax.post('contact_us', data);
            request.done(function () {
                jQuery('.lf_subscribe__container').hide();
                jQuery('.lf_subscribe__success-message').show();
            });
            request.fail(function () {
                jQuery('.lf_subscribe__container').hide();
                jQuery('.lf_subscribe__error-message').show();
            });
            e.preventDefault();
        };
        ContactUs.prototype.serialize = function ($obj) {
            var arr, ret, i, name, value;
            arr = $obj.serializeArray();
            ret = {};
            for (i = 0; i < arr.length; i++) {
                name = arr[i].name;
                value = arr[i].value;
                ret[name] = value;
            }
            return ret;
        };
        return ContactUs;
    }());
    LolitaFramework.ContactUs = ContactUs;
    window.LolitaFramework.contact_us = new ContactUs();
})(LolitaFramework || (LolitaFramework = {}));
//# sourceMappingURL=contact_us.js.map