var DemoSettings;
DemoSettings = (function($) {
    "use strict";
    var config, handleAutoHideSidebarOption, handleDividersSideBarOption, handleThemeOptions, init, pattern;
    pattern = ".user > span, .navigation-sidebar > span,";
    pattern += ".menu .accordion-heading .arrow,";
    pattern += ".menu .accordion-heading a > span,";
    pattern += ".menu .accordion-body > li > a,";
    pattern += ".chat-users .user-list li a > span";
    config = {urlThemes: 'none'};
    init = function(options) {
        $.extend(config, options);
        handleDividersSideBarOption();
        handleAutoHideSidebarOption();
        handleThemeOptions();
    };
    handleDividersSideBarOption = function() {
        $("#demo-setting #sidebar-dividers").click(function() {
            var $sidebar;
            $sidebar = $(".social-sidebar");
            if ($(this).prop("checked")) {
                $sidebar.addClass("dividers");
            } else {
                $sidebar.removeClass("dividers");
            }
        });
    };
    handleAutoHideSidebarOption = function() {
        $("#demo-setting #sidebar-autohide").click(function() {
            var $main, $navbar, $sidebar, $wraper;
            $sidebar = $(".social-sidebar");
            $wraper = $(".wraper");
            $main = $("#main");
            if ($(this).prop("checked")) {
                $sidebar.removeClass("sidebar-full");
                $sidebar.addClass("auto-hide");
                $wraper.removeClass("sidebar-full");
            } else {
                $sidebar.addClass("sidebar-full");
                $sidebar.removeClass("auto-hide");
                $navbar.removeAttr("style");
                $main.removeAttr("style");
                $sidebar.find(pattern).removeAttr("style");
                $sidebar.find(".search-sidebar img").removeAttr("style");
                $(".icon-user.trigger-user-settings, .input-filter").removeAttr("style");
                $wraper.addClass("sidebar-full");
            }
        });
    };
    handleThemeOptions = function() {
        $("select[name=\"colorpicker\"]").simplecolorpicker();
        $("select[name=\"colorpicker\"]").on("change", function() {
            var element, themeName, themeStyleSheet;
            themeStyleSheet = $("#theme");
            element = $("option:selected", this);
            if (typeof element.attr("data-class") !== 'undefined') {
                themeName = config.urlThemes + element.attr("data-class") + '.css';
            } else {
                themeName = '#none';
            }
            themeStyleSheet.attr('href', themeName);
        });
    };
    return{init: init};
})(jQuery);