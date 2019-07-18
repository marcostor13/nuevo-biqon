import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Header extends Component {
    render() {
        return (
            <header>
                <div className="col-12 bg-dark text-white">
                    <h3 className="p-4">Biqon - Creación de URL</h3>
                </div>
            </header>
        )
    }
}

if (document.getElementById('header')) {
    ReactDOM.render(<Header />, document.getElementById('header'));
}
