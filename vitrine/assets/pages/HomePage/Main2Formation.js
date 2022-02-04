import React, { Fragment, useRef, useEffect } from 'react';
import { useTranslation } from 'react-i18next';
import { Link } from 'react-router-dom';
import img3 from '../../images/img3.webp';


function Main2Formation () {

    const { t } = useTranslation('homepage');

    const imgFormation = useRef(null);
    const col2 = useRef(null);
    const col1 =useRef(null);
   

    const showTxt = () => {
        col2.current.classList.remove("hidden");
        col1.current.classList.add("col-xl-6");
        col1.current.classList.remove("container");
        col2.current.classList.add("col-xl-6"); 
    }

    const hideTxt = () => {   
        col2.current.classList.add("hidden");
        col1.current.classList.remove("col-xl-6");
        col1.current.classList.add("container");
        col2.current.classList.remove("col-xl-6");
    }

    /*useEffect(() => {
        window.scrollTo(500, 500);
     }, []);*/
   

        return (
            
            <Fragment>

                <div id="formation"></div>
                <div className="label-title">
                    <p>
                        {t('main2.formation', {ns: 'homepage'})}
                    </p>
                </div>

                <div onMouseOver={showTxt} onMouseLeave={hideTxt} className="row align-items-center">
                    <div ref={col1} className="container">
                        <img ref={imgFormation} className="img" src={img3} alt="Image 3" />
                    </div>
                    <div ref={col2}  className="hidden">
                        
                        <div className="label-content-nbg">
                            <p className="mt-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit mollitia laborum in earum voluptatum ullam officiis accusamus expedita, aspernatur dolore sapiente quia aliquam! Molestias distinctio ut ea excepturi aliquid optio aut amet itaque expedita vitae explicabo nisi necessitatibus dignissimos, magni eum autem praesentium maiores quia alias. Eius autem nostrum, repudiandae facilis.
                            </p>

                            <div className="text-center"><Link to="/formations_proposees"><button className="button-more">{t('button.en savoir plus', {ns: 'homepage'})}</button></Link></div>
                        </div>
                    </div>
                </div>


            </Fragment>
        )
    
}

export default Main2Formation;
