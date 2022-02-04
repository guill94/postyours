import React, { useState, useEffect } from "react";
import { useAuth } from "../contexts/AuthContext";
import { useTranslation } from 'react-i18next';
import {useFormik} from 'formik'
import * as Yup from 'yup'
//import {signInWithGoogle} from "../../firebase/Firebase"





const SignUpReact = () => {

    const { t } = useTranslation('auth');

    const validation = Yup.object({
        email: Yup.string()
        .email(t('signup.email invalide', {ns: 'auth'}))
        .required(t('signup.ce champ est requis', {ns: 'auth'})),
        password: Yup.string()
        //8 caractères Min, 1 Majuscule, 1 minuscule, 1 caractère spécial, 1 chiffre
        .matches(/^.*(?=.{8,})((?=.*[!@#$%^&*()\-_=+{};:,<.>]){1})(?=.*\d)((?=.*[a-z]){1})((?=.*[A-Z]){1}).*$/, t('signup.minimum', {ns: 'auth'}))
        .required(t('signup.ce champ est requis', {ns: 'auth'})),

        confirmedPassword: Yup.string()
        .oneOf([Yup.ref('password'), null], t('signup.mot de passe correspond pas', {ns: 'auth'}))
        .required(t('signup.ce champ est requis', {ns: 'auth'})),
        
    
    })


    const formik = useFormik({
        initialValues: {
            email: '',
            password: '',
            confirmedPassword: '',
        },
        onSubmit: (values)  => {

            console.log(JSON.stringify(values)); 

            const email = formik.values.email;
            const password= formik.values.password;
            

            register (email, password)
            .then((res) => console.log(res))
            .catch((error) => console.log(error.message))       
              
        },
        
        validationSchema: validation
    })
  
    
    const [isSubmitting, setIsSubmitting] = useState(false);
    const { register, signInWithGoogle } = useAuth();

    

  return (
    <div>
    
      <div className="login-form">
      <form onSubmit={formik.handleSubmit}>
          <h2 className="text-center form-type">{t('signup.inscription', {ns: 'auth'})}</h2>   
          <div className="form-group">
            <div className="input-group">
                  <div className="input-group-prepend">
                      <span className="input-group-text">
                          <span className="fa fa-user"></span>
                      </span>                    
                  </div>
                  <input value={formik.values.email} onChange={formik.handleChange} type="text" className="form-control" name="email" placeholder={t('signup.email', {ns: 'auth'})} />	 
                  
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
                  <input value={formik.values.password} onChange={formik.handleChange} type="password" className="form-control" name="password" placeholder={t('signup.mot de passe', {ns: 'auth'})} />
                  			
              </div>
              <small className="text-danger">{formik.touched.password && formik.errors.password}</small>	
          </div>
          <div className="form-group">
            <div className="input-group">
                  <div className="input-group-prepend">
                      <span className="input-group-text">
                          <span className="fa fa-lock"></span>
                      </span>                    
                  </div>
                  <input value={formik.values.confirmedPassword} onChange={formik.handleChange} type="password" className="form-control" name="confirmedPassword" placeholder={t('signup.mot de passe conf', {ns: 'auth'})} />	
                  		
              </div>
              <small className="text-danger">{formik.touched.confirmedPassword && formik.errors.confirmedPassword}</small>	
          </div>        
          <div className="form-group">
              <button type="submit" className="button-more-form btn-block">{t('signup.s\'inscrire', {ns: 'auth'})}</button>
          </div>
          
      <div className="or-seperator"><i>{t('signup.ou', {ns: 'auth'})}</i></div>
          <p className="text-center form-type">{t('signup.inscrivez vous avec vos réseaux', {ns: 'auth'})}</p>
          <div className="text-center social-btn">
              <a href="#" className="btn btn-secondary"><i className="fa fa-facebook"></i>&nbsp; Facebook</a>
              <a className="btn btn-info"><i className="fa fa-twitter"></i>&nbsp; Twitter</a>
        <a onClick={() => signInWithGoogle().then(user => console.log(user)).catch((error) => console.log(error))} className="btn btn-danger"><i className="fa fa-google"></i>&nbsp; Google</a>
          </div>
      </form>
      </div>
      </div>
  );
};

export default SignUpReact;