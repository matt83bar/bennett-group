$(document).ready(function() {
    $('.nav-drop').on("mouseover", function() {
        var menuGroup = $(this).data("group");
        if(menuGroup !== undefined) {
            $('.menu-group').hide();
            var menuGroupId = '#' + menuGroup + 'Menu';
            $('#drawer').css({height: $(menuGroupId).height()});
            $(menuGroupId).show();
        }
    });

    $('#nav').mouseleave(function() {
        $('.menu-group').hide();
        $('#drawer').css({height: 0});
    });
});
