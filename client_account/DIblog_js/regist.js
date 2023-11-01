document.addEventListener('DOMContentLoaded', function() {
  var formElement = document.querySelector('form'); // フォーム要素を取得
  var errorGender = document.getElementById('gender-error'); // 性別エラーメッセージ要素を取得

  formElement.addEventListener('submit', function(event) {
    errorGender.textContent = ''; // エラーメッセージを初期化

    var inputs = formElement.querySelectorAll('input, select'); // 入力要素とセレクト要素を取得
    var isValid = true;

    inputs.forEach(function(input) {
      if (input.value.trim() === '') { // 値が空白かチェック
        isValid = false;
        var errorMessageElement = document.createElement('div'); // エラーメッセージの要素を作成
        errorMessageElement.className = 'error-message'; // クラス名を設定
        errorMessageElement.textContent = input.previousElementSibling.textContent + 'が未入力です。'; // エラーメッセージを設定
        input.parentElement.appendChild(errorMessageElement); // エラーメッセージを追加

        // 性別のエラーメッセージを設定
        if (input.type === 'radio' && input.name === 'gender') {
          errorGender.textContent = '性別が未選択です。';
        }
      }
    });

    if (!isValid) {
      event.preventDefault(); // フォームの送信を中止
    }
  });
});