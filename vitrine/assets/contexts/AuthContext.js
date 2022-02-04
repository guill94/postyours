import React, {createContext, useContext, useEffect, useState } from "react";
import { auth } from '../firebase/Firebase';
import { createUserWithEmailAndPassword, signInWithEmailAndPassword, signInWithPopup, GoogleAuthProvider, FacebookAuthProvider, signOut, onAuthStateChanged, sendPasswordResetEmail, getIdToken} from 'firebase/auth';
import axios from 'axios';

const AuthContext = createContext({
    currentUser: null,
    admin: null,
    idToken: null,
    register: () => Promise,
    signIn: () => Promise,
    signInWithGoogle: () => Promise,
    signInWithFacebook: () => Promise,
    signOutAcccount: () => Promise,
    forgotPassword: () => Promise,
});

export const useAuth = () => useContext(AuthContext);

export default function AuthContextProvider({children}) {

    const [currentUser, setCurrentUser] = useState(null);
    const [idToken, setIdToken] = useState(null);
    const [admin, setAdmin] = useState(false);
    

    useEffect(() => {
        const unsubscribe = onAuthStateChanged(auth, user => {
            setCurrentUser(user);

            if (user) {
            token(user);
            }
            if (user && idToken !== null) {
            axios({
                method: 'post',
                url: 'http://127.0.0.1:8000/api/admin',
                data: {
                    email: user.email,
                    idToken: idToken
                },
                headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
                }
                }).then(response => {
                console.log(response.data['admin']);
                setAdmin(response.data['admin']);
                
            });
        }
           
        })
        return () => {
            unsubscribe();
            
        }

    }, [idToken])
    
    function register(email, password) {
        return createUserWithEmailAndPassword(auth, email, password);
    }
    function signIn (email, password) {
        
        return signInWithEmailAndPassword(auth, email, password);
    }
    function signInWithGoogle () {
        const googleProvider = new GoogleAuthProvider();

        return signInWithPopup(auth, googleProvider);
    }
    function signInWithFacebook () {
        const facebookProvider = new FacebookAuthProvider();

        return signInWithPopup(auth, facebookProvider);
    }
    function signOutAccount() {
        return signOut(auth);
    }
    function forgotPassword(email) {
        return sendPasswordResetEmail(auth, email);
    }
    async function token(value)  {
        return getIdToken(value, true).then(res => setIdToken(res));
    }
    


    const value = {
        currentUser,
        admin,
        idToken,
        register,
        signIn,
        signInWithGoogle,
        signInWithFacebook,
        signOutAccount,
        forgotPassword
    };

    return  <AuthContext.Provider value={value}>
            {children}
            </AuthContext.Provider>
};