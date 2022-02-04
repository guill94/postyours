import React, {Fragment} from 'react'
import { Link } from 'react-router-dom';
import img11 from '../images/img11.png';
import img12 from '../images/img12.png';
import img13 from '../images/img13.png';
import img14 from '../images/img14.png';
import img15 from '../images/img15.jpg';
import img16 from '../images/img16.jpg';

export const Formations = () => {
    
    return (

            <Fragment>
                <div className="main-container pt-1">
                        <div className="label-title">
                                <p>
                                FORMATIONS PROPOSÉES
                                </p>
                        </div>
                </div>
                        <div className="main-carousel">

                                <section id="slider">

                                <input type="radio" name="slider" id="s1" defaultChecked/>
                                <input type="radio" name="slider" id="s2" />
                                <input type="radio" name="slider" id="s3" />
                                <input type="radio" name="slider" id="s4" />
                                <input type="radio" name="slider" id="s5" />
                                <input type="radio" name="slider" id="s6" />

                                <label htmlFor="s1" id="slide1">
                                        <img src={img11} height="100%" width="100%"/>
                                </label>
                                <label htmlFor="s2" id="slide2">
                                        <img src={img12} height="100%" width="100%"/>
                                </label>
                                <label htmlFor="s3" id="slide3">
                                        <img src={img13} height="100%" width="100%"/>
                                        <div className="carousel-caption d-none d-md-block text-dark">
                                                <h5>Some Titile</h5>
                                                <p>Some Text here</p>
                                        </div>
                                </label>
                                <label htmlFor="s4" id="slide4">
                                        <img src={img14} height="100%" width="100%"/>
                                </label>
                                <label htmlFor="s5" id="slide5">
                                        <img src={img15} height="100%" width="100%"/>
                                </label>
                                <label htmlFor="s6" id="slide6">
                                        <img src={img16} height="100%" width="100%"/>
                                </label>
                                
                                </section>
                                
                        </div>
                <div className="main-container pt-5">
                        <div className="text-center">
                                <Link to=""><button className="button-more">Version imprimable</button></Link>
                                <p><Link to="/" onClick={() => {window.location.href="/"}}><button className="contact-form-button-back text-center" type="button" >Retour</button></Link></p>
                        </div>
                        
                </div>
                
            </Fragment>
        
    )
}

export default Formations;