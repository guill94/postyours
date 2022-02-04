import React, { Component, Fragment } from 'react';
import img3 from '../../images/img3.png';
import img4 from '../../images/img4.png';
import img5 from '../../images/img5.png';
import img6 from '../../images/img6.png';

class Main2 extends Component {

    render() {
        return (
            
            <Fragment>

                <div id="formation"></div>
                <div className="label-title">
                            <p>
                                FORMATION
                            </p>
                </div>
                <div className="row">
                    <div className="col-xl-6">
                        <img className="img" src={img3} alt="Image 3" />
                    </div>
                    <div className="col-xl-6">
                        
                        <div className="label-content-nbg">
                            <p className="mt-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit mollitia laborum in earum voluptatum ullam officiis accusamus expedita, aspernatur dolore sapiente quia aliquam! Molestias distinctio ut ea excepturi aliquid optio aut amet itaque expedita vitae explicabo nisi necessitatibus dignissimos, magni eum autem praesentium maiores quia alias. Eius autem nostrum, repudiandae facilis.
                            </p>

                            <div className="text-center"><button className="button-more">En savoir plus</button></div>
                        </div>
                    </div>
                </div>


                <div id="dev"></div>
                <div className="label-title">
                        <p>
                            DEVELOPPEMENT
                        </p>
                </div>
                <div className="row">
                    <div className="col-xl-6">
                    <img className="img" src={img4} alt="Image 4" />
                    </div>
                    <div className="col-xl-6">
                        
                        <div className="label-content-nbg">
                            <p className="mt-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit mollitia laborum in earum voluptatum ullam officiis accusamus expedita, aspernatur dolore sapiente quia aliquam! Molestias distinctio ut ea excepturi aliquid optio aut amet itaque expedita vitae explicabo nisi necessitatibus dignissimos, magni eum autem praesentium maiores quia alias. Eius autem nostrum, repudiandae facilis.
                            </p>

                            <div className="text-center"><button className="button-more">En savoir plus</button></div>
                        </div>
                    </div>
                </div>


                <div id="projet"></div>
                <div className="label-title">
                        <p>
                            PROJET
                        </p>
                </div>
                <div className="row">
                    <div className="col-xl-6">
                    <img className="img" src={img5} alt="Image 5" />
                    </div>
                    <div className="col-xl-6">
                        
                        <div className="label-content-nbg">
                            <p className="mt-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit mollitia laborum in earum voluptatum ullam officiis accusamus expedita, aspernatur dolore sapiente quia aliquam! Molestias distinctio ut ea excepturi aliquid optio aut amet itaque expedita vitae explicabo nisi necessitatibus dignissimos, magni eum autem praesentium maiores quia alias. Eius autem nostrum, repudiandae facilis.
                            </p>

                            <div className="text-center"><button className="button-more">En savoir plus</button></div>
                        </div>
                    </div>
                </div>



                <div className="">
                    <div className="label-title">
                            <p>
                                BUSINESS INTELLIGENCE
                            </p>
                    </div>
                    <div className="row">
                        <div className="col-xl-6">
                        <img className="img" src={img6} alt="Image 6" />
                        </div>
                        <div className="col-xl-6">
                            
                            <div className="label-content-nbg">
                                <p className="mt-5">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit mollitia laborum in earum voluptatum ullam officiis accusamus expedita, aspernatur dolore sapiente quia aliquam! Molestias distinctio ut ea excepturi aliquid optio aut amet itaque expedita vitae explicabo nisi necessitatibus dignissimos, magni eum autem praesentium maiores quia alias. Eius autem nostrum, repudiandae facilis.
                                </p>

                                <div className="text-center"><button className="button-more">En savoir plus</button></div>
                            </div>
                        </div>
                    </div>
                </div>

            </Fragment>
        )
    }
}

export default Main2;
