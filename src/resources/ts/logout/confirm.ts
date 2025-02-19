import $ from 'jquery';

$(document).ready(function(){
    // ログアウトの確認
    $('#logout').on('click', function(event){

        const isConfirm = confirm('ログアウトしますか');
        
        if(!isConfirm){
            event.preventDefault();
        };

    });
});