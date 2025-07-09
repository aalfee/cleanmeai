import { defineConfig } from 'vite';

export default defineConfig({
  root: '../', // Set the root to _public_html
  publicDir: '', // Disable Vite's default public dir
  server: {
    open: '/index.html',
  },
  build: {
    outDir: 'dist',
    emptyOutDir: true,
  },
});
