/// <reference path="jquery.d.ts" />

namespace LolitaFramework {
    export class HomeSearch {

        /**
         * Ajax helper
         * @type {any}
         */
        ajax: any = null;

        /**
         * Timeout handler
         * @type {any}
         */
        handler: any = null;

        /**
         * Constructor
         */
        constructor() {
            this.ajax = (<any>window).wp.ajax;
            jQuery(document).on(
                'keyup',
                '.b-search-form__input',
                (e:any) => this.searchInputKeyup(e)
            );
        }

        /**
         * Search input keyup event
         */
        searchInputKeyup(e:any) {
            var value:string;

            value   = jQuery(e.currentTarget).val();
            if(this.handler) {
                clearTimeout(this.handler);
            }
            this.handler = setTimeout(
                () => this.search(value),
                1000
            );
        }

        /**
         * Search
         *
         * @param {string} value
         */
        search(value:string) {
            var promise: any;
            promise = this.ajax.post({
                action: 'search',
                nonce: (<any>window).lolita_framework.LF_NONCE,
                s: value
            });

            promise.done((response:any) => this.searchDone(response));
        }

        searchDone(response:any){
            console.log(response);
        }
    }

    (<any>window).LolitaFramework.home_search = new HomeSearch();
}