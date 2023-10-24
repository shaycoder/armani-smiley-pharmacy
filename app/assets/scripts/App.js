import '../styles/styles.css';
import MobileMenu from './modules/MobileMenu';
import { emojiCursor } from "cursor-effects";
import AOS from 'aos';

new MobileMenu();
new emojiCursor({ emoji: ["😊"] });

AOS.init({
    duration: 1200
});

if(module.hot) {
    module.hot.accept()
}