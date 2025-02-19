// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { createRequire } from 'module';
const require = createRequire(import.meta.url);
const glob = require('glob');

// TypeScript ファイルを再帰的に取得
const tsFiles = glob.sync('resources/ts/**/*.ts');

export default defineConfig({
    plugins: [
        laravel({
            input: tsFiles,
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',   // Docker コンテナ内の Vite サーバーを外部に公開
        port: 5174,        // デフォルトのポート
        hmr: {
            host: 'localhost',  // ホスト側の IP アドレス
        }
    },
    watch: {
        // 追加: TypeScript ファイルの変更を監視
        include: 'resources/ts/**/*.ts'
    }
});
