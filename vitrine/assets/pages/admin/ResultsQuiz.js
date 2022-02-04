import React, {Fragment, useState, useEffect } from 'react';
import { useTranslation } from 'react-i18next';
import { useAuth } from '../../contexts/AuthContext';
import axios from 'axios';

const ResultsQuiz = () => {

    const [dataQuizNames, setDataQuizNames] = useState([]);
    const [quiz, setQuiz] = useState(null);
    const [questions, setQuestions] = useState([]);
    const [question, setQuestion] = useState([]);
    const [results, setResults] = useState([]);
    const [emails, setEmails] = useState([]);
    const [email, setEmail] = useState([]);
    const [id, setId] = useState('');  
    const [display, setDisplay] = useState(null);

    useEffect(() => {
        axios.post('http://127.0.0.1:8000/api/display_quiz_result_name')
       .then(response => {
          console.log(response.data)
          setDataQuizNames(response.data);
       });
    }, []);


    const handleUser = (value) => {
        setQuiz(value);
        axios({
            method: 'post',
            url: 'http://127.0.0.1:8000/api/display_quiz_user',
            data: {
                quiz: value,
            },
            headers: {
            'Access-Control-Allow-Origin': '*',
            'Content-Type': 'application/json',
            }
            }).then(response => {
            setEmails(response.data);
            
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
        setDisplay('users');
    }
    const handleGoBack = () => {
        setDisplay(null);
        setQuiz(null);
    }


    const handleResult = (e, value, value2) => {
        e.preventDefault();
        setId(value); 
        setEmail(value2);
          
        axios({
            method: 'post',
            url: 'http://127.0.0.1:8000/api/display_quiz_result',
            data: {
                quiz: quiz,
                id: value
            },
            headers: {
            'Access-Control-Allow-Origin': '*',
            'Content-Type': 'application/json',
            }
            }).then(response => {
            setResults(response.data);
            console.log(response.data);
            
        });
        setDisplay('result');
    }

    

    return (
        <Fragment>
            { display == null &&
                <Fragment>
                    <p className='text-center mt-3 display-4'>Veuillez choisir un questionnaire ci-dessous :</p>
                    <div className="text-center mt-5 container-fluid row">
                    
                        { dataQuizNames.map((dataQuizName, index) =>
                                            
                            <div className="mb-2 mt-1 col-xl-6 text-center" key={dataQuizName + index}>
                                <button className='button-more btn-block ml-2 mr-2' type="button" onClick={() => handleUser(dataQuizName)}>{dataQuizName}</button>
                            </div>
                        )}
                    </div>
                </Fragment>
            }

            {display == 'users' &&
               <Fragment>
                   <p className='container text-center display-4 mt-2 mb-5'>Séléctionnez un utilisateur :</p>

                   { emails.map((email, index) =>
                   <div className='container text-center mb-2' key = {email + index}>
                   <a href='' onClick={(e) => handleResult(e, email.id, email.email)}>{email.email}</a>
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

        </Fragment>
    )
}

export default ResultsQuiz
