# selenium-laravel

Selenium と Laravel を利用したブラウザテストを提供します

## make コマンド

### 環境構築

```sh
make build
```

### テスト実行

```sh
make test
```

### phpコンテナに入る

```sh
make bash
```

## VNC viewer

Mac は標準で VNC が利用出来ると思いますので、そちらを理鶯してください

### windows

無料なので下記がおすすめ

UltraVNC Viewer<br>
https://forest.watch.impress.co.jp/library/software/ultravnc/

接続先：localhost:5900<br>
パスワード：secret<br>

接続後にテストを実行すると、テスト経過を確認できます
