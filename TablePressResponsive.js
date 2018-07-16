$(document).ready(function()){

    if($(window).width() <= 600){

        var thead = [];


        $('.tablepress th').each(function() {
            thead.push($(this).text());
        });

        $('.tablepress tr').each(function() {
            index = 0;
            $(this).attr('data-tr', $(this).children('td:first-child').text());
            $(this).children('td').each(function(){
                $(this).attr('data-th', thead[index]);
                index++
            });
        });

    }




}

