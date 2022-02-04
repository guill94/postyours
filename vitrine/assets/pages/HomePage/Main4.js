import React, { Fragment, useState, useEffect } from 'react';
import { useTranslation } from 'react-i18next';
import {Link} from 'react-router-dom';
import profil from '../../images/profil.png';
import star1 from '../../images/star1.png';
import star2 from '../../images/star2.png';
import star3 from '../../images/star3.png';
import star4 from '../../images/star4.png';
import star5 from '../../images/star5.png';
import { useAuth } from '../../contexts/AuthContext';
import axios from 'axios';
import { useStars } from "stars-rating-react-hooks";



export const Main4 = () => {
    //Traduction
    const { t } = useTranslation('homepage');

    //Date et heure
    const current = new Date();
    const date = `${current.getDate()<10 ? '0'+current.getDate() : current.getDate()}/${(current.getMonth()+1) <10 ? '0'+(current.getMonth()+1) : (current.getMonth()+1)}/${current.getFullYear()}`;
    const time =  `${current.getHours()}h${current.getMinutes() <10 ? '0'+current.getMinutes() : current.getMinutes()}`;

    //Contrôle Bouton et Auth
    const [button, setButton] = useState('showFeedback');
    const { currentUser, idToken } = useAuth();


    //State pour BDD
    const [prof, setProf] = useState('');
    const [message, setMessage] = useState('');
    const [info, setInfo] = useState('');
    const [dataDisplay, setDataDisplay] = useState([]);

  
    //Envoie Données Avis à BDD pour validation
    const handleSubmit = async (e) => {
        e.preventDefault();
        if (starr == "0") {
            setInfo('Choisisez une note / Select a grade');
        }
        else {
            await axios({
                method: 'post',
                url: 'http://127.0.0.1:8000/api/feedback_submit',
                data: {
                    UID: currentUser.uid,
                    nom: currentUser.displayName,
                    idToken: idToken,
                    photo: currentUser.photoURL,
                    prof: prof,
                    message: message,
                    note: starr,
                    date: `Le ${date} à ${time}`
                },
                headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
                }
                }).then(response => {
                setInfo(response.data);
                setProf('');
                setMessage('');
            })
        }
    }
	
    //Affiche les Avis au chargement
    useEffect(() => {
         axios.get('http://127.0.0.1:8000/api/feedback_disp')
        .then(response => {
           console.log(response.data)
           setDataDisplay(response.data);
        });
      }, []);
      
	//Notation avec étoiles
	  const config = {
    totalStars: 5,
    initialSelectedValue: 4,
    renderFull: "★",
    renderEmpty: "☆"
  };

  const {
    stars,
    getStarProps,
    getStarWrapperProps,
    isSelecting,
    selectingValue,
    selectedValue
  } = useStars(config);

  
  const [starr, setStarr] = useState('0');
  
   
  
        return (
            <Fragment>

                <div className="feedback-container pb-6">
                        
                        <div className="feedback-item-1">
                            <h2>{t('main4.votre avis compte', {ns: 'homepage'})}</h2>
                            
                            {button === 'leaveFeedback' ? 
                            <button className="button-more" onClick={() => setButton('showFeedback')}>{t('button.retour aux avis', {ns: 'homepage'})}</button>
                            :
                            <button className="button-more" onClick={() => setButton('leaveFeedback')}>{t('button.laissez le votre', {ns: 'homepage'})}</button>
                            }
                        </div>
                        

                    <div className="feedback-item-2 scroll-feedback-2 ">
                        
                            {button === 'leaveFeedback' ? 
                          
                                <div className=" text-center scroll-feedback-1 mt-5">
                                    {currentUser ? 
                                    <form onSubmit={(e) => handleSubmit(e)}>

                                        <img width="70em" className="mb-3" src={currentUser.photoURL ? currentUser.photoURL : profil} alt="Photo Profil"/> <br/>

                                        <input value={prof} onChange={(e) => setProf(e.target.value)} width="15em" className="mb-3" type="text" name="prof" placeholder={t('main4.profession', {ns: 'homepage'})} maxLength='20' required/><br/>
										
                                        <div className="App">
                                        
                                          <span
                                          {...getStarWrapperProps({
                                            style: {
                                            cursor: "pointer"
                                            }
                                          })}
                                          >
                                            {stars?.map((star, i) => (

                                            <span
                                            key={i}
                                            {...getStarProps(i, {
                                              style: {
                                              fontSize: "40px",
                                              color: "gold"
                                              },
                                              onClick: (event, ratedValue) => {setStarr(ratedValue);}
                                            })}
                                            >
                                            {star}
                                            </span>
                                          ))}
                                          </span>
                                        </div>

                                        <textarea value={message} onChange={(e) => setMessage(e.target.value)} name="message" id="" cols="60" rows="6" placeholder={t('main4.laissez votre avis', {ns: 'homepage'})} maxLength='250' required></textarea><br/>

                                        <small className='text-info mb-1'>{info}</small><br/>

                                        <button type="submit" className="button-more-gold">{t('button.envoyer', {ns: 'homepage'})}</button>

                                    </form>
                                    :
                                    <div className=" text-center scroll-feedback-1">
                                        <p>{t('main4.veuillez vous connecter', {ns: 'homepage'})} : <Link to="/signinr">{t('main4.se connecter', {ns: 'homepage'})}</Link></p>
                                    </div>
                                    }
                                </div>
                            
                            :

                                <div className=" m-auto">
                                    { dataDisplay.reverse().map((data, index) =>
                                    
                                        <div className="mb-3 feedback-item-3" key={data.uid + index}>

                                            <img src={data.photo ? data.photo : profil} alt="Photo Profil"/> 

                                            <strong><p>{data.nom}</p></strong>
                                            <i><p>{data.date}</p></i>

                                            <p>  {data.note == '1' && <img src={star1} /> } </p>
                                            <p>  {data.note == '2' && <img src={star2} /> } </p>
                                            <p>  {data.note == '3' && <img src={star3} /> } </p>
                                            <p>  {data.note == '4' && <img src={star4} /> } </p>
                                            <p>  {data.note == '5' && <img src={star5} /> } </p>

                                            <p><strong>Profession / Job :</strong> {data.profession}</p>
                                            <p><strong>Avis / Feedback :</strong> {data.message}</p>
                                        </div>
                                    )}
                            
                                </div>                  
                            }
                        
                    </div>

                </div>





                
            </Fragment>
        )
    
}

export default Main4;
