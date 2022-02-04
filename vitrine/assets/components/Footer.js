import React, { Component, Fragment } from 'react';
import { Link } from 'react-router-dom';
import minilogo from '../images/Mini Logo.svg'
import fb from '../images/fb.png';
import tw from '../images/tw.png';
import lin from '../images/in.png';
import { useTranslation } from 'react-i18next';


export const Footer = () => {

    const { t } = useTranslation('footer');
   
        return (
            <Fragment>
              
                <footer className="page-footer font-small blue-grey lighten-5">

                    <div>
                        <div className="container-fluid footer-container-1">

                        
                            <div className=" row justify-content-center dark-grey-text">

                            
                                <div className=" footer-container-2-item">
                                    
                                    <p>CONTACT</p>
                                    <p>0666666666</p>
                                    <p>contact@bsn.com</p>

                                </div>
                                

                                
                                <div className="text-center footer-container-2-item">

                                
                                    <p>{t('abonnez-vous à notre newsletter', {ns: 'footer'})} </p>
                                    <input className="newsletter" placeholder="Votre email" type="text" /> <button className="newsletter-button"  type="submit"> {t('valider', {ns: 'footer'})} </button>

                                </div>
                                

                                
                                <div className=" footer-container-2-item">
                                    
                                    <p>{t('notre adresse', {ns: 'footer'})} </p>
                                    <p>00 RUE DE NUL PART</p>
                                    <p>00000 VILLE</p>

                                </div>
                            
                            </div>
                        

                        </div>
                    </div>

                
                    <div className=" text-center footer-container-2 pb-1">

                        
                        <div className="text-center mt-3 dark-grey-text">

                            <img className="pb-2" width="25em" src={minilogo} alt="Logo" />

                            <div className="border-footer"> {t('retrouvez nous sur les réseaux sociaux', {ns: 'footer'})} </div>

                            <a href="#" className="fb-ic">
                                <img src={fb} alt="Facebook" />
                            </a>
            
                            <a href="#" className="tw-ic">
                                <img src={tw} alt="Twitter" />
                            </a>
                            
                            <a href="#" className="tw-ic">
                                <img src={lin} alt="Linkedin" />
                            </a>
                        
                        </div>
                    

                    </div>
                

                
                    <div className=" footer-copyright text-center text-black-50 py-3 footer-container-3">
                        <Link className="" to="/mentions_legales">{t('mentions legales', {ns: 'footer'})}</Link>
                        <Link className="" to="#">{t('plan du site', {ns: 'footer'})}</Link>
                        <Link className="" to="#">{t('preferences cookies', {ns: 'footer'})}</Link>
                        <Link className="" to="#">{t('reunions', {ns: 'footer'})}</Link>
                        <Link className="" to="#">{t('evenements', {ns: 'footer'})}</Link>
                        <Link className="" to="#">CONTACT</Link>        
                    </div>
                

                </footer>

            </Fragment>
        )
    
}

export default Footer;
