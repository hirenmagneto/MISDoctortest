//please make sure that core jquery is included

var FileUploadExtend = {
    _cfg: {formId: null, download: {url: null, selector: '.template-download a'}},
            
    init: function(cfg) {
        this._cfg = jQuery.extend(true, this._cfg, cfg); 
           
        $.ajax({
            url: $(this._cfg.formId).fileupload('option', 'url'),
            dataType: 'json',
            context: $(this._cfg.formId)[0]
        }).done(function(result) {
            $(this).fileupload('option', 'done').call(this, null, {result: result});
        });

        var me = this;
        $(this._cfg.download.selector).live('click', function() {
            var file = $(this).attr('download'),
                    popup = (/\.(gif|jpg|jpeg|tiff|png)$/i).test(file);

            if ($.browser.msie && !popup) {
                var url = me._cfg.download.url,
                        input = '<input type="hidden" name="file" value="' + file + '" />';

                $('<form action=' + url + ' method=post>' + input + '</form>').appendTo('body').submit().remove();
     
                return false;
            } else {
                popup = popup || (/\.(pdf)$/i).test(file);
            }

            if (popup) {
                $(this).magnificPopup({'type': 'iframe', mainClass: 'mfp-fade'}).magnificPopup('open');
                return false;
            }

            return true;
        });
    }
};

