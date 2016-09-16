var LolitaFramework;
(function (LolitaFramework) {
    var lf = (function () {
        function lf() {
            var _this = this;
            jQuery(document).on('click', '.see_more_industries', function (e) { return _this.seeMore(e); });
        }
        lf.prototype.seeMore = function (e) {
            e.preventDefault();
            jQuery(e.currentTarget).parent().find('.menu li').each(function () {
                jQuery(this).show('fast');
            });
        };
        return lf;
    }());
    LolitaFramework.lf = lf;
    window.LolitaFramework.lf = new lf();
})(LolitaFramework || (LolitaFramework = {}));
//# sourceMappingURL=lf.js.map