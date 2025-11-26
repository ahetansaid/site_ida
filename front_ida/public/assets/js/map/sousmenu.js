$(document).ready(function() {
    $("#ps_menu").on('click', () => {
        window.location.assign(ps_menu_url);
    });
    $("#rs_menu").on('click', () => {
        window.location.assign(rs_menu_url);
    });
    $("#image_left").on('click', () => {
        window.location.assign(image_left_url);
    });
    $("#image_right").on('click', () => {
        window.location.assign(image_right_url);
    });

});