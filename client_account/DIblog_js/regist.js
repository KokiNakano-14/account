document.addEventListener('DOMContentLoaded', function() {
  var formElement = document.querySelector('form'); // フォーム要素を取得

  formElement.addEventListener('submit', function(event) {
    var inputs = formElement.querySelectorAll('input, select'); // 入力要素とセレクト要素を取得
    var isValid = true;

    // 既存のエラーメッセージを削除
    var errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach(function(errorMessage) {
      errorMessage.remove();
    });

    inputs.forEach(function(input) {
      if (input.value.trim() === '') { // 値が空白かチェック
        isValid = false;
        var errorMessageElement = document.createElement('div'); // エラーメッセージの要素を作成
        errorMessageElement.className = 'error-message'; // クラス名を設定
        errorMessageElement.textContent = input.previousElementSibling.textContent + 'が未入力です。'; // エラーメッセージを設定
        input.parentElement.appendChild(errorMessageElement); // エラーメッセージを追加
      }
    });

    if (!isValid) {
      event.preventDefault(); // フォームの送信を中止
    }
  });
});
