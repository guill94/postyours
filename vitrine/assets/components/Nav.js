import React, { Fragment } from 'react';
import { Link } from 'react-router-dom';
import { useAuth } from '../contexts/AuthContext';
import logo from '../images/bsn.png';
import minilogo from '../images/Mini Logo.svg';
import globe from '../images/Planète.svg';
import fr from '../images/frenchflag.png';
import en from '../images/ukflag.png';
import { useTranslation } from 'react-i18next';
import {useCookies} from 'react-cookie'

const Nav = () => {
        
        const { currentUser, signOutAccount } = useAuth();
        const { t } = useTranslation('nav');
        const [cookies, setCookie] = useCookies(['i18next'])
        

        const handleFrench = () => {
        
                //let d = new Date();
                //d.setTime(d.getTime() + (minutes*60*1000));
                const lg = 'fr'
                setCookie("i18next", lg, {path: "/"});   
        }
        const handleEnglish = () => {
        
            //let d = new Date();
            //d.setTime(d.getTime() + (minutes*60*1000));
            const lg = 'en'
            setCookie("i18next", lg, {path: "/"});
    }

   

        return ( 
            <Fragment>
                <nav className="navbar navbar-expand-md navbar-dark top-nav">
                        <ul className="navbar-nav"> 
                            <li className="nav-item">
                                {!currentUser && <Link to="/signinr" className="nav-link"> {t('connexion', {ns: 'nav'})} </Link>}
                                {!currentUser && <Link to="/signupr" className="nav-link"> {t('inscription', {ns: 'nav'})} </Link>}
                                
                                {currentUser && <Link to="/profile" className="nav-link" > {currentUser && (currentUser.displayName ? currentUser.displayName : currentUser.email)} </Link>} 
                                {currentUser && <Link to="" className="nav-link" onClick={async e => {e.preventDefault(), signOutAccount()}} > {t('deconnexion', {ns: 'nav'})}  </Link>}
                                
                            </li>
                            
                        </ul>
                        <ul className="navbar-nav mx-auto">
                            
                            <li className="nav-item">
                                <Link to="/"><img src={logo} alt="BSNext"/></Link>
                            </li>
                        </ul>
                        <ul className="navbar-nav">
                            <li className="nav-item mr-1">
                                <img width="20em" src={globe} alt="FR" />
                            </li>
                            
                            <li className="nav-item">
                                <a href="" onClick={() => handleFrench()}><img src={fr} alt="FR" /></a>
                            </li>
                            <li className="nav-item">
                                <a className="flag" onClick={() => handleEnglish()} href=""><img src={en} alt="EN" /></a>    
                            </li>
                        </ul>
                </nav>

                <nav className="navbar sticky-top navbar-expand-xl navbar-light bottom-nav">
                    <div className="container-fluid">
                        <a className="navbar-brand" href="#"></a>
                        <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon"></span>
                        </button>
                       
                        <div className="collapse navbar-collapse margin-left" id="navbarNav">
                        
                            <ul className="navbar-nav mx-auto " >
                                <li className="nav-item">
                                    <a href="/" className="nav-link nav-link-bottom"><img width="18em" src={minilogo} alt="Logo" /></a>
                                </li>
                                <li className="nav-item">
                                    <a href="/" className="nav-link nav-link-bottom"><div><span className="bar"> I </span> {t('accueil', {ns: 'nav'})} </div></a>
                                </li>
                                <li className="nav-item">
                                    <a href="/#formation" className="nav-link nav-link-bottom"><div><span className="bar"> I </span>  {t('formation', {ns: 'nav'})} </div></a>
                                </li>
                                <li className="nav-item">
                                    <a href="/#dev" className="nav-link nav-link-bottom"><span className="bar"> I </span> {t('developpement', {ns: 'nav'})} </a>
                                </li>
                                <li className="nav-item">
                                    <a href="/#projet" className="nav-link nav-link-bottom"><span className="bar"> I </span> {t('projet', {ns: 'nav'})} </a>
                                </li>
                                <li className="nav-item">
                                    <a href="#" className="nav-link nav-link-bottom"><span className="bar"> I </span>Dashboarding</a>
                                </li>
                                <li className="nav-item">
                                    <Link to="/admin" className="nav-link nav-link-bottom"><span className="bar"> I </span>Admin</Link>
                                </li>
                                <li className="nav-item">
                                    <Link to="/questionnaire" className="nav-link nav-link-bottom"><span className="bar"> I </span>Quiz</Link>
                                </li>
                            </ul>
                            <ul className="navbar-nav">
                                <li className="nav-item">
                                    <Link to="/contact" refresh="true" onClick={() => {window.location.href="/contact"}} className="nav-link nav-link-bottom"><span className="bar"> I </span>Contact </Link>
                                </li>
                                <li className="nav-item">
                                    <a href="#" className="nav-link nav-link-bottom"><span className="bar">I </span> {t('recrutement', {ns: 'nav'})} </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </Fragment>
        )
    
}

export default Nav;
