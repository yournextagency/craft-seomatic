import {createVuePlugin} from 'vite-plugin-vue2';
import ViteRestart from 'vite-plugin-restart';
import monacoEditorPlugin from 'vite-plugin-monaco-editor';
import {useDynamicPublicPath} from 'vite-plugin-dynamic-publicpath';
import {viteExternalsPlugin} from 'vite-plugin-externals';
import viteCompression from 'vite-plugin-compression';
import {visualizer} from 'rollup-plugin-visualizer';
import eslintPlugin from 'vite-plugin-eslint';
import {nodeResolve} from '@rollup/plugin-node-resolve';
import path from 'path';

// https://vitejs.dev/config/
export default ({command}) => ({
  base: command === 'serve' ? '' : '/dist/',
  build: {
    emptyOutDir: true,
    manifest: true,
    outDir: '../src/web/assets/dist',
    rollupOptions: {
      input: {
        'dashboard': 'src/js/dashboard.js',
        'content-seo': 'src/js/content-seo.js',
        'seomatic': 'src/js/seomatic.js',
        'seomatic-meta': 'src/js/seomatic-meta.js',
        'seomatic-tokens': 'src/js/seomatic-tokens.js',
        'javascript-editor': 'src/js/javascript-editor.js',
      },
      output: {
        sourcemap: true
      },
    }
  },
  plugins: [
    nodeResolve({
      moduleDirectories: [
        path.resolve('./node_modules'),
      ],
    }),
    ViteRestart({
      reload: [
        './src/templates/**/*',
      ],
    }),
    createVuePlugin(),
    viteExternalsPlugin({
      'vue': 'Vue',
    }),
    monacoEditorPlugin({
      //languages: ['css', 'html', 'javascript', 'json', 'twig', 'typescript'],
      globalAPI: true,
    }),
    useDynamicPublicPath(),
    viteCompression({
      filter: /\.(js|mjs|json|css|map)$/i
    }),
    visualizer({
      filename: '../src/web/assets/dist/stats.html',
      template: 'treemap',
      sourcemap: true,
    }),
    eslintPlugin({
      cache: false,
    }),
  ],
  publicDir: '../src/web/assets/public',
  resolve: {
    alias: {
      '@': path.resolve(__dirname, './src'),
      'vue': 'vue/dist/vue.esm.js',
    },
    preserveSymlinks: true,
  },
  server: {
    fs: {
      strict: false
    },
    host: '0.0.0.0',
    origin: 'http://localhost:3001/',
    port: 3001,
    strictPort: true,
  }
});
