import React, { useState } from 'react';
import { useAuth } from '../../contexts/AuthContext';
import axios from 'axios';

const CreateQuiz = () => {

    const [nom, setNom] = useState('');
    const [question, setQuestion] = useState('');
    const [choix1, setChoix1] = useState('');
    const [choix2, setChoix2] = useState('');
    const [choix3, setChoix3] = useState('');
    const [choix4, setChoix4] = useState('');
    const [reponse, setReponse] = useState('');
    const [info, setInfo] = useState('');

    const { idToken } = useAuth();


    //Envoie Données à BDD
    const handleSubmit = (e) => {
        e.preventDefault();
        setInfo('');
            axios({
                method: 'post',
                url: 'http://127.0.0.1:8000/api/create_quiz',
                data: {
                    nom: nom,
                    question: question,
                    choix1: choix1,
                    choix2: choix2,
                    choix3: choix3,
                    choix4: choix4,
                    reponse: reponse,
                    idToken: idToken
                },
                headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
                }
                }).then(response => {
                setInfo(response.data);

                setQuestion('');
                setChoix1('');
                setChoix2('');
                setChoix3('');
                setChoix4('');
                setReponse(''); 
            })
        
    }



    return (
        <form className="container mt-4" onSubmit={(e) => handleSubmit(e)}>
            <div className='form-group'>
                <label htmlFor="nom">Nom questionnaire :</label>
                <input value={nom} onChange={(e) => setNom(e.target.value)}  className="form-control" type="text" name="nom" placeholder="Nom questionnaire" maxLength='20' required />
            </div>
            <div className='form-group'>
                <label htmlFor="question">Question :</label>
                <input value={question} onChange={(e) => setQuestion(e.target.value)}  className="form-control" type="text" name="question" placeholder="Question" maxLength='80' required />
            </div>
            <div className='form-group'>
                <label htmlFor="choix1">Choix 1 :</label>
                <input value={choix1} onChange={(e) => setChoix1(e.target.value)}  className="form-control" type="text" name="choix1" placeholder="Choix 1" maxLength='40' required />
            </div>
            <div className='form-group'>
                <label htmlFor="choix2">Choix 2 :</label>
                <input value={choix2} onChange={(e) => setChoix2(e.target.value)}  className="form-control" type="text" name="choix2" placeholder="Choix 2" maxLength='40' required />
            </div>
            <div className='form-group'>
                <label htmlFor="choix3">Choix 3 :</label>
                <input value={choix3} onChange={(e) => setChoix3(e.target.value)}  className="form-control" type="text" name="choix3" placeholder="Choix 3" maxLength='40' required />
            </div>
            <div className='form-group'>
                <label htmlFor="choix4">Choix 4 :</label>
                <input value={choix4} onChange={(e) => setChoix4(e.target.value)}  className="form-control" type="text" name="choix4" placeholder="Choix 4" maxLength='40' required />
            </div>
            <div className='form-group'>
                <label htmlFor="reponse">Bonne réponse :</label>
                <input value={reponse} onChange={(e) => setReponse(e.target.value)}  className="form-control" type="text" name="reponse" placeholder="Bonne réponse (1, 2, 3 ou 4)" maxLength='1' required />
            </div>

            <small className='text-info mb-2 mt-2'>{info}</small><br/>

            <button type="submit" className="button-more btn-block mb-4">Envoyer</button>
        </form>
    )
}

export default CreateQuiz
