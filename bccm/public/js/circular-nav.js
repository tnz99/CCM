$(function(){
    $('#circular_nav').hide();

    $('#our_story_btn').click(function(){
        $('#our_story_btn').hide();
        $('#circular_nav').show();
    });

    $('#hide_circular_nav').click(function(){
        $('#our_story_btn').show();
        $('#circular_nav').hide();
    })
});