/**
 * @Author Peace Ngara
 * @Ck Editor Version 2 Plugin - Alias ltiv2plugin
 * @file Overview CK Editor LTI Appstore Acceess Component
 *
 */

/**
 * Fired When the User clicks the LTI Button on the Toolbar
 * @since 1.0
 * @event click
 * @member CKEDITOR.editor
 *
 */
( function() {
    var iframeWindow = null;
    CKEDITOR.plugins.add( 'ltieditorv2',
        {
            requires: [ 'iframedialog' ],
            init: function( editor )
            {
                var me = this;

                CKEDITOR.dialog.add('ltieditorv2Dialog', function ()
                {
                    return{
                        title: 'LTI Tools APP Store',
                        minWidth: 820,
                        minHeight: 600,
                        contents :
                        [
                            {
                                id: 'iframe',
                                label: 'Insert an LTI Tool',
                                expand: true,
                                elements : [{
                                    type: 'iframe',
                                    src:  ((window.global_conf.subdir !== 'undefined') ? window.global_conf.subdir : '' ) + '/ckeditorstore',
                                    width  : 1000,
                                    height : 800,
                                    scrolling: 'yes',
                                    
                                    onContentLoad: function () {
                                        // We Access the DOM Instance of the Iframe
                                        var iframe = document.getElementById(this._.frameId);
                                        var iframeWindow = iframe.contentWindow;
                                        //Still in this context we get the attribute of the selected item

                                        iframeWindow.$('.appitem').each(function () {
                                            var $this = $(this);
                                            $this.on("click", function () {
                                                var context_id = $(this).data('context');
                                               // console.log(context_id);
                                                // Launch an AJAX HTTP Request
                                                $.ajax({
                                                    //Production Url - Use if on Dev Server
                                                    url: ((window.global_conf.subdir !== 'undefined') ? window.global_conf.subdir : '' ) + '/ajaxresponse/' + context_id,
													//Local Url - Use if On Local Machine
                                                    //url: '/ajaxresponse/'+context_id,
                                                    type: 'GET',
                                                    success: function (launchvars) {
                                                        //Production Url - Use if on Dev Server
                                                        var url        = ((window.global_conf.subdir !== 'undefined') ? window.global_conf.subdir : '' ) + '/ajaxresponse/' +context_id;
														//Local Url - Use if On Local Machine
                                                        //var url        = '/ajaxresponse/'+context_id;
                                                        var div        = new CKEDITOR.dom.element('div');
                                                        var appframe   = new CKEDITOR.dom.element('iframe');
                                                        console.log('appframe', appframe);
                                                        //Set Iframe Attributes
                                                        div.setAttributes({
                                                            'class': 'appframe'
                                                        });
                                                        appframe.setAttributes({
                                                            'width' :'100%',
                                                            'height': 750,
                                                            'type'  : 'text/html',
                                                            'src': url,
                                                            'allowtransparency': 'true',
                                                            'frameborder': 0,
                                                            'class': 'ckeditorframev2',
                                                            'scrolling': 'yes'
                                                        });

                                                        // $(appframe).on('load', function() {
                                                        //     console.log('appframe2', appframe);
                                                        //     $(appframe).height($(appframe).contents().find("html").height());
                                                        //     // appframe.style.height = appframe.contentWindow.document.body.scrollHeight + 'px';
                                                        //     // $(appframe).setAttribute('height', $(appframe).contentWindow.document.body.scrollHeight + 'px');
                                                        // });
                                                        // $(appframe).load();

                                                        editor.insertElement(div, div.append(appframe));

                                                        //Insert Element and Exit Dialog Window
                                                        CKEDITOR.dialog.getCurrent().hide();
                                                    },
                                                })

                                            });
                                        });


                                    }

                                }]
                            }
                        ],
                        onOk : function () {
                            //Hide the onOk and Cancel Buttons

                        }

                    }

                });

                editor.addCommand( 'ltieditorv2DialogCmd', new CKEDITOR.dialogCommand( 'ltieditorv2Dialog' ) );

                editor.ui.addButton( 'ltieditorv2Dialog',
                    {
                        label: 'LtiTools',
                        command: 'ltieditorv2DialogCmd',
                        icon: this.path + 'icons/content.png'
                    } );
            }
        } );

} )();

var toolbar = CKEDITOR.config.toolbarButtons;
//toolbar[toolbar.length-1].items.push( 'coursecontentDialog' );
