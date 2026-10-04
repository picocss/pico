// import twig from 'vite-plugin-twigjs-loader';
import path from 'path';

export default {
  plugins: [
    // twig({
    //   namespaces: {
    //     '@components': path.resolve(__dirname, '../stories/html'),
    //     '@macros': path.resolve(__dirname, '../stories/macros')
    //   }
    // })
  ],

  resolve: {
    alias: {
      // '@': path.resolve(__dirname, '../stories')
    }
  },

  publicDir: '../static'
};
