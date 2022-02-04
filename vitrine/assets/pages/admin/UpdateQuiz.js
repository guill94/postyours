import React, {Fragment, useState, useEffect } from 'react';
import { useParams, useNavigate } from 'react-router-dom';
import { useTranslation } from 'react-i18next';
import { useAuth } from '../../contexts/AuthContext';
import axios from 'axios';

const UpdateQuiz = () => {
    
    const navigation = useNavigate();

    const [nom, setNom] = useState('');
    const [question, setQuestion] = useState('');
    const [choix1, setChoix1] = useState('');
    const [choix2, setChoix2] = useState('');
    const [choix3, setChoix3] = useState('');
    const [choix4, setChoix4] = useState('');
    const [reponse, setReponse] = useState('');
    const [id, setId] = useState('');
    const [info, setInfo] = useState('');




    const [dataQuizNames, setDataQuizNames] = useState([]);
    const [quiz, setQuiz] = useState(null);
    const [display, setDisplay] = useState(null);
    const [questions, setQuestions] = useState([]);
    const [count, setCount] = useState(0);
    const [maxCount, setMaxCount] = useState(0);

    useEffect(() => {
        axios.post('http://127.0.0.1:8000/api/display_quiz')
       .then(response => {
          console.log(response.data)
          setDataQuizNames(response.data);
       });
    }, []);


    const handleGoBack = () => {
        setDisplay(null);
        setQuiz(null);
    }

    const handleQuiz = (value) => {
        setQuiz(value);
        axios({
            method: 'post',
            url: 'http://127.0.0.1:8000/api/display_questions',
            data: {
                quiz: value,
            },
            headers: {
            'Access-Control-Allow-Origin': '*',
            'Content-Type': 'application/json',
            }
            }).then(response => {
            setQuestions(response.data[1]);
            setMaxCount(response.data[0]);
            console.log(response.data[1]);
            setNom(response.data[1][0]['nom']);
            setQuestion(response.data[1][0]['question']);
            setChoix1(response.data[1][0]['choix1']);
            setChoix2(response.data[1][0]['choix2']);
            setChoix3(response.data[1][0]['choix3']);
            setChoix4(response.data[1][0]['choix4']);
            setReponse(response.data[1][0]['reponse']);
            setId(response.data[1][0]['id']);
            
        });
        setDisplay('quiz'); 
    }

    const refreshQuiz = () => {
        axios({
            method: 'post',
            url: 'http://127.0.0.1:8000/api/display_questions',
            data: {
                quiz: quiz,
            },
            headers: {
            'Access-Control-Allow-Origin': '*',
            'Content-Type': 'application/json',
            }
            }).then(response => {
            setQuestions(response.data[1]);
            setMaxCount(response.data[0]);
        });
    }

    const questionNext = (e) => {
        if (count === maxCount-1) {
            setCount(0);
            setInfo('');
            setNom(questions[0]['nom']);
            setQuestion(questions[0]['question']);
            setChoix1(questions[0]['choix1']);
            setChoix2(questions[0]['choix2']);
            setChoix3(questions[0]['choix3']);
            setChoix4(questions[0]['choix4']);
            setReponse(questions[0]['reponse']);
            setId(questions[0]['id']);
        }
        else {
            setCount(count+1);
            setInfo('');
            setNom(questions[count+1]['nom']);
            setQuestion(questions[count+1]['question']);
            setChoix1(questions[count+1]['choix1']);
            setChoix2(questions[count+1]['choix2']);
            setChoix3(questions[count+1]['choix3']);
            setChoix4(questions[count+1]['choix4']);
            setReponse(questions[count+1]['reponse']);
            setId(questions[count+1]['id']);
        }
    }
    const questionPrev = (e) => {
        if (count === 0) {
            setCount(maxCount-1);
            setInfo('');
            setNom(questions[maxCount-1]['nom']);
            setQuestion(questions[maxCount-1]['question']);
            setChoix1(questions[maxCount-1]['choix1']);
            setChoix2(questions[maxCount-1]['choix2']);
            setChoix3(questions[maxCount-1]['choix3']);
            setChoix4(questions[maxCount-1]['choix4']);
            setReponse(questions[maxCount-1]['reponse']);
            setId(questions[maxCount-1]['id']);
        }
        else {
            setCount(count-1);
            setInfo('');
            setNom(questions[count-1]['nom']);
            setQuestion(questions[count-1]['question']);
            setChoix1(questions[count-1]['choix1']);
            setChoix2(questions[count-1]['choix2']);
            setChoix3(questions[count-1]['choix3']);
            setChoix4(questions[count-1]['choix4']);
            setReponse(questions[count-1]['reponse']);
            setId(questions[count-1]['id']);
        }
    }

    const handleSubmit = (e) => {
        e.preventDefault();
        setInfo('');
            axios({
                method: 'post',
                url: 'http://127.0.0.1:8000/api/update_quiz',
                data: {
                    nom: nom,
                    question: question,
                    choix1: choix1,
                    choix2: choix2,
                    choix3: choix3,
                    choix4: choix4,
                    reponse: reponse,
                    id: id
                },
                headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
                }
                }).then(response => {
                setInfo(response.data);
                refreshQuiz(); 
            }) 
    }
    const deleteQuestion = (e) => {
        e.preventDefault();
        setInfo('');
         
        if (confirm('Confirmez la suppression de la question '+(count+1)+ '?')) {
                axios({
                    method: 'post',
                    url: 'http://127.0.0.1:8000/api/delete_question',
                    data: {
                        id: id,
                        nom: nom
                    },
                    headers: {
                    'Access-Control-Allow-Origin': '*',
                    'Content-Type': 'application/json',
                    }
                    }).then(response => {
                    setInfo(response.data);
                    refreshQuiz();
                    questionPrev(); 
                }) 
        }
    }

    const deleteQuiz = (e) => {
        e.preventDefault();
        setInfo('');
        if (confirm('Confirmez la suppression du quiz '+(nom)+ ' et des résultats?')) {
            axios({
                method: 'post',
                url: 'http://127.0.0.1:8000/api/delete_quiz',
                data: {
                    nom: nom
                },
                headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
                }
                }).then(response => {
                setInfo(response.data);
            }) 
        }
    }

    

    return (
        <div>
            { display == null &&
                <div className="text-center mt-5 container-fluid row">
                    { dataQuizNames.map((dataQuizName, index) =>
                                            
                        <div className="mb-2 mt-1 col-xl-6 text-center" key={dataQuizName + index}>
                            <button className='button-more btn-block ml-2 mr-2' type="button" onClick={() => handleQuiz(dataQuizName)}>{dataQuizName}</button>
                        </div>
                    )}
                </div>
            }


            { display == 'quiz' &&
                <form className="container mt-4" onSubmit={(e) => handleSubmit(e)}>
                    {quiz}
                    <div className='form-group'>
                        <label htmlFor="nom">Nom questionnaire :</label>
                        <input value={nom} onChange={(e) => setNom(e.target.value)}  className="form-control" type="text" name="nom" placeholder="Nom questionnaire" maxLength='20' disabled required />
                    </div>
                    <div className='form-group'>
                        <label htmlFor="question">Question {count+1} :</label>
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
                    <div className='text-center row'>
                        <div className='col-xl-6'>
                        <button type="button" className="button-more btn-block mb-4" onClick={(e) => questionPrev(e)}>Précédent</button>
                        </div>
                        <div className='col-xl-6'>
                        <button type="button" className="button-more btn-block mb-4" onClick={(e) => questionNext(e)}>Suivant</button>
                        </div>
                    </div>
                    
                    <div className='text-center row'>
                        <div className='col-xl-6'>
                        <button type="button" className="button-more btn-block mb-4" onClick={(e) => deleteQuestion(e)}>Supprimez cette question</button>
                        </div>
                        <div className='col-xl-6'>
                        <button type="button" className="button-more btn-block mb-4" onClick={(e) => deleteQuiz(e)}>Supprimer le Quiz</button>
                        </div>
                    </div>
                    <button type="submit" className="button-more btn-block mb-4">Enregistrer les changements</button>
                    <button type="button"  className="button-more btn-block mb-4">Retour</button>
                </form>
                
            }
        </div>
    )
}

export default UpdateQuiz
