import { render } from '@wordpress/element';
import Admin from "./Admin";
import Frontend from "./Frontend";
import Table from './components/frontend/Table';
import Certificate from './components/frontend/Certificate';

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


const reactTable = document.getElementById('react-table');

if (reactTable) {
    render(<Table />, reactTable);
}



const CirtifigateTable = document.getElementById('student-cirtifigate');

if (CirtifigateTable) {
    render(<Certificate />, CirtifigateTable);
}