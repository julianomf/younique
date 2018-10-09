(function($) {
	'use strict';
	
	var process = {};
	qodef.modules.process = process;

    process.qodefProcess = qodefProcess;
	
	process.qodefOnDocumentReady = qodefOnDocumentReady;
	
	$(document).ready(qodefOnDocumentReady);
	
	/*
	 All functions to be called on $(document).ready() should be in this function
	 */
	function qodefOnDocumentReady() {
        qodefProcess().init();
	}
	
	/**
	 * Inti process shortcode on appear
	 */
    function qodefProcess() {
        var processes = $('.qodef-process-holder');

        var processAnimation = function (process) {
            if (!qodef.body.hasClass('qodef-no-animations-on-touch')) {
                var items = process.find('.qodef-process-item-holder');
                var background = process.find('.qodef-process-bg-holder');

                process.appear(function () {
                    $(this).addClass('appeared');

                    process.find(".qodef-process-item-holder").each(function (i) {
                        var thisProcess = $(this);

                        setTimeout(function () {
                            thisProcess.addClass("item-appeared");
                        }, i * 250);
                    });

                }, {accX: 0, accY: qodefGlobalVars.vars.qodefElementAppearAmount});
            }
        };

        return {
            init: function () {
                if (processes.length) {
                    processes.each(function () {
                        processAnimation($(this));
                    });
                }
            }
        };
    }
	
})(jQuery);