import React, { useState, useEffect } from "react";
import { useAuth } from "../contexts/AuthContext";
import { useNavigate } from 'react-router-dom';
import { useTranslation } from 'react-i18next';
import {useFormik} from 'formik';
import * as Yup from 'yup';







const SignInReact = () => {

    const { t } = useTranslation('auth');
    const navigation = useNavigate();
    const [error, setError] = useState('');
    const [info, setInfo] = useState('');
    
    /*useEffect(() => {
        if  (currentUser !== null) {
            navigation('/')
        }
        })*/
        const validation = Yup.object({
            email: Yup.string()
            .email(t('signin.email invalide', {ns: 'auth'}))
            .required(t('signin.ce champ est requis', {ns: 'auth'})),
            password: Yup.string()
            .min(6, t('signin.6 caracteres mini', {ns: 'auth'}))
            .required(t('signin.ce champ est requis', {ns: 'auth'})),
          })
   
    
  const formik = useFormik({
    initialValues: {
        email: '',
        password: '',
    },

    onSubmit: (values)  => {

        const email = formik.values.email;
        const password= formik.values.password;
        

        signIn (email, password)
        .then((res) => {
            console.log(res);
            navigation('/');
            
        })
        .catch((error) => {
            console.log(error.message);
            setError(t('signin.mauvaise adresse ou mot de passe', {ns: 'auth'}))
        })       
        
          
    },
    
    validationSchema: validation
})
  
  const {currentUser} = useAuth();
   
    const [isSubmitting, setIsSubmitting] = useState('false');
    const { signIn, signInWithGoogle, signInWithFacebook, forgotPassword } = useAuth();

   const resetPassword = () => {
       const email = formik.values.email;

       if (email === '') {
           setError('');
           setError('Entrez d\'abord votre email / Please enter your email first');
       }
       else {
        forgotPassword(email)
        .then((res) => {
            console.log(res);
            setError('');
            setInfo('Email envoyé à votre adresse / An email\'s been sent to your address');
        })
        .catch((error) => {
            console.log(error.message);
            setInfo('Email invalide / Invalid email ')
        }) 
        
        
       }

       
   }

  return (
    
     
<div>
    <div>
        <div className="login-form">
            <form onSubmit={formik.handleSubmit}>
                <h2 className="text-center form-type">{t('signin.connexion', {ns: 'auth'})}</h2>   
                <div className="form-group">
                    <div className="input-group">
                        <div className="input-group-prepend">
                            <span className="input-group-text">
                                <span className="fa fa-user"></span>
                            </span>                    
                        </div>
                        <input value={formik.values.email} onChange={formik.handleChange} type="text" className="form-control" name="email" placeholder={t('signin.email', {ns: 'auth'})} />	 
                        
                    </div>
                    <small className="text-danger">{formik.touched.email && formik.errors.email}</small>	
                </div>
                <div className="form-group">
                    <div className="input-group">
                        <div className="input-group-prepend">
                            <span className="input-group-text">
                                <i className="fa fa-lock"></i>
                            </span>                    
                        </div>
                        <input value={formik.values.password} onChange={formik.handleChange} type="password" className="form-control" name="password" placeholder={t('signin.mot de passe', {ns: 'auth'})} />
                                    
                    </div>
                    <small className="text-danger">{formik.touched.password && formik.errors.password}</small>
                    <small className="text-danger">{error}</small>
                        
                </div>
                        
                <div className="form-group">
                    <button type="submit" className="button-more-form btn-block">{t('signin.se connecter', {ns: 'auth'})}</button>
                </div>
                <small className="text-info">{info}</small>
                <div className="clearfix">
                    <label className="float-left form-check-label"></label>
                    <a href="#" onClick={() => resetPassword()} className="float-right form-type">{t('signin.mot de passe oublié', {ns: 'auth'})}</a>
                </div>
                <div className="or-seperator"><i>{t('signin.ou', {ns: 'auth'})}</i></div>
                    <p className="text-center form-type">{t('signin.connectez vous avec vos réseaux', {ns: 'auth'})}</p>
                <div className="text-center social-btn">
                    <a onClick={() => signInWithFacebook().then(user => console.log(user)).catch((error) => console.log(error))} className="btn btn-secondary"><i className="fa fa-facebook"></i>&nbsp; Facebook</a>
                    <a href="#" className="btn btn-info"><i className="fa fa-twitter"></i>&nbsp; Twitter</a>
                    <a onClick={() => signInWithGoogle().then(user => console.log(user)).catch((error) => console.log(error))} className="btn btn-danger"><i className="fa fa-google"></i>&nbsp; Google</a>
                </div>
            </form>
            <p className="text-center text-muted  form-type">{t('signin.pas encore de compte', {ns: 'auth'})} <a href="/signupr">{t('signin.inscrivez vous ici', {ns: 'auth'})}</a></p>
        </div>
    </div>
</div>
     
  );
};

export default SignInReact;