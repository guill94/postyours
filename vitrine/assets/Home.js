import React, {Component} from 'react';
import {Route, Routes} from 'react-router-dom';
import Users from './components/Users';
import Posts from './components/Posts';
import Test from './components/Test';
import TestDisplay from './components/TestDisplay';
import Nav from './components/Nav';
import Footer from './components/Footer';
import RenderHome from './pages/HomePage/RenderHome';
import CreateQuiz from './pages/admin/CreateQuiz';
import UpdateQuiz from './pages/admin/UpdateQuiz';
import Dashboard from './pages/admin/Dashboard';
//import Main from './pages/HomePage/Main';
import Contact from './pages/Contact';
import SignUp from './auth/SignUp'
import SignIn from './auth/SignIn'
import SignUpReact from './auth/SignUpReact'
import SignInReact from './auth/SignInReact'
import Profile from './pages/Profile';
import Feedback from './pages/admin/Feedback';
import MentionsLegales from './pages/MentionsLegales';
import Questionnaire from './pages/Questionnaire';
import ResultsQuizUser from './pages/ResultsQuizUser';
import Formations from './pages/Formations';
import { useAuth } from './contexts/AuthContext';
import CookieConsent from 'react-cookie-consent';
import { useTranslation } from 'react-i18next';
import  { ProtectedRouteNotSignedIn, ProtectedRouteWhenSignedIn, ProtectedAdmin }  from './components/ProtectedRoute';
import Storage from './components/Storage';
import ResultsQuiz from './pages/admin/ResultsQuiz';


const Home = () => {
    
    const { currentUser } = useAuth();
    const { t } = useTranslation('homepage');

        return (
           <>
                <Nav />
                
                <Routes>
                    <Route exact from="/" to="/users" /> 
                    <Route exact path="/" element={<RenderHome />} />
                    <Route path="/users" element={<Users />} />
                    <Route path= "/posts" element={<Posts />} />
                    <Route path="/tests" element={<Test />} />
                    <Route path="/testsD" element={<TestDisplay />} />
                    <Route path="/contact" element={<Contact />} />
                    <Route path="/signup" element={<SignUp />} />
                    <Route path="/signin" element={<SignIn />} />
                        
                    

                    <Route element={<ProtectedRouteWhenSignedIn/>}>
                        <Route path= "/signupr" element={<SignUpReact />} />
                        <Route path="/signinr" element={<SignInReact />} />
                    </Route>

                    <Route element={<ProtectedRouteNotSignedIn/>}> 
                        <Route path="/profile" element={<Profile />} />
                        <Route path="/questionnaire" element={<Questionnaire />} />
                        <Route path="/resultats" element={<ResultsQuizUser />} />
                    </Route>
                    <Route element={<ProtectedAdmin/>}> 
                        <Route path="/nouveau_quiz" element={<CreateQuiz />} />
                        <Route path="/admin" element={<Dashboard />} />
                        <Route path="/result_quiz" element={<ResultsQuiz />} />
                        <Route path="/modifier_quiz" element={<UpdateQuiz />} />
                        <Route path="/admin_feedback" element={<Feedback />} />
                    </Route>
                    
                    <Route path="/mentions_legales" element={<MentionsLegales />} />
                    <Route path="/formations_proposees" element={<Formations />} />
                    <Route path="/sto" element={<Storage />} />
                    
                </Routes>

                {<CookieConsent 
                    debug={false}
                    location="bottom"
                    style={{ background: '#313131', textAlign: 'center', marginBottom: '15px'}}
                    buttonStyle={{ color: '#fff', background: '#C2912E', fontSize: '20px', marginRight: '2em' }}
                    buttonText={t('cookies.4', {ns: 'homepage'})}
                    expires={7}
                >

                    {t('cookies.1', {ns: 'homepage'})} <a href="/mentions_legales">{t('cookies.2', {ns: 'homepage'})}</a> {t('cookies.3', {ns: 'homepage'})}

                </CookieConsent>}

                <Footer />
           </>
        )
    
}


    
export default Home;