$(document).ready(function(){
    $('#exo p').html(text);
    var anserArr=[];
    $('#exo p span').each(function(i){
        anserArr[i]=$(this).text();
    });
    $('#exo p span').replaceWith("<input type='text' value=''>");
    $('#validate').click(function(){
        $('#exo input').each(function(i){
            var ans = $(this).val();

            if(ans == anserArr[i]){
                $(this).addClass('right');
                }
            else{
                $(this).val(anserArr[i]);
                $(this).addClass('false');
            }
        })
    });
});
