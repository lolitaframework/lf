/// <reference path="jquery.d.ts" />

namespace LolitaFramework {
    export class lf {

        /**
         * ContactUs control class constructor
         */
        constructor() {
            jQuery(document).on(
                'click',
                '.see_more_industries',
                (e:any) => this.seeMore(e)
            );
        }

        /**
         * See more button
         *
         * @param {any} e event
         */
        seeMore(e:any) {
            e.preventDefault();
            jQuery(e.currentTarget).parent().find('.menu li').each(
                function() {
                    jQuery(this).show('fast');
                }
            )
        }
    }

    (<any>window).LolitaFramework.lf = new lf();
}