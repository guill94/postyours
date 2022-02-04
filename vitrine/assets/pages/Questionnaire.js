import React, {Fragment, useState, useEffect, useRef } from 'react';
import { useTranslation } from 'react-i18next';
import { useAuth } from '../contexts/AuthContext';
import StopWatchDisplay from '../components/StopWatchDisplay';
import axios from 'axios';


const Questionnaire = () => {

    const { currentUser } = useAuth();
    const [total, setTotal] = useState(0);
    const [questions, setQuestions] = useState([]);
    const [question, setQuestion] = useState([]);
    const [count, setCount] = useState(0);
    const [dataQuizNames, setDataQuizNames] = useState([]);
    const [quiz, setQuiz] = useState();
    const [display, setDisplay] = useState(null);
    const [answer, setAnswer] = useState([]);
    const [check1, setCheck1] = useState(false);
    const [check2, setCheck2] = useState(false);
    const [check3, setCheck3] = useState(false);
    const [check4, setCheck4] = useState(false);
    const [loading, setLoading] = useState(true);

    const next = useRef(null);
    const prev = useRef(null);
    const submit = useRef(null);
    
    const quizName = (value) => {
        setQuiz(value);
        setDisplay('begin');
        
    };

    const handleQuiz = () => {
        setLoading(true);
        //startWatch();
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
            setTotal(response.data[0])
            setQuestion(response.data[1][0]);
            console.log(response.data[1]);
            setLoading(false);
            startWatch();
            
        });
        setDisplay('quiz');
        
    };
    const handleNext = (e) => {
        setCount(count+1);
        setQuestion(questions[count+1]);

        if (count+1 == total-1) {
            next.current.classList.add("hidden");
            submit.current.classList.remove("hidden");
        }
        if (count+1 == 1) {
            prev.current.classList.remove("hidden");
        }
        if (typeof answer[count+1] !== 'undefined') {
            const setCheck = eval('setCheck' + answer[count+1]['id']);
            setCheck(true);
            
            for (let i = 1; i <= 4; i ++) {
                const setCheck = eval('setCheck' + i);
                if (`${i}` !== answer[count+1]['id']) {
                setCheck(false);
                }
            }
        }
        if (typeof answer[count+1] == 'undefined' || answer[count+1] == null) {
            setCheck1(false);
            setCheck2(false);
            setCheck3(false);
            setCheck4(false);
            
        }
    };
    const handlePrev = (e) => {
        setCount(count-1);
        setQuestion(questions[count-1]);

        if (count-1 == 0) {
            prev.current.classList.add("hidden");
        }
        if (count-1 == total-2) {
            submit.current.classList.add("hidden");
            next.current.classList.remove("hidden");
        }
        if (typeof answer[count-1] !== 'undefined') {
           const setCheck = eval('setCheck' + answer[count-1]['id']);
            setCheck(true);
            for (let i = 1; i < 5; i ++) {
                const setCheck = eval('setCheck' + i);
                if (`${i}` !== answer[count-1]['id']) {
                setCheck(false);
                }
            }
        }
        if (typeof answer[count-1] == 'undefined' || answer[count-1] == null) {
            setCheck1(false);
            setCheck2(false);
            setCheck3(false);
            setCheck4(false);
        }
    };
    const handleGoBack = () => {
        setDisplay(null);
    };


    useEffect(() => {
        axios.post('http://127.0.0.1:8000/api/display_quiz')
       .then(response => {
          console.log(response.data)
          setDataQuizNames(response.data);
          setLoading(false);
       });
    }, []);

    const handleCheckbox = (e) => {
        const checked = e.target.checked;

        for (let i = 0; i<total; i++) {
            
            const setCheck = eval('setCheck' + e.target.id)
            if (e.target.name == i && checked) {
                setCheck(true);
                
                 answer[i] = {
                    'id': e.target.id,
                    'value': e.target.value,
                }
                setAnswer(answer);
                
            }
            else if (e.target.name == i && !checked) {
                setCheck(false);
            }
        }
    };
     

    const handleSubmit = (e) => {
        e.preventDefault();
        stopWatch();
            axios({
                method: 'post',
                url: 'http://127.0.0.1:8000/api/answer_quiz',
                data: {
                    questionnaire: quiz,
                    email: currentUser.email,
                    answer: answer,
                    time: time
                },
                headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
                }
            }).then(response => {
                window.location.href='/profile'
            })
    };

    //STOP WATCH
    const [time, setTime] = useState({ms:0, s:0, m:0, h:0});
    const [interv, setInterv] = useState();

    const startWatch = () => {
        run();
        setInterv(setInterval(run, 10));
      };

      const stopWatch = () => {
        clearInterval(interv);
      };

      var updatedMs = time.ms, updatedS = time.s, updatedM = time.m, updatedH = time.h;

      const run = () => {
        
        if(updatedM === 60){
          updatedH++;
          updatedM = 0;
        }
        if(updatedS === 60){
          updatedM++;
          updatedS = 0;
        }
        if(updatedMs === 100){
          updatedS++;
          updatedMs = 0;
        }
        updatedMs++;
        return setTime({ms:updatedMs, s:updatedS, m:updatedM, h:updatedH});
      };


    return (
        <Fragment>
            {loading == true && 
                            <div className={'row text-center mt-5 mb-5'}>
                                <span className="fa fa-spin fa-spinner fa-4x"></span>
                            </div>
            }
            { display == null && loading == false &&
                <Fragment>
                    <p className='text-center mt-3 display-4'>Veuillez choisir un questionnaire ci-dessous :</p>

                    <div className="text-center mt-5 container-fluid row">
                        { dataQuizNames.map((dataQuizName, index) =>
                                            
                            <div className="mb-2 mt-1 col-xl-6 text-center" key={dataQuizName + index}>
                                <button className='button-more btn-block ml-2 mr-2' type="button" onClick={() => quizName(dataQuizName)}>{dataQuizName}</button>
                            </div>
                        )}
                        
                    </div>
                </Fragment>
            }
            

            { display == 'begin' && loading == false &&
            <div className="text-center mt-2 mb-5">
                <p className='display-4'>Vous avez choisi le questionnaire {quiz}</p>
                <button className="button-more" onClick={() => handleQuiz()}>Commencer</button>
                <button className="button-more" onClick={() => handleGoBack()}>Retour</button>
            </div>
            }

            {display == 'quiz' && loading == false &&

                <form className='text-center mt-2 mb-5' onSubmit={(e) => handleSubmit(e)}>
                    <p className='display-4'>{quiz}</p>
               
                    <StopWatchDisplay time = { time } />                   
                    <div className="mb-3" >
                    <p className='quiz-question'>Question {count+1} : {question.question}</p>
                        
                        <input type="checkbox" value={question.choix1} id="1" checked={check1} name={count} onChange={(e) => handleCheckbox(e)}/>
                        <label className='ml-2 quiz-choice'>{question.choix1}</label> <br/>
                        <input type="checkbox" value={question.choix2} id="2" checked={check2} name={count} onChange={(e) => handleCheckbox(e)}/>
                        <label className='ml-2 quiz-choice'>{question.choix2}</label><br/>
                        <input type="checkbox" value={question.choix3} id="3" checked={check3} name={count} onChange={(e) => handleCheckbox(e)}/>
                        <label className='ml-2 quiz-choice'>{question.choix3}</label><br/>
                        <input type="checkbox" value={question.choix4} id="4" checked={check4} name={count} onChange={(e) => handleCheckbox(e)}/>
                        <label className='ml-2 quiz-choice'>{question.choix4}</label><br/>
                        <p>Votre réponse : {answer[count] && answer[count]['value']}</p>
                        
                        <p>Question {count+1} / {total}</p>
                        
                    </div>
                    {/*JSON.stringify(answer)}<br/>{JSON.stringify(answer[1])}<br/>{JSON.stringify(check1)}{JSON.stringify(check2)}{JSON.stringify(check3)}{JSON.stringify(check4)*/}
                    <div className=''>
                       
                            <button type='button' ref={prev} className="hidden button-more mr-2" onClick={(e) => handlePrev (e)}>Retour</button>
                            <button type='button' ref={next} className="button-more ml-2" onClick={(e) => handleNext(e)}>Suivant</button>
                            <button className="hidden button-more ml-2" ref={submit} type='submit'>Envoyer</button>
                        
                    </div>
                    
                    
                
                </form>
            }
        </Fragment>
    )
}

export default Questionnaire
