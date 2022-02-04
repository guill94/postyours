import React, {useState}  from 'react'
import { Link } from 'react-router-dom';
import { useTranslation } from 'react-i18next';
import { useFormik } from 'formik'
import * as Yup from 'yup'
import axios from 'axios';



const validation = Yup.object({
    name: Yup.string()
    .max(15, '15 caractères maximum')
    .required('Ce champ est requis'),
    firstname: Yup.string()
    .max(15, '15 caractères maximum')
    .required('Ce champ est requis'),
    email: Yup.string()
    .email('Email invalide')
    .required('Ce champ est requis'),
    phone: Yup.string()
    .max(15, '15 caractères maximum')
    .min(10, '10 caractères minimum')
    .required('Ce champ est requis')
    .matches(/^[1-9]+$/, 'Invalide'),
    companyName: Yup.string(),
    companyAddress: Yup.string(),
    job: Yup.string()
    .required('Ce champ est requis'),
    message: Yup.string()
    .required('Ce champ est requis')

})

export const Contact = () => {

    const { t } = useTranslation('contact');
    const [msg, setMsg] = useState('');
        
        const formik = useFormik({
            initialValues: {
                name: '',
                firstname: '',
                email: '',
                phone: '',
                companyName: '',
                companyAddress: '',
                job: '',
                message: '',
            },
            onSubmit: (values)  => {

                console.log(JSON.stringify(values));

                axios({
                    method: 'post',
                    url: 'http://127.0.0.1:8000/api/contacts',
                    data: {
                        name: formik.values.name,
                        firstname: formik.values.firstname,
                        email: formik.values.email,
                        phone: formik.values.phone,
                        companyName: formik.values.companyName,
                        companyAddress: formik.values.companyAddress,
                        job: formik.values.job,
                        message: formik.values.message,
                    },
                    headers: {
                      'Access-Control-Allow-Origin': '*',
                      'Content-Type': 'application/json',
                    }
                    }).then(response => {
                    console.log(response.data);
                    setMsg(response.data);
                })
                formik.resetForm();
            },
            
            validationSchema: validation
        })
    

        return (
           
                
            <div className=" contact-form-main-container contact-form-control">
                <h3 className="text-center contact-form-title">{t('Pour nous contacter, veuillez remplir ce formulaire', {ns: 'contact'})}</h3>
                <div className="contact-form-container">
                    
                    <form className="contact-form-control" onSubmit={formik.handleSubmit}>

                        <input  className=" int form-control shadow-none" placeholder={t('nom', {ns: 'contact'})} name="name" type="text" value={formik.values.name} onChange={formik.handleChange} />
                        <small className="text-danger margin">{formik.touched.name && formik.errors.name}</small>
                        
                        <input className="form-control mt-4 shadow-none" placeholder={t('prenom', {ns: 'contact'})} name="firstname" type="text" value={formik.values.firstname} onChange={formik.handleChange}/>
                        <small className="text-danger">{formik.touched.firstname && formik.errors.firstname}</small>

                        <input className="form-control mt-4 shadow-none" placeholder={t('email', {ns: 'contact'})} name="email" type="text" value={formik.values.email} onChange={formik.handleChange}/>
                        <small className="text-danger">{formik.touched.email && formik.errors.email}</small>

                        <input className="form-control mt-4 shadow-none" placeholder={t('telephone', {ns: 'contact'})} name="phone" type="text" value={formik.values.phone} onChange={formik.handleChange}/>
                        <small className="text-danger">{formik.touched.phone && formik.errors.phone}</small>

                        <input className="form-control mt-4 shadow-none" placeholder={t('nom de l\'entreprise', {ns: 'contact'})} name="companyName" type="text" value={formik.values.companyName} onChange={formik.handleChange}/>
                        <small className="text-danger">{formik.touched.companyName && formik.errors.companyName}</small>

                        <input className="form-control mt-4 shadow-none" placeholder={t('adresse de l\'entreprise', {ns: 'contact'})} name="companyAddress" type="text" value={formik.values.companyAddress} onChange={formik.handleChange}/>
                        <small className="text-danger ">{formik.touched.companyAddress && formik.errors.companyAddress}</small>

                        <input className="form-control mt-4 shadow-none" placeholder={t('poste occupé', {ns: 'contact'})} name="job" type="text" value={formik.values.job} onChange={formik.handleChange}/>
                        <small className="text-danger">{formik.touched.job && formik.errors.job}</small>

                        <textarea className="form-control mt-4 shadow-none" placeholder={t('votre message', {ns: 'contact'})} name="message" id="message" cols="80" rows="10" value={formik.values.message} onChange={formik.handleChange}></textarea>
                        <small className="text-danger">{formik.touched.message && formik.errors.message}</small>
                        <br/>
                        {msg && <h4 className="alert alert-primary" role="alert">{msg}</h4>}
                        <button className="contact-form-button" type="submit" >{t('envoyer', {ns: 'contact'})}</button>
                        <p><Link to="/mentions_legales" className="text-center contact-form-title">{t('nous respectons votre vie privée', {ns: 'contact'})}</Link></p>

                    </form>
                </div>
                <Link to="/" onClick={() => {window.location.href="/"}}><button className="contact-form-button-back" type="button" >{t('retour', {ns: 'contact'})}</button></Link>
            </div>
               

            
        )
    
}

export default Contact