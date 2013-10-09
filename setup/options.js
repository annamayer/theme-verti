var ipDesignOptions = {
    textColor: function (value) {
        ipDesign.reloadLessFiles(['theme']);
    },
    linkColor: function (value) {
        ipDesign.reloadLessFiles(['theme']);
    },
    headingColor: function (value) {
        'use strict';
        $('.ipwTitle').css('color', value);
    },
    footerColor: function (value){
        'use strict';
        $('footer .ipPreviewWidget').css('color', value);
    }
};
