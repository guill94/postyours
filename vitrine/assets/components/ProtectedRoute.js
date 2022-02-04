import React from 'react';
import { useAuth } from "../contexts/AuthContext";
import { Navigate, Outlet } from 'react-router-dom';



export const ProtectedRouteWhenSignedIn = () => {
    const { currentUser } = useAuth();
    return currentUser ? <Navigate to="/" /> : <Outlet/>
}

export const ProtectedRouteNotSignedIn = () => {
    const { currentUser } = useAuth();
    return currentUser ?  <Outlet/> : <Navigate to="/signinr" />
}

export const ProtectedAdmin = () => {
    const { admin } = useAuth();
    return admin == true ? <Outlet/> : <Navigate to="/" />   
}