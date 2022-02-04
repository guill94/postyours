import React, { useState, useEffect } from 'react';
import { useAuth } from '../../contexts/AuthContext';
import axios from 'axios';
import profil from '../../images/profil.png';
import star1 from '../../images/star1.png';
import star2 from '../../images/star2.png';
import star3 from '../../images/star3.png';
import star4 from '../../images/star4.png';
import star5 from '../../images/star5.png';


const Feedback = () => {

    const [dataDisplay, setDataDisplay] = useState([]);
    const [update, setUpdate] = useState(0);
    const [id, setId] = useState('');
    const [display, setDisplay] = useState([]);
    const [info, setInfo] = useState('');
    const { idToken } = useAuth();

    useEffect(() => {
        axios.post('http://127.0.0.1:8000/api/feedback_disp_admin')
       .then(response => {
          setDataDisplay(response.data);
          if (response.data === 'null') {
            setDisplay('none');
          }
          else {
              setDisplay('some');
          }
       });
     }, [update]);

     const validateFeedback = (value) => {
        setInfo('');
         if (confirm('Êtes vous sûr de vouloir valider ce commentaire ?')) {
            axios({
                method: 'post',
                url: 'http://127.0.0.1:8000/api/feedback_validate',
                data: {
                    id: value,
                    idToken: idToken,
                },
                headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
                }
                }).then(response => {
                    setInfo(response.data);
                    if (update === 0) {
                        setUpdate(1);
                    }
                    else {
                        setUpdate(0);
                    }     
            })
        }
     }

     const deleteFeedback = (value) => {
        setInfo('');
        if (confirm('Êtes vous sûr de vouloir supprimer ce commentaire ?')) {
            axios({
                method: 'post',
                url: 'http://127.0.0.1:8000/api/feedback_delete',
                data: {
                    id: value,
                    idToken: idToken,
                },
                headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
                }
                }).then(response => {
                    setInfo(response.data);
                    if (update === 0) {
                        setUpdate(1);
                    }
                    else {
                        setUpdate(0);
                    }
            })
        }
     }

    return (
        <div>
            <p className='container mt-4 mb-4 text-center alert-info'>{info}</p>
            <div className="container feedback-item-2 scroll-feedback-2 mt-5 mb-5">
            {display === 'none' ?
                    <p className='text-center mt-5'>Aucun commentaire en attente</p>
            :
                
                <div className=" m-auto">
                    {dataDisplay !== 'null' && dataDisplay.map((data, index) =>
                    
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
                        
                            {data.message !== 'default' &&
                            <div>
                                <button className='button-more-form' onClick={() => validateFeedback(data.id)}>Valider</button>
                                <button className='button-more-form ml-2' onClick={() => deleteFeedback(data.id)}>Supprimer</button>
                            </div>
                            }
                        
                        </div>
                    )}
            
                </div> 
            }
                
            </div>
        </div>
    )
}

export default Feedback
