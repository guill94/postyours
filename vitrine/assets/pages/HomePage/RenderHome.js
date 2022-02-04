import React, { Component } from 'react';
import Main1 from './Main1';
import Main2Formation from './Main2Formation';
import Main2Dev from './Main2Dev';
import Main2Projet from './Main2Projet';
import Main2Business from './Main2Business';
import Main3 from './Main3';
import Main4 from './Main4';
import Main2Comp from './Main2Comp';
import img6 from '../../images/img6.webp';

class RenderHome extends Component {

    render() {
        return (
            <div className="container-fluid main-container">
                <Main1 />
                <Main2Comp title="titre" image={img6} link="/formation" button="En savoir plus">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit mollitia laborum in earum voluptatum ullam officiis accusamus expedita, aspernatur dolore sapiente quia aliquam! Molestias distinctio ut ea excepturi aliquid optio aut amet itaque expedita vitae explicabo nisi necessitatibus dignissimos, magni eum autem praesentium maiores quia alias. Eius autem nostrum, repudiandae facilis.
                </Main2Comp>
                <Main2Formation />
                <Main2Dev />
                <Main2Projet />
                <Main2Business />
                <Main3 />
                <Main4 />
            </div>
        )
    }
}

export default RenderHome;
