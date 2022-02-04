import React, { Component, Fragment } from 'react';
import { useTranslation } from 'react-i18next';
import img6 from '../../images/img6.webp';
import img8 from '../../images/img8.webp';
import img9 from '../../images/img9.webp';
import img10 from '../../images/img10.webp';

const Main3 = () => {

    const { t } = useTranslation('homepage');
    
        return (
            <Fragment>

                <div className="entry-label">
                    <div className="row">
                        <div className="col-md-6">
                            <div className="text-center mt-4"><button className="button-more-gold mt-2">{t('button.en savoir plus', {ns: 'homepage'})}</button></div>
                        </div>
                        <div className="col-md-6 ">
                            <p className="text-center mt-5">{t('main3.conditions d\'entrées', {ns: 'homepage'})}</p>
                        </div>
                    </div>
                </div>

                <div className="mb-5">

                    <div className="row">


                        <div className="col-md-6">
                            <div className="text-center mt-5">
                                <a href="#"><img  src={img8} alt="Image 8" /></a>
                            </div>
                        
                        </div>

                        <div className="col-md-6">
                            <div className="text-center mt-5">
                                <a href="" className="text-center"><img src={img9} alt="Image 9" /></a>
                            </div>
                            
                        </div>


                    </div>

                </div>


                <div className="partner m-auto">
                    <div>
                        <img src={img10} alt="Image 10" />
                    </div>

                    <div className="partner-item">
                        <div className="text-center"><button className="button-more mt-3">{t('button.partenaires', {ns: 'homepage'})}</button></div>
                    </div>
                </div>

                
            </Fragment>
        )
    
}

export default Main3;
