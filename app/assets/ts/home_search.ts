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
         * Search item template
         * @type {any}
         */
        tmpl: any = null;

        /**
         * Constructor
         */
        constructor() {
            this.ajax = (<any>window).wp.ajax;
            this.tmpl = (<any>window).wp.template('search-item');
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

        /**
         * Ajax promise done
         *
         * @param {any} response
         */
        searchDone(response:any){
            var i:number;

            jQuery('.w-search-block__results').empty();

            if (response.items.length) {
                for (i = 0; i < response.items.length; i++) {
                    console.log(
                        this.tmpl(response.items[i]), this.tmpl(data)
                    );
                    jQuery('.w-search-block__results').append(this.tmpl(response.items[i]));
                }
            }
        }
    }

    (<any>window).LolitaFramework.home_search = new HomeSearch();
}