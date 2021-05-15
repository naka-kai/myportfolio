<?php

if($_SERVER['REQUEST_METHOD'] != 'POST') {
  //POSTでのアクセスでない場合
  $name = '';
  $email = '';
  $contents = '';
  $message  = '';
  $err_msg = '';
  $complete_msg = '';

} else {
  //フォームがサブミットされた場合(POST処理)
  //入力された値を取得する
  $name = $_POST['name'];
  $email = $_POST['mail'];
  $message = $_POST['message'];

  //エラーメッセージ・完了メッセージの用意
  $err_msg = '';
  $complete_msg = '';

  //空チェック
  if ($name == '' || $email == '' || $message = '') {
    $err_msg = '全ての項目を入力してください。';
  }

  //エラーなし(全ての項目が入力されている)
  if ($err_msg == '') {
    $to = 'sea.k.naka@gmail.com'; //管理者のメールアドレスなど送信先を指定
    $headers = "From: " . $email . "\r\n";
    //本文の最後に名前を追加
    $message .= "\r\n\r\n" . $name;
    //メール送信
    mb_send_mail($to, $message, $headers);
    //完了メッセージ
    $complete_msg = '送信されました！';
    //全てクリア
    $name = '';
    $email = '';
    $message = '';
  }
}
