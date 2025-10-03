# wp-base-theme

## Tailwind CSS セットアップ

依存関係のインストール
```bash
npm install -D tailwindcss postcss autoprefixer
```

設定ファイルの生成
```bash
npx tailwindcss init
```

tailwind.config.jsを修正
```javascript
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

assets/css/tailwind.cssを作成
```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

ビルドコマンドの実行
```bash
npx tailwindcss -i ./assets/css/tailwind.css -o ./assets/css/style.css --watch
```

functions.phpで読み込み
```php
function custombase_enqueue_assets()
{
    // テーマのメインCSSの読み込み
    wp_enqueue_style(
        'custombase-style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory() . '/style.css')
    );

    // Tailwindの読み込み（ビルド済みCSS）
    wp_enqueue_style(
        'custombase-tailwind',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/style.css')
    );

    // JSの読み込み
    wp_enqueue_script(
        'custombase-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/script.js'),
        true // フッターで読み込む
    );
}
add_action('wp_enqueue_scripts', 'custombase_enqueue_assets');
```

.gitignore
```
node_modules/
```

## ワイヤーフレームサンプル


```mermaid
flowchart TD
  subgraph Top[① トップページ]
    A1[ヘッダー<br/>ロゴ＋ナビ]
    A2[メインビジュアル<br/>写真＋キャッチコピー]
    A3[施設紹介]
    A4[最新情報・お知らせ]
    A5[フッター]
  end

  subgraph About[② 会社概要・サービス]
    B1[会社概要<br/>住所・代表者・地図]
    B2[サービス紹介<br/>ダミーテキスト]
  end

  subgraph Program[③ 支援プログラムと自己評価表]
    C1[支援プログラム一覧]
    C2[自己評価表<br/>PDFリンク]
  end

  subgraph Measures[④ 施設における対策等]
    D1[感染症対策]
    D2[防災・安全管理]
    D3[個人情報保護]
  end

  subgraph Flow[⑤ ご利用の流れ]
    E1[ステップ1 お問い合わせ]
    E2[ステップ2 見学・面談]
    E3[ステップ3 申込・契約]
    E4[ステップ4 ご利用開始]
  end

  Top --- About
  About --- Program
  Program --- Measures
  Measures --- Flow
```