import React, {Fragment, useState, useEffect } from 'react';
import { useTranslation } from 'react-i18next';
import { useAuth } from '../contexts/AuthContext';
import axios from 'axios';

const ResultsQuizUser = () => {

    const {currentUser} = useAuth();

    const [dataQuizNames, setDataQuizNames] = useState(['null']);
    const [quiz, setQuiz] = useState(null);
    const [questions, setQuestions] = useState([]);
    const [question, setQuestion] = useState([]);
    const [results, setResults] = useState([]);
    const [ids, setIds] = useState([]);
    const [id, setId] = useState('');  
    const [email, setEmail] = useState([]);
    const [display, setDisplay] = useState(null);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        if (currentUser) {
            setEmail(currentUser.email);
            axios({
                method: 'post',
                url: 'http://127.0.0.1:8000/api/quiz_result_name_user',
                data: {
                    email: currentUser.email,
                },
                headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
                }
                }).then(response => {
                setDataQuizNames(response.data);
                if (response.data !== 'null') {
                    setDisplay('begin');
                }
                else {
                    setDisplay('null');
                }
                setLoading(false);
            });
        }
    }, [currentUser]);


    const handleId = (value) => {
        setQuiz(value);
        setLoading(true);
        axios({
            method: 'post',
            url: 'http://127.0.0.1:8000/api/display_quiz_id',
            data: {
                email: email,
                quiz: value,
            },
            headers: {
            'Access-Control-Allow-Origin': '*',
            'Content-Type': 'application/json',
            }
            }).then(response => {
            setIds(response.data);
            setLoading(false);
            setDisplay('ids');
            
        });
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
            console.log(response.data[1]);
           
            
        });
    }
    const handleGoBack = () => {
        setDisplay(null);
        setQuiz(null);
    }


    const handleResult = (e, value) => {
        e.preventDefault();
        setId(value); 
        setLoading(true);
          
        axios({
            method: 'post',
            url: 'http://127.0.0.1:8000/api/display_quiz_result_user',
            data: {
                quiz: quiz,
                id: value,
                email: email
            },
            headers: {
            'Access-Control-Allow-Origin': '*',
            'Content-Type': 'application/json',
            }
            }).then(response => {
            setResults(response.data);
            setLoading(false);
            setDisplay('result');
            
        });
        
    }


    return (
        <Fragment>
            
            { display == 'null' &&
                <Fragment>
                    <p className='text-center mt-3 display-4'>Veuillez choisir un questionnaire ci-dessous :</p>
                    <div className="text-center mt-5 container">
                        <p>Aucun résultat trouvé</p>
                    </div>
                </Fragment>
            }
            { display == 'begin'  &&
                <Fragment>
                    <p className='text-center mt-3 display-4'>Veuillez choisir un questionnaire ci-dessous :</p>
                    <div className="text-center mt-5 container-fluid row">
                        {dataQuizNames !== 'null' && dataQuizNames.map((dataQuizName, index) =>
                                            
                            <div className="mb-2 mt-1 col-xl-6 text-center" key={dataQuizName + index}>
                                <button className='button-more btn-block ml-2 mr-2' type="button" onClick={() => handleId(dataQuizName)}>{dataQuizName}</button>
                            </div>
                        
                        )}
                    </div>
                </Fragment>
            }


            {display == 'ids' &&
               <Fragment>
                   <p className='container text-center display-4 mt-2 mb-5'>Séléctionnez un résultat :</p>

                   { ids.map((id, index) =>
                   <div className='container text-center mb-2' key = {id + index}>
                   <a href='' onClick={(e) => handleResult(e, id)}>Résultat {index+1}</a>
                   </div>
                   )}

                </Fragment>
            }


            {display == 'result' &&
               <Fragment>
                   <p className='container text-center display-4 mt-2 mb-5'> {quiz} - {email}</p>

                   { questions.map((question, index) =>
                    <div className='container text-center' key={question + index}>
                        <p className="quiz-question">Question {index+1} : {question.question}</p>
                        
                        <p className='quiz-choice'>Réponse donnée : {eval('results.'+'repQuestion'+ `${index+1}`)}</p>
                        <p className='quiz-choice'>Bonne réponse : {question.repCorrect}</p>
                        <p className='text-info'>{eval('results.'+'question'+ `${index+1}`)}</p>
                   </div>
                   )}
                   <div className='container text-center mt-5'>
                        <p className='display-4'>Temps de réponse : {results.temps}</p>
                        <p className='display-4'>Score : {results.score} / {results.total}</p>
                   </div>
                  
                    

                </Fragment>
            }
            {loading == true && 
                            <div className={'row text-center mt-5 mb-5'}>
                                <span className="fa fa-spin fa-spinner fa-4x"></span>
                            </div>
            }

        </Fragment>
    )
}

export default ResultsQuizUser
