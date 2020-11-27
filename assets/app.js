/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

import React from'react'; // chargement du package react

class Button extends React.Component{
    render(){
        return <button className="mon-button" >ce ci est un bouton</button>
    }
}
