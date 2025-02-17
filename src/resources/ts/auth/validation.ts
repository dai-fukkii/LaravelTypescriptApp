import $ from 'jquery';

// サインアップフォームのバリデーション
$('#signup-form').on('submit', function(event){

    event.preventDefault();
    
    const username : string = $('#username').val();
    const email : string = $('#email').val();
    const password : string = $('#password').val();
    const confirm_password : string = $('#confirm-password').val();

    if(!requiredInput(email, password, username, confirm_password)) {
        alert('すべての情報を入力してください');
    }else if(!checkUsernameLength(username)) {
        alert('ユーザー名は4文字以上で入力してください');
    }else if(!checkPasswordLength(password)|| !checkPasswordLength(confirm_password)) {
        alert('パスワードは8文字以上で入力してください');
    }else if(!checkMatchPassword(password, confirm_password)) {
        alert('パスワードが一致しません');
    }

});

// ログインフォームのバリデーション
$('#login-form').on('submit', function(event){

    event.preventDefault();
    
    const email : string = $('#email').val();
    const password : string = $('#password').val();

    if(!requiredInput(email, password)) {
        alert('すべての情報を入力してください');
    }else if(!checkPasswordLength(password)) {
        alert('パスワードは8文字以上で入力してください');
    }

});

// 入力が空かどうかを判定
function requiredInput(email:string, password:string, username?:string, confirm_password?:string) : boolean {
    
    // ユーザー名と確認用パスワードが存在する場合
    if(username && confirm_password) {
        return username !== '' && email !== '' && password !== '' && confirm_password !== '';
    }
    
    return email !== '' && password !== '';
}

// ユーザー名の文字数が4文字以上かどうかを判定
function checkUsernameLength(username:string) : boolean {
    const MIN_USERNAME_LENGTH : number = 4;
    return username.length >= MIN_USERNAME_LENGTH;
}

// パスワードの文字数が8文字以上かどうかを判定
function checkPasswordLength(password:string) : boolean {
    const MIN_PASSWORD_LENGTH : number = 8;
    return password.length >= MIN_PASSWORD_LENGTH;
}

// パスワードと確認用パスワードが一致しているかどうかを判定
function checkMatchPassword(password:string, confirm_password:string) : boolean {
    return password === confirm_password;
}