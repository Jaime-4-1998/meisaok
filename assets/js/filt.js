$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        $('.filter_data').hide();
        $('.ar').prop('disabled',false);
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('brand');
        var ram = get_filter('ram');
        var storage = get_filter('storage');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, storage:storage},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
            $('.filter_data').show();
            $('#mobile-menu').addClass('is-active')
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
        $('#mobile-menu').removeClass('is-active')
        $('.navbar__menu').removeClass('active')
        window.scrollTo(0, 400)
    });
});