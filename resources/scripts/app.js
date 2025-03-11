import domReady from '@roots/sage/client/dom-ready';
import './vendor/splide'
import './components/faq-animation'
/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
