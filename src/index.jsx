import { render } from '@wordpress/element';
import Admin from "./Admin";
import Frontend from "./Frontend";

/**
 * Import the stylesheet for the plugin.
 */
import './style/main.scss';


const elementAdmin = document.getElementById('react-admin-root');

if (elementAdmin) {
    render(<Admin />, elementAdmin);
}


const elementFront = document.getElementById('react-frontend-root');

if (elementFront) {
    render(<Frontend />, elementFront);
}