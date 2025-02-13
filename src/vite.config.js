// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/ts/app.ts'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',   // Docker コンテナ内の Vite サーバーを外部に公開
        port: 5174,        // デフォルトのポート
        hmr: {
            host: 'localhost',  // ホスト側の IP アドレス
        }
    }
});
