import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/js/app.js'], // пути к основным входным файлам
      refresh: true, // чтобы автоматически перезагружать страницу
    }),
    vue(),
  ],
  server: {
    host: 'steam-knives.lar',
    port: 5174,
    strictPort: true,
    cors: {
      origin: '*',
      headers: ['Content-Type', 'Authorization'],
    },
    hmr: {
      host: 'steam-knives.lar',
    },
  },
})
