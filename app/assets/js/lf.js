var LolitaFramework;
(function (LolitaFramework) {
    var LF = (function () {
        function LF() {
            var _this = this;
            this.ajax = null;
            this.handler = null;
            this.ajax = window.wp.ajax;
            jQuery(document).on('keyup', '.b-search-form__input', function (e) { return _this.searchInputKeyup(e); });
        }
        LF.prototype.searchInputKeyup = function (e) {
            var _this = this;
            var value;
            value = jQuery(e.currentTarget).val();
            if (this.handler) {
                clearTimeout(this.handler);
            }
            this.handler = setTimeout(function () { return _this.search(value); }, 1000);
        };
        LF.prototype.search = function (value) {
            var _this = this;
            var promise;
            promise = this.ajax.post({
                action: 'search',
                nonce: window.lolita_framework.LF_NONCE,
                s: value
            });
            promise.done(function (response) { return _this.searchDone(response); });
        };
        LF.prototype.searchDone = function (response) {
            console.log(response);
        };
        return LF;
    }());
    LolitaFramework.LF = LF;
    window.LolitaFramework.softexpert = new LF();
})(LolitaFramework || (LolitaFramework = {}));
//# sourceMappingURL=lf.js.map