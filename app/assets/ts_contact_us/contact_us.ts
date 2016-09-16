/// <reference path="jquery.d.ts" />

namespace LolitaFramework {
    export class ContactUs {

        /**
         * ContactUs control class constructor
         */
        constructor() {
            jQuery(document).on(
                'submit',
                '#contact_us_form',
                (e:any) => this.submit(e)
            );
        }

        /**
         * Submit form
         * @param {event} e
         */
        submit(e:any) {
            var request:any, data:any;

            data = this.serialize(jQuery(e.currentTarget));
            data = jQuery.extend({
                nonce: (<any>window).lolita_framework.LF_NONCE },
                data
            );

       
            request = (<any>window).wp.ajax.post(
                'contact_us',
                data
            );

            request.done(
                function(){
                    jQuery('.lf_subscribe__container').hide();
                    jQuery('.lf_subscribe__success-message').show();
                }
            );

            request.fail(
                function(){
                    jQuery('.lf_subscribe__container').hide();
                    jQuery('.lf_subscribe__error-message').show();
                }
            );
            e.preventDefault();

        }

        /**
         * Prepare serizlize
         * @param {any} $obj [description]
         */
        serialize($obj:any) {
            var arr:any, ret:any, i:number, name:string, value:string;

            arr = $obj.serializeArray();
            ret = {};
            for(i = 0; i < arr.length; i++) {
                name      = arr[i].name;
                value     = arr[i].value;
                ret[name] = value;
            }
            return ret;
        }
    }

    (<any>window).LolitaFramework.contact_us = new ContactUs();
}